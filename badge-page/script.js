document.addEventListener("DOMContentLoaded", function () {
    // 1) Track daily streak
    checkDailyStreak();
    updateBadgeStatusFromStreak();
  
    // 2) (Optional) Check all subjects to see if they're already complete
    //    If you want to unlock badges if the user had completed them in a past session
    //    This depends on how your site logic is structured
    checkAllSubjectsCompletion();
  
    // 3) Listen for “Mark as Complete” clicks in course.js (the dynamic part)
    //    The function markVideoComplete() calls checkIfSubjectComplete()
    //    which then calls unlockBadge(...) if needed.
  
    // 4) Share button
    document.getElementById("shareBtn").addEventListener("click", function () {
      alert("Share functionality coming soon!");
    });
  });
  
  /* ---------- Streak Functions ---------- */
  const streakKey = 'visitStreak';
  const lastVisitKey = 'lastVisit';
  
  function checkDailyStreak() {
    // ... see the code snippet above ...
  }
  
  function updateBadgeStatusFromStreak() {
    // ... see the code snippet above ...
  }
  
  /* ---------- Badge Unlocking ---------- */
  function unlockBadge(badgeName) {
    const badgeElem = document.querySelector(`.badge[data-badge='${badgeName}']`);
    if (badgeElem && badgeElem.dataset.unlocked === "false") {
      badgeElem.dataset.unlocked = "true";
      badgeElem.classList.remove("locked");
      badgeElem.querySelector("p").innerText = "Unlocked";
      document.getElementById("unlockSound").play();
    }
  }
  
  /* ---------- Course Completion ---------- */
  // For example, check all possible subjects on page load
  function checkAllSubjectsCompletion() {
    const userProgress = JSON.parse(localStorage.getItem('userProgress')) || {};
    // Loop through standards, subjects, etc.
    // If a subject is 100% complete, call unlockBadge(...) for that subject
  }
  
  function markVideoComplete(standard, subject, videoIndex) {
    // ... see the snippet above ...
  }
  
  function checkIfSubjectComplete(standard, subject) {
    // ... see the snippet above ...
  }
  document.addEventListener("DOMContentLoaded", function () {
    // Remove manual badge click events.
    // Instead, automatically check conditions on page load.
    checkSubjectCompletion();
    checkVisitStreak();
  
    document.getElementById("shareBtn").addEventListener("click", function () {
      alert("Share functionality coming soon!");
    });
  });
  
  // Helper function to unlock a badge given its data-badge name.
  function unlockBadge(badgeName) {
    var badgeElem = document.querySelector(".badge[data-badge='" + badgeName + "']");
    if (badgeElem && badgeElem.dataset.unlocked === "false") {
      badgeElem.dataset.unlocked = "true";
      badgeElem.classList.remove("locked");
      badgeElem.querySelector("p").innerText = "Unlocked";
      // Play the unlock sound effect.
      document.getElementById("unlockSound").play();
    }
  }
  
  // Simulated check for subject completion.
  // In a real implementation, replace these checks with actual progress data.
  function checkSubjectCompletion() {
    // For example, if the user has completed all Maths videos, localStorage flag "mathsComplete" is set.
    if (localStorage.getItem("mathsComplete") === "true") {
      unlockBadge("MathsTopper");
    }
    if (localStorage.getItem("englishComplete") === "true") {
      unlockBadge("EnglishMaster");
    }
    if (localStorage.getItem("socialScienceComplete") === "true") {
      unlockBadge("SocialScienceMaster");
    }
    if (localStorage.getItem("scienceComplete") === "true") {
      unlockBadge("ScienceMaster");
    }
    // Additional subject checks can be added here.
  }
  
  // Check the user's daily visit streak and unlock streak badges.
  function checkVisitStreak() {
    var lastVisit = localStorage.getItem("lastVisit");
    var streak = parseInt(localStorage.getItem("visitStreak")) || 0;
    var today = new Date().toISOString().split("T")[0];
  
    if (lastVisit) {
      var lastVisitDate = new Date(lastVisit);
      var todayDate = new Date(today);
      var diffTime = todayDate - lastVisitDate;
      var diffDays = diffTime / (1000 * 60 * 60 * 24);
      if (diffDays === 1) {
        streak++;
      } else if (diffDays > 1) {
        streak = 1; // Reset streak if a day is missed.
      }
    } else {
      streak = 1;
    }
    localStorage.setItem("visitStreak", streak.toString());
    localStorage.setItem("lastVisit", today);
  
    // Unlock streak badges based on thresholds.
    if (streak >= 7) {
      unlockBadge("7DaysStreak");
    }
    if (streak >= 14) {
      unlockBadge("14DaysStreak");
    }
    if (streak >= 21) {
      unlockBadge("21DaysStreak");
    }
    if (streak >= 30) {
      unlockBadge("1MonthStreak");
    }
  }
    