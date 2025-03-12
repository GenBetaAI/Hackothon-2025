const typingForm = document.querySelector(".typing-form");
const chatContainer = document.querySelector(".chat-list");
const suggestions = document.querySelectorAll(".suggestion");
const toggleThemeButton = document.querySelector("#theme-toggle-button");
const deleteChatButton = document.querySelector("#delete-chat-button");

// State variables
let userMessage = null;
let isResponseGenerating = false;

// API configuration
const API_KEY = "AIzaSyDGJRFUulLheYt8gi0hLEuNTIac71bTaIU"; // Your API key here
const API_URL = `https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=${API_KEY}`;

// Load theme and chat data from local storage on page load
const loadDataFromLocalstorage = () => {
  const savedChats = localStorage.getItem("saved-chats");
  const isLightMode = (localStorage.getItem("themeColor") === "light_mode");
  // Apply the stored theme
  document.body.classList.toggle("light_mode", isLightMode);
  toggleThemeButton.innerText = isLightMode ? "dark_mode" : "light_mode";
  // Restore saved chats or clear the chat container
  chatContainer.innerHTML = savedChats || '';
  document.body.classList.toggle("hide-header", savedChats);
  chatContainer.scrollTo(0, chatContainer.scrollHeight); // Scroll to the bottom
}

// Create a new message element and return it
const createMessageElement = (content, ...classes) => {
  const div = document.createElement("div");
  div.classList.add("message", ...classes);
  div.innerHTML = content;
  return div;
}

// Show typing effect by displaying words one by one
const showTypingEffect = (text, textElement, incomingMessageDiv) => {
  const words = text.split(' ');
  let currentWordIndex = 0;
  const typingInterval = setInterval(() => {
    // Append each word to the text element with a space
    textElement.innerText += (currentWordIndex === 0 ? '' : ' ') + words[currentWordIndex++];
    incomingMessageDiv.querySelector(".icon").classList.add("hide");
    // If all words are displayed
    if (currentWordIndex === words.length) {
      clearInterval(typingInterval);
      isResponseGenerating = false;
      incomingMessageDiv.querySelector(".icon").classList.remove("hide");
      localStorage.setItem("saved-chats", chatContainer.innerHTML); // Save chats to local storage
    }
    chatContainer.scrollTo(0, chatContainer.scrollHeight); // Scroll to the bottom
  }, 75);
}

// Fetch response from the API based on user message
const generateAPIResponse = async (incomingMessageDiv) => {
  const textElement = incomingMessageDiv.querySelector(".text");
  try {
    // Send a POST request to the API with the user's message
    const response = await fetch(API_URL, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        contents: [{
          role: "user",
          parts: [{
            text: userMessage + "\nPlease provide a detailed, structured response with specific examples and actionable steps."
          }]
        }]
      }),
    });
    const data = await response.json();
    if (!response.ok) throw new Error(data.error.message || 'Failed to get response');
    // Get the API response text and format it with proper HTML structure
    let apiResponse = data.candidates[0]?.content?.parts[0]?.text || 'I apologize, but I am unable to process your request at the moment. Please try again.';
    
    // Format the response with minimal HTML tags
    apiResponse = apiResponse
      // Format code blocks with language detection
      .replace(/```([\w-]*)?\n([\s\S]*?)```/g, (match, lang, code) => {
        const language = lang || 'plaintext';
        return `${code.trim()}`;
      })
      // Format inline code
      .replace(/`([^`]+)`/g, '$1')
      // Format bold text
      .replace(/\*\*(.+?)\*\*/g, '$1')
      // Format lists
      .replace(/^\s*[-*]\s+(.+)/gm, '• $1\n')
      // Format headings
      .replace(/^###\s+(.+)/gm, '$1\n')
      .replace(/^##\s+(.+)/gm, '$1\n')
      .replace(/^#\s+(.+)/gm, '$1\n')
      // Add line breaks for readability
      .replace(/\n{2,}/g, '\n\n');

    showTypingEffect(apiResponse, textElement, incomingMessageDiv);
  } catch (error) {
    isResponseGenerating = false;
    textElement.innerText = 'I apologize, but I encountered an error while processing your request. Please try again.';
    textElement.parentElement.closest(".message").classList.add("error");
  } finally {
    incomingMessageDiv.classList.remove("loading");
  }
};

// Show a loading animation while waiting for the API response
const showLoadingAnimation = () => {
  const html = `<div class="message-content">
                  <img class="avatar" src="logo.jpeg" alt="Zephyr avatar">
                  <p class="text"></p>
                  <div class="loading-indicator">
                    <div class="loading-bar"></div>
                    <div class="loading-bar"></div>
                    <div class="loading-bar"></div>
                  </div>
                </div>
                <span onClick="copyMessage(this)" class="icon material-symbols-rounded">content_copy</span>`;
  const incomingMessageDiv = createMessageElement(html, "incoming", "loading");
  chatContainer.appendChild(incomingMessageDiv);
  chatContainer.scrollTo(0, chatContainer.scrollHeight); // Scroll to the bottom
  generateAPIResponse(incomingMessageDiv);
}

// Copy message text to the clipboard
const copyMessage = (copyButton) => {
  const messageText = copyButton.parentElement.querySelector(".text").innerText;
  navigator.clipboard.writeText(messageText);
  copyButton.innerText = "done"; // Show confirmation icon
  setTimeout(() => copyButton.innerText = "content_copy", 1500); // Reset icon after 1.5s
}



// Handle form submission
typingForm.addEventListener("submit", (e) => {
  e.preventDefault();
  if (!isResponseGenerating) {
    userMessage = e.target.querySelector(".typing-input").value.trim();
    if (userMessage) {
      e.target.querySelector(".typing-input").value = "";
      document.body.classList.add("hide-header");
      const html = `<div class="message-content">
                      <img class="avatar" src="user.svg" alt="User avatar">
                      <p class="text">${userMessage}</p>
                    </div>`;
      chatContainer.appendChild(createMessageElement(html, "outgoing"));
      chatContainer.scrollTo(0, chatContainer.scrollHeight);
      setTimeout(showLoadingAnimation, 500);
      isResponseGenerating = true;
    }
  }
});

// Handle suggestion clicks
suggestions.forEach((suggestion) => {
  suggestion.addEventListener("click", () => {
      userMessage = suggestion.querySelector(".text2").innerText;
      document.body.classList.add("hide-header");
      const html = `<div class="message-content">
                      <img class="avatar" src="user.svg" alt="User avatar">
                      <p class="text">${userMessage}</p>
                    </div>`;
      chatContainer.appendChild(createMessageElement(html, "outgoing"));
      chatContainer.scrollTo(0, chatContainer.scrollHeight);
      setTimeout(showLoadingAnimation, 100);
      isResponseGenerating = true;
    }
  );
});

// Handle theme toggle
toggleThemeButton.addEventListener("click", () => {
  document.body.classList.toggle("light_mode");
  localStorage.setItem("themeColor", document.body.classList.contains("light_mode") ? "light_mode" : "dark_mode");
  toggleThemeButton.innerText = document.body.classList.contains("light_mode") ? "dark_mode" : "light_mode";
});

// Handle chat deletion
deleteChatButton.addEventListener("click", () => {
  if (confirm("Are you sure you want to delete all the chats?")) {
    localStorage.removeItem("saved-chats");
    loadDataFromLocalstorage();
  }
});

// Load saved chats and theme when the page loads
loadDataFromLocalstorage();
