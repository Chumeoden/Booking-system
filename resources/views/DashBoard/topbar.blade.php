<!DOCTYPE html>
<html>
<head>
    <title>Topbar Example</title>
    <style>
        /* General styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Style the topbar background and text */
        .navbar {
            float: right;
            background-color: #87CEFA;
            color: #fff;
            display: flex;
            justify-content: flex-end; /* Align items to the right */
            padding: 30px;
            width: 1615px;
        }

        /* Style the user profile image */
        .img-profile {
            width: 80;
            height: 80;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 50px;
            cursor: pointer;
        }

        /* Style the dropdown menu items */
        .dropdown-menu {
            float: right;
            display: none;
            position: absolute;
            left : 1450px;
            top: 50px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            min-width: 150px;
            z-index: 1;
        }

        .dropdown-item {
            color: #333;
            text-decoration: none;
            display: block;
            padding: 10px;
            cursor: pointer;
        }

        .dropdown-item:hover {
            background-color: #f8f9fc;
        }
    </style>
</head>
<body>
    <!-- Topbar -->
    <nav class="navbar">
        <!-- Topbar Navbar -->
        <div class="user-info">
            <img class="img-profile" src="backend/img/undraw_profile.svg" alt="User Profile" onclick="toggleDropdown()">
        </div>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu shadow animated--grow-in" id="dropdown-menu">
            <a class="dropdown-item" href="#" onclick="viewProfile()">
                View Profile
            </a>
            <a class="dropdown-item" href="#" onclick="logout()">
                Logout
            </a>
        </div>
    </nav>
    <!-- End of Topbar -->

    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdown-menu");
            dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
        }

        function viewProfile() {
            // Assuming this function handles viewing the user's profile
            alert("View Profile");
        }

        function logout() {
            // Assuming this function handles the logout functionality
            event.preventDefault();
            document.getElementById('logout-form').submit();
        }
    </script>
</body>
</html>
