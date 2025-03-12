<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Profile Page
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="profile.css">
 </head>
 <body>
     <?php require('../inc/u-navbar.php'); ?>
  <div class="d-flex">
   <!-- Sidebar -->
   <div class="sidebar">

    <div>
        <h2>
        My Account
        </h2>
        <ul>
        <li>
        <a class="active" href="#" onclick="showSection('profile')">
            <i class="fas fa-user">
            </i>
            Profile
        </a>
        </li>
        <li>
        <a href="../login-user/terms&condition.php" onclick="showSection('terms')">
            <i class="fas fa-file-alt">
            </i>
            Terms and Conditions
        </a>
        </li>
        <li>
        <a href="../privacy-policy.php" onclick="showSection('privacy')">
            <i class="fas fa-shield-alt">
            </i>
            Privacy Policy
        </a>
        </li>
        </ul>
    </div>
   </div>
   <!-- Main Content -->
   <div class="main-content">
    <div class="header">
     <h1>Profile</h1>

    </div>
    <div class="profile-card" id="profile">
     <div class="profile-header">
      <img alt="Upload Your Profile Pic" height="100" id="profile-pic" src="" width="100"/>
      <div>
       <h3 id="profile-name">Your Name
       </h3>
       <p id="profile-email">Your Email address</p>
       <span class="me-2" class="btn-edit" onclick="editProfilePic()">Edit Profile Picture</span>
       <input class="edit-input" id="profile-pic-input" onchange="updateProfilePic(event)" style="display: none;" type="file"/>
      </div>
     </div>
     <div class="grid">
      <!-- Personal Details -->
      <div>
       <h4>Personal details</h4>
       <div class="info">
        <span class="me-2">Full name:</span>
        <span class="me-2" id="full-name">Enter Your Full Name</span>
        <span class="me-2" class="btn-edit" onclick="editDetail('full-name')">Edit</span>
       </div>
       <div class="info">
        <span class="me-2">Date of Birth:</span>
        <input class="edit-input" id="dob" onblur="saveDetail('dob')" type="date"/>
       </div>
       <div class="info">
        <span class="me-2">Select Your Gender:</span>
        <select class="form-select mt-2" id="gender" onblur="saveDetail('gender')">
         <option value="Male">Male</option>
         <option value="Female">Female</option>
         <option value="Other">Other</option>
        </select>
       </div>
       <div class="info">
        <span class="me-2">Nationality:</span>
        <select class="form-select mt-2 mb-3" id="nationality" onblur="saveDetail('nationality')">
         <option value="American">American</option>
         <option value="Canadian">Canadian</option>
         <option value="British">British</option>
         <option value="Australian">Australian</option>
        </select>
       </div>
       <div class="info">
        <span class="me-2">Address:</span>
        <span class="me-2" id="address"><i class="fas fa-flag-usa me-2"></i>Enter Your Address</span>
        <span class="me-2" class="btn-edit" onclick="editDetail('address')">Edit</span>
       </div>
       <div class="info">
        <span class="me-2">Phone Number:</span>
        <span class="me-2" id="phone">Your Contact Number</span>
        <span class="me-2" class="btn-edit" onclick="editDetail('phone')">Edit</span>
       </div>
       <div class="info">
        <span class="me-2">Email:</span>
        <span class="me-2" id="email">Enter your email address</span>
        <span class="me-2" class="btn-edit" onclick="editDetail('email')">Edit</span>
       </div>
      </div>
      <!-- Account Details -->
      <div>
       <h4>Account Details</h4>
       <div class="info">
        <span class="me-2">Display Name:</span>
        <span class="me-2" id="display-name">Enter Your Display Name</span>
        <span class="me-2" class="btn-edit" onclick="editDetail('display-name')">Edit</span>
       </div>
       <div class="info">
        <span class="me-2">Account Created:</span>March 20, 2020
       </div>
       <div class="info">
        <span class="me-2">Last Login:</span>August 22, 2024
       </div>
       <div class="info">
        <span class="me-2">Membership Status:</span>
        <span class="me-2" class="text-red-500" id="membership-status">Deactivated</span>
       </div>
       <div class="info">
        <span class="me-2">Language Preference:</span>English
       </div>

      </div>
      <!-- Security Settings -->
      <div>
       <h4>Security Settings</h4>
       <div class="info">
        <span class="me-2" class="me-2">Recent Account Activity:</span>No Suspicious Activity Detected
       </div>
      </div>
      <!-- Preferences -->
      <div>
       <h4>Preferences</h4>
       <div class="info">
        <span class="me-2" class="me-2">Email Notifications:</span>
        <span class="me-2" class="text-purple-500">Subscribed</span>
       </div>
       <div class="info">
        <span class="me-2">Content Preferences:</span>
        <span class="me-2" id="content-preferences">Technology, Design, Innovation</span>
        <span class="me-2" class="btn-edit" onclick="editDetail('content-preferences')">Edit</span>
       </div>
       <div class="info">
        <span class="me-2">Default Dashboard View:</span>Compact Mode
       </div>
      </div>
     </div>
    </div>
    <div class="profile-card" id="workspace" style="display: none;">
    </div>
    <div class="profile-card" id="terms" style="display: none;">
    </div>
    <div class="profile-card" id="privacy" style="display: none;">
    </div>
   </div>
  </div>

  <?php require('../inc/u-footer.php'); ?>
  <script>
   function showSection(sectionId) {
        const sections = document.querySelectorAll('.profile-card');
        sections.forEach(section => {
            section.style.display = 'none';
        });
        document.getElementById(sectionId).style.display = 'block';
    }

    function editProfilePic() {
        document.getElementById('profile-pic-input').click();
    }

    function updateProfilePic(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const img = document.getElementById('profile-pic');
            img.src = reader.result;
            localStorage.setItem('profile-pic', reader.result);
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    function editDetail(detailId) {
        const detailElement = document.getElementById(detailId);
        const currentValue = detailElement.textContent;
        const input = document.createElement('input');
        input.type = 'text';
        input.value = currentValue;
        input.onblur = function () {
            detailElement.textContent = input.value;
            detailElement.style.display = 'inline';
            input.remove();
            localStorage.setItem(detailId, input.value);
            if (detailId === 'display-name') {
                document.getElementById('profile-name').textContent = input.value;
            }
            if (detailId === 'email') {
                document.getElementById('profile-email').textContent = input.value;
            }
        };
        detailElement.style.display = 'none';
        detailElement.parentNode.insertBefore(input, detailElement);
        input.focus();
    }

    function saveDetail(detailId) {
        const input = document.getElementById(detailId);
        localStorage.setItem(detailId, input.value);
    }

    function updateMembershipStatus(isSubscribed) {
        const membershipStatusElement = document.getElementById('membership-status');
        if (isSubscribed) {
            membershipStatusElement.textContent = 'Subscribed';
            membershipStatusElement.classList.remove('text-red-500');
            membershipStatusElement.classList.add('text-green-500');
        } else {
            membershipStatusElement.textContent = 'Deactivated';
            membershipStatusElement.classList.remove('text-green-500');
            membershipStatusElement.classList.add('text-red-500');
        }
        localStorage.setItem('membership-status', membershipStatusElement.textContent);
    }

    // Load data from localStorage
    document.addEventListener('DOMContentLoaded', () => {
        const profilePic = localStorage.getItem('profile-pic');
        if (profilePic) {
            document.getElementById('profile-pic').src = profilePic;
        }
        const fields = ['full-name', 'dob', 'gender', 'nationality', 'address', 'phone', 'email', 'display-name', 'time-zone', 'content-preferences', 'membership-status'];
        fields.forEach(field => {
            const value = localStorage.getItem(field);
            if (value) {
                if (field === 'dob' || field === 'gender' || field === 'nationality' || field === 'time-zone') {
                    document.getElementById(field).value = value;
                } else {
                    document.getElementById(field).textContent = value;
                }
                if (field === 'display-name') {
                    document.getElementById('profile-name').textContent = value;
                }
                if (field === 'email') {
                    document.getElementById('profile-email').textContent = value;
                }
                if (field === 'membership-status') {
                    const membershipStatusElement = document.getElementById('membership-status');
                    membershipStatusElement.textContent = value;
                    if (value === 'Subscribed') {
                        membershipStatusElement.classList.remove('text-red-500');
                        membershipStatusElement.classList.add('text-green-500');
                    } else {
                        membershipStatusElement.classList.remove('text-green-500');
                        membershipStatusElement.classList.add('text-red-500');
                    }
                }
            }
        });
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
  </script>
 </body>
</html>
