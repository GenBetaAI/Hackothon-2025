 <!-- Navigation -->
<nav class="navbar navbar-expand-lg py-3">
    <div class="container">
        <a class="navbar-brand fw-bold" href="../login-user/index.php">GenBeta AI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="../login-user/index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="../login-user/features.php">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="../jobs/index.php">Jobs</a></li>
                <li class="nav-item"></li><a class="nav-link" href="about.php">About Us</a>
                <li class="nav-item"><a class="nav-link" href="../login-user/contact.php">Contact</a></li>
                <a href="../leaderboard/index.php" class="nav-link"><img src="../img/leaderboard/img.jfif" class="coin-img"></a>
            </ul>
            <img src="../img/user-settings-img/list.svg" width="10px" class="user-pic" onclick="toogleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="setting-links">
                        <img src="../img/user-settings-img/profile.png" class="setting-icon">
                        <a href="../user-end/profile.php">Edit Profile<img src="../img/user-settings-img/arrow.png" width="10px"></a>
                    </div>
                    <div class="setting-links">
                        <img src="../img/user-settings-img/setting.png" class="setting-icon">
                        <a href="../user-end/user-dashboard.php">Dashboard <img src="../img/user-settings-img/arrow.png" width="10px"></a>
                    </div>
                    <div class="setting-links">
                        <img src="../img/user-settings-img/help.png" class="setting-icon">
                        <a href="../chatbot/index.php">Mentor Help <img src="../img/user-settings-img/arrow.png" width="10px"></a>
                    </div>
                    <div class="setting-links">
                        <img src="../img/user-settings-img/logout.png" class="setting-icon">
                        <a href="../login-signup/logout.php">Logout <img src="../img/user-settings-img/arrow.png" width="10px"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>
    let subMenu = document.getElementById("subMenu");

    function toogleMenu(){
        subMenu.classList.toggle("open-menu")
    }

</script>