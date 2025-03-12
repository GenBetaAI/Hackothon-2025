<!DOCTYPE html>
<!-- Coding By Harshvaardhan - ZephyrVRX -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZephyrVRX Ai</title>
  <!-- Linking Google Fonts For Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="header">
    <!-- Header Greetings -->
    <h1 class="title">Hello, there</h1>
    <p class="subtitle">How can I help you today?</p>
    <!-- Suggestion list -->
    <div class="suggestion-list">
      <a href="../roadmap/index.php">
        <li class="suggestion" data-path="it">
          <h4 class="text">I'm interested in IT / Software Development Career</h4>
          <span class="icon material-symbols-rounded">computer</span>
        </li>
      </a>
        <li class="suggestion" data-path="non-it">
            <h4 class="text2">I'm interested in Non-IT Career Paths</h4>
            <span class="icon material-symbols-rounded">work</span>
        </li>
    </div>
  </header>
  <!-- Chat List / Container -->
  <div class="chat-list"></div>
  <!-- Typing Area -->
  <div class="typing-area">
    <form action="#" class="typing-form">
      <div class="input-wrapper">
        <input type="text" placeholder="Enter a prompt here" class="typing-input" required />
        <button id="send-message-button" class="icon material-symbols-rounded">send</button>
      </div>
      <div class="action-buttons">
        <span id="theme-toggle-button" class="icon material-symbols-rounded">light_mode</span>
        <span id="delete-chat-button" class="icon material-symbols-rounded">delete</span>
      </div>
    </form>
    <p class="disclaimer-text">
      ZephyrVRX may display inaccurate info, including about people, so double-check its responses.
    </p>
  </div>
  <script src="script.js"></script>
</body>
</html>