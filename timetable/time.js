// JavaScript Code
let events = JSON.parse(localStorage.getItem('timetableEvents')) || [];
let notificationCheckInterval;

function addEvent() {
    const time = document.getElementById('timeInput').value;
    const eventText = document.getElementById('eventInput').value.trim();
    
    if (!time || !eventText) {
        alert('Please fill all fields!');
        return;
    }

    const event = {
        id: Date.now(),
        time,
        text: eventText,
        notified: false
    };

    events.push(event);
    saveEvents();
    renderEvents();
    document.getElementById('eventInput').value = '';
}

function renderEvents() {
    const container = document.getElementById('timetable');
    container.innerHTML = '';
    
    events.sort((a, b) => a.time.localeCompare(b.time)).forEach(event => {
        const eventElement = document.createElement('div');
        eventElement.className = 'event-card';
        eventElement.innerHTML = `
            <div>
                <span class="event-time">${formatTime(event.time)}</span>
                <span class="event-text">${event.text}</span>
            </div>
            <button class="delete-btn" onclick="deleteEvent(${event.id})">
                <i class="fas fa-trash"></i>
            </button>
        `;
        container.appendChild(eventElement);
    });
}

function deleteEvent(id) {
    events = events.filter(event => event.id !== id);
    saveEvents();
    renderEvents();
}

function formatTime(timeString) {
    const [hours, minutes] = timeString.split(':');
    return `${Number(hours) % 12 || 12}:${minutes} ${hours >= 12 ? 'PM' : 'AM'}`;
}

function checkNotifications() {
    const now = new Date();
    const currentTime = `${now.getHours().toString().padStart(2, '0')}:${now.getMinutes().toString().padStart(2, '0')}`;
    
    events.forEach(event => {
        if (event.time === currentTime && !event.notified) {
            showNotification(event);
            event.notified = true;
        }
    });
    
    saveEvents();
    updateNotificationBadge();
}

function showNotification(event) {
    const notification = document.createElement('div');
    notification.className = 'notification';
    notification.innerHTML = `
        <div class="notification-content">
            <i class="fas fa-bell"></i>
            <strong>${formatTime(event.time)}:</strong> ${event.text}
        </div>
    `;
    
    document.getElementById('notifications').prepend(notification);
    setTimeout(() => notification.remove(), 5000);
}

function updateNotificationBadge() {
    const count = events.filter(event => !event.notified).length;
    document.getElementById('notificationCount').textContent = count;
}

function saveEvents() {
    localStorage.setItem('timetableEvents', JSON.stringify(events));
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    renderEvents();
    notificationCheckInterval = setInterval(checkNotifications, 60000); // Check every minute
    updateNotificationBadge();
});

// Bell click handler
document.getElementById('bell').addEventListener('click', () => {
    document.getElementById('notifications').classList.toggle('visible');
});