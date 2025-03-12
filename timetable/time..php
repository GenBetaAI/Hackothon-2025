<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neon Timetable Pro</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --neon-blue: #00f3ff;
            --neon-purple: #bc13fe;
            --dark-bg: #0a0a12;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --error-red: #ff2e4c;
            --success-green: #00ff88;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(45deg, var(--dark-bg) 0%, #1a1a2e 100%);
            color: #fff;
            min-height: 100vh;
            margin: 0;
            overflow-x: hidden;
        }

        .cyber-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
        }

        .cyber-header {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .cyber-title {
            font-size: 3rem;
            background: linear-gradient(45deg, var(--neon-blue), var(--neon-purple));
            --webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 0 15px rgba(188, 19, 254, 0.4);
            animation: titleGlow 2s infinite alternate;
            margin: 2rem 0;
        }

        .cyber-card {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .cyber-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 243, 255, 0.2);
        }

        .grid-3-col {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .cyber-input {
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid var(--neon-blue);
            color: var(--neon-blue);
            padding: 1rem;
            border-radius: 8px;
            transition: all 0.3s;
            width: 100%;
        }

        .cyber-input:focus {
            outline: none;
            border-color: var(--neon-purple);
            box-shadow: 0 0 15px rgba(188, 19, 254, 0.3);
        }

        .cyber-btn {
            background: linear-gradient(45deg, var(--neon-blue), var(--neon-purple));
            color: #000;
            border: none;
            padding: 1rem 2rem;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 700;
            text-transform: uppercase;
            transition: transform 0.3s;
            width: 100%;
        }

        .cyber-btn:hover {
            transform: scale(1.05);
        }

        .timetable-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
        }

        .time-block {
            position: relative;
            padding: 1.5rem;
            border-left: 4px solid var(--neon-purple);
            background: linear-gradient(90deg, rgba(11, 11, 25, 0.6) 0%, rgba(11, 11, 25, 0.3) 100%);
            border-radius: 8px;
            animation: blockEntrance 0.6s ease-out;
        }

        .time-block.low { border-color: var(--neon-blue); }
        .time-block.medium { border-color: #ffd700; }
        .time-block.high { border-color: var(--error-red); }

        .event-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .event-actions button {
            background: none;
            border: none;
            color: var(--neon-blue);
            cursor: pointer;
            margin-left: 0.5rem;
        }

        .notification-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }

        .notification {
            padding: 15px 25px;
            border-radius: 8px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
            background: rgba(0, 0, 0, 0.9);
            border: 1px solid;
            animation: slideIn 0.3s ease-out;
        }

        .notification.error {
            border-color: var(--error-red);
            color: var(--error-red);
        }

        .notification.success {
            border-color: var(--success-green);
            color: var(--success-green);
        }

        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }

        @keyframes titleGlow {
            0% { text-shadow: 0 0 15px rgba(188, 19, 254, 0.4); }
            100% { text-shadow: 0 0 25px rgba(0, 243, 255, 0.6); }
        }

        @keyframes blockEntrance {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            from { transform: translateX(100%); }
            to { transform: translateX(0); }
        }

        @keyframes float {
            0% { transform: translateY(0) translateX(0); opacity: 0.8; }
            100% { transform: translateY(-100vh) translateX(100vw); opacity: 0; }
        }

        @media (max-width: 768px) {
            .grid-3-col {
                grid-template-columns: 1fr;
            }
            
            .cyber-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="cyber-container">
        <div class="cyber-header">
            <h1 class="cyber-title">NEON SCHEDULE PRO</h1>
            <div class="grid-3-col">
                <input type="time" class="cyber-input" id="eventTime">
                <input type="text" class="cyber-input" placeholder="Event Title" id="eventTitle">
                <select class="cyber-input" id="eventPriority">
                    <option value="low">Low Priority</option>
                    <option value="medium">Medium Priority</option>
                    <option value="high">High Priority</option>
                </select>
            </div>
            <button class="cyber-btn" onclick="addEvent()">
                <i class="fas fa-rocket"></i> Launch Event
            </button>
        </div>

        <div class="timetable-grid" id="timetable"></div>
        <div class="notification-container" id="notifications"></div>
        <div class="particles" id="particles"></div>
    </div>

    <script>
        let events = JSON.parse(localStorage.getItem('neonTimetable')) || [];

        function addEvent() {
            const timeInput = document.getElementById('eventTime');
            const titleInput = document.getElementById('eventTitle');
            const prioritySelect = document.getElementById('eventPriority');

            if (!timeInput.value || !titleInput.value.trim()) {
                showNotification('Please fill all fields!', 'error');
                return;
            }

            const newEvent = {
                id: Date.now().toString(),
                time: timeInput.value,
                title: titleInput.value.trim(),
                priority: prioritySelect.value,
                completed: false,
                createdAt: new Date()
            };

            events.push(newEvent);
            saveEvents();
            renderEvents();
            clearInputs();
            showNotification('Event launched!', 'success');
        }

        function renderEvents() {
            const container = document.getElementById('timetable');
            container.innerHTML = '';

            events.sort((a, b) => a.time.localeCompare(b.time)).forEach(event => {
                const eventElement = document.createElement('div');
                eventElement.className = `time-block ${event.priority}`;
                eventElement.innerHTML = `
                    <div class="event-header">
                        <span>${formatTime(event.time)}</span>
                        <div class="event-actions">
                            <button onclick="toggleComplete('${event.id}')">
                                <i class="fas fa-${event.completed ? 'check-circle' : 'circle'}"></i>
                            </button>
                            <button onclick="deleteEvent('${event.id}')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="event-title ${event.completed ? 'completed' : ''}">${event.title}</div>
                `;
                container.appendChild(eventElement);
            });
        }

        function deleteEvent(id) {
            events = events.filter(event => event.id !== id);
            saveEvents();
            renderEvents();
            showNotification('Event deleted!', 'error');
        }

        function toggleComplete(id) {
            events = events.map(event => 
                event.id === id ? {...event, completed: !event.completed} : event
            );
            saveEvents();
            renderEvents();
        }

        function formatTime(timeString) {
            const [hours, minutes] = timeString.split(':');
            const period = hours >= 12 ? 'PM' : 'AM';
            const formattedHours = hours % 12 || 12;
            return `${formattedHours}:${minutes} ${period}`;
        }

        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `notification ${type}`;
            notification.innerHTML = `
                <i class="fas fa-${type === 'error' ? 'exclamation-triangle' : 'check-circle'}"></i>
                ${message}
            `;
            
            document.getElementById('notifications').appendChild(notification);
            setTimeout(() => notification.remove(), 3000);
        }

        function saveEvents() {
            localStorage.setItem('neonTimetable', JSON.stringify(events));
        }

        function initParticles() {
            const particles = document.getElementById('particles');
            for (let i = 0; i < 50; i++) {
                const particle = document.createElement('div');
                particle.style.cssText = `
                    position: absolute;
                    width: 2px;
                    height: 2px;
                    background: ${Math.random() > 0.5 ? 'var(--neon-blue)' : 'var(--neon-purple)'};
                    left: ${Math.random() * 100}%;
                    top: ${Math.random() * 100}%;
                    animation: float ${5 + Math.random() * 10}s infinite;
                `;
                particles.appendChild(particle);
            }
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', () => {
            initParticles();
            renderEvents();
            document.getElementById('eventTitle').addEventListener('keypress', e => {
                if(e.key === 'Enter') addEvent();
            });
        });
    </script>
</body>
</html>