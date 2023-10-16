<?php 


?>
<style>
    .navbar12 {
        overflow: hidden;
        /* background-color: #333; */
    }

    .navbar12 a {
        float: left;
        font-size: 16px;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }

    .dropdown12 {
        float: left;
        overflow: hidden;
    }

    .dropdown12 .dropbtn12 {
        font-size: 16px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    /* .navbar12 a:hover, .dropdown12:hover .dropbtn12 {
  background-color: red;
} */

    .dropdown-content12 {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content12 a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-content12 a:hover {
        background-color: #ddd;
    }

    .dropdown12:hover .dropdown-content12 {
        display: block;
    }
</style>



<!-- header -->
<header class="header bg-blue">
    <nav class="navbar bg-blue">
        <div class="container flex">
            <a href="home.php" class="navbar-brand">
                <img src="images/mlogo.png" alt="site logo">
            </a>
            <button type="button" class="navbar-show-btn">
                <img src="images/ham-menu-icon.png">
            </button>

            <!-- <div class="navbar-collapse bg-white">
                <button type="button" class="navbar-hide-btn">
                    <img src="images/close-icon.png">
                </button>
                <div id="nav-session" class="text-white">
                    <!-- <a href="profile.php" class="text-white">
                         <?php
                            echo "Welcome";
                            echo ", ";
                            echo $_SESSION['un'];
                            ?>
                     </a> 
                </div> -->


                <ul class="navbar-nav">
                   
                    <li class="nav-item">
                        <a href="home.php" class="nav-link">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="genmedicine.php" class="nav-link">Generic Medicine</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="appointment.php" class="nav-link">Appointment</a>
                    </li>
                    <li class="nav-item">
                        <a href="viewmyreq.php" class="nav-link">My Request</a>
                    </li>
                    <li class="nav-item">
                        <a href="viewphistory.php" class="nav-link">Prescription</a>
                    </li>

                    <!-- <li class="nav-item">
                        <a href="changepwd.php" class="nav-link">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Log out</a>
                    </li> -->
                    
                    <li class="nav-item">
                        <div class="navbar12" style="padding-right: 43px;">
                            <div class="dropdown12">
                                <button style="background: none;" class="nav-link">
                                    <!-- <?php
                                    echo "Welcome";
                                    echo ", ";
                                    echo $_SESSION['un'];
                                    ?> -->
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content12">
                                    <a href="profile.php" class="nav-link">Profile</a>
                                    <a href="changepwd.php" class="nav-link">Change Password</a>
                                    <a href="logout.php" class="nav-link">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


</header>
<script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(e) {
        if (!e.target.matches('.dropbtn')) {
            var myDropdown = document.getElementById("myDropdown");
            if (myDropdown.classList.contains('show')) {
                myDropdown.classList.remove('show');
            }
        }
    }
</script>
<!-- end of header -->