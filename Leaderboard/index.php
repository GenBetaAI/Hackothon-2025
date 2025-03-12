<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>GenBeta AI Leaderboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0f0f0f;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
        }

        .leaderboard-container {
            width: 90%;
            max-width: 800px;
            background: #1e1e1e;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            padding: 20px;
            animation: fadeIn 1s ease-in-out;
        }

        h2 {
            text-align: center;
            color: #ffd700;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .leaderboard-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .leaderboard-table th,
        .leaderboard-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #333;
        }

        .leaderboard-table th {
            background-color: #333;
            color: #ffd700;
            font-weight: bold;
        }

        .leaderboard-table tr:hover {
            background-color: #2a2a2a;
        }

        .current-user {
            background-color: #3a3a3a;
            font-weight: bold;
        }

        .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .actions button {
            padding: 10px 20px;
            background: #ffd700;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #1a1a1a;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .actions button:hover {
            background: #ffcc00;
        }

        .coin-controls {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .coin-controls button {
            padding: 10px 20px;
            background: #4CAF50;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #ffffff;
            font-weight: bold;
            transition: background 0.3s ease;
        }

        .coin-controls button:hover {
            background: #45a049;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    </style>
</head>
<body>
    <div class="leaderboard-container">
        <h2>🏆 GenBeta AI Leaderboard</h2>
        <div class="actions">
            <button onclick="addCoins(100)">Add 100 Coins</button>
            <button onclick="resetData()">Reset Data</button>
            <button onclick="addTestUsers()">Add Test Users</button>
        </div>
        <table class="leaderboard-table">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>User ID</th>
                    <th>Coins</th>
                    <th>Last Activity</th>
                </tr>
            </thead>
            <tbody id="leaderboardBody"></tbody>
        </table>
    </div>
    <script>
        // Initialize user data
        function initializeUser() {
            if (!localStorage.getItem('userId')) {
                const userId = crypto.randomUUID().substring(0, 8);
                localStorage.setItem('userId', userId);
                localStorage.setItem('userCoins', 0);
                localStorage.setItem('lastPageTime', Date.now());
            }
        }

        // Get or create users array
        function getUsers() {
            let users = JSON.parse(localStorage.getItem('users')) || [];
            
            // Add current user if not exists
            const currentUser = {
                userId: localStorage.getItem('userId'),
                coins: parseInt(localStorage.getItem('userCoins')),
                lastActive: parseInt(localStorage.getItem('lastPageTime'))
            };
            
            if (!users.some(u => u.userId === currentUser.userId)) {
                users.push(currentUser);
                localStorage.setItem('users', JSON.stringify(users));
            }
            
            return users.sort((a, b) => b.coins - a.coins);
        }

        // Update leaderboard display
        function updateLeaderboard() {
            const users = getUsers();
            const tbody = document.getElementById('leaderboardBody');
            tbody.innerHTML = '';
            
            users.forEach((user, index) => {
                const row = document.createElement('tr');
                if (user.userId === localStorage.getItem('userId')) {
                    row.classList.add('current-user');
                }
                
                row.innerHTML = `
                    <td>#${index + 1}</td>
                    <td>${user.userId}</td>
                    <td>${user.coins.toLocaleString()}</td>
                    <td>${new Date(user.lastActive).toLocaleString()}</td>
                `;
                
                tbody.appendChild(row);
            });
        }

        // Add coins to current user
        function addCoins(amount) {
            const currentCoins = parseInt(localStorage.getItem('userCoins'));
            const newCoins = currentCoins + amount;
            localStorage.setItem('userCoins', newCoins);
            
            // Update users array
            const users = getUsers();
            const currentUser = users.find(u => u.userId === localStorage.getItem('userId'));
            currentUser.coins = newCoins;
            currentUser.lastActive = Date.now();
            localStorage.setItem('users', JSON.stringify(users));
            
            updateLeaderboard();
        }

        // Reset all data
        function resetData() {
            localStorage.clear();
            initializeUser();
            updateLeaderboard();
        }

        // Add test users (for demonstration)
        function addTestUsers() {
            const testUsers = [
                { userId: 'AI-001', coins: 1500, lastActive: Date.now() - 3600000 },
                { userId: 'AI-002', coins: 2450, lastActive: Date.now() - 7200000 },
                { userId: 'AI-003', coins: 1800, lastActive: Date.now() - 10800000 }
            ];
            
            const users = getUsers();
            testUsers.forEach(testUser => {
                if (!users.some(u => u.userId === testUser.userId)) {
                    users.push(testUser);
                }
            });
            
            localStorage.setItem('users', JSON.stringify(users));
            updateLeaderboard();
        }
        // Add this to your existing code

// Coin increment configuration
const COINS_PER_MINUTE = 1; // Change this value as needed
let coinInterval;

// Start coin increment
function startCoinIncrement() {
    if (coinInterval) clearInterval(coinInterval); // Clear existing interval
    
    coinInterval = setInterval(() => {
        addCoins(COINS_PER_MINUTE);
        console.log(`Added ${COINS_PER_MINUTE} coins`);
    }, 60000); // 60000ms = 1 minute
}

// Stop coin increment
function stopCoinIncrement() {
    if (coinInterval) {
        clearInterval(coinInterval);
        console.log('Coin increment stopped');
    }
}

// Update initialization to start the increment
function initializeUser() {
    if (!localStorage.getItem('userId')) {
        const userId = crypto.randomUUID().substring(0, 8);
        localStorage.setItem('userId', userId);
        localStorage.setItem('userCoins', 0);
        localStorage.setItem('lastPageTime', Date.now());
    }
    startCoinIncrement(); // Start the coin increment
}

// Add a button to control the increment
document.body.innerHTML += `
    <div class="actions">
        <button onclick="startCoinIncrement()">Start Coin Increment</button>
        <button onclick="stopCoinIncrement()">Stop Coin Increment</button>
    </div>
`;

// Update the addCoins function to save last increment time
function addCoins(amount) {
    const currentCoins = parseInt(localStorage.getItem('userCoins'));
    const newCoins = currentCoins + amount;
    localStorage.setItem('userCoins', newCoins);
    localStorage.setItem('lastIncrementTime', Date.now());
    
    // Update users array
    const users = getUsers();
    const currentUser = users.find(u => u.userId === localStorage.getItem('userId'));
    currentUser.coins = newCoins;
    currentUser.lastActive = Date.now();
    localStorage.setItem('users', JSON.stringify(users));
    
    updateLeaderboard();
}

// Handle page visibility changes
document.addEventListener('visibilitychange', () => {
    if (document.visibilityState === 'visible') {
        // Calculate missed increments when the page becomes visible
        const lastIncrement = parseInt(localStorage.getItem('lastIncrementTime')) || Date.now();
        const minutesSinceLast = Math.floor((Date.now() - lastIncrement) / 60000);
        
        if (minutesSinceLast > 0) {
            addCoins(minutesSinceLast * COINS_PER_MINUTE);
        }
        startCoinIncrement();
    } else {
        stopCoinIncrement();
    }
});


        // Initial setup
        initializeUser();
        updateLeaderboard();
    </script>
</body>
</html>