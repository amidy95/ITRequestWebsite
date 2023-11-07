<?php
// Start the session
session_start();
?>

<nav class="navbar navbar-expand-lg navbar-dark py-3 shadow-sm" style="background-color: black;">
    <div class="container">
        <a href="#" class="navbar-brand">
            <a class="navbar-brand" href="../UserLogin/User_Login.php">
                <h1>IT Department</h1>
            </a>
        </a>
        <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown"><a id="navbarDropdown" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">
                        <?php 
                            if (isset($_SESSION['user_first_name']) && isset($_SESSION['user_last_name'])) {
                                echo $_SESSION['user_first_name'] . " " . $_SESSION['user_last_name'];
                            }
                        ?>
                    </a>
                    <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                        <a href="../includes/logout.php" class="dropdown-item">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<marquee style="background-color: black; color: white;">
    <h6>We are experiencing unusually high contact volume at this time and are working to respond to requests in the order they were received. Thank you for your patience.</h6>
</marquee>
