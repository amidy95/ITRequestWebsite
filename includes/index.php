<?php
include "includes/login_header.php";
?>

    <nav class="navbar navbar-expand-lg navbar-dark py-3 shadow-sm" style="background-color: black;">
        <div class="container"><a href="#" class="navbar-brand"> <a class="navbar-brand" href="visitor/index.php">
                    <h1>Excellence Academy</h1>
                </a></a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link"><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a href="visitor/index.php" class="nav-link">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <marquee style="background-color : black; color: white;">
        <h6>Due to Covid 19 all classes will be Online for the Spring Semester 2021</h6>
    </marquee>

    <div class="video-background-holder">
        <div class="video-background-overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="laptop.mp4" type="video/mp4">
        </video>
        <div class="video-background-content container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                

                <div class="w-100 text-white titlebox">
                    <div class="titleboxinside">
                        <!-- Signup form -->
                        <div class="signup">
                            <form class="form-signin" style="background-color: white; color: black;" action = "includes/login.php" method = "post">
                                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                                <label for="inputEmail" class="sr-only">Email address</label>
                                 <!--  user name to post-->
                                <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Email address"
                                    required autofocus>
                                <label for="inputPassword" class="sr-only">Password</label>
                                 <!-- Password to post -->
                                <input type="password" name = "password" id="inputPassword" class="form-control" placeholder="Password"
                                    required>
                                <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                </div>
                                    <!-- Submit button to sign in  -->
                                    <button class="btn btn-outline-light btn-lg download-button signinbtn"
                                        type="submit" name="sign_in">Sign in</button>
                                <p class="mt-5 mb-3 text-muted">&copy;Excellence Academy 2021</p>
                            </form>
                            <!-- end signup form -->
                            
                            <!-- 
                            <div class="col text-center">
                                <a href="home.html">
                                    <button class="btn btn-outline-light btn-lg download-button signinbtn">Sign in
                                        Tester (Student)</button>
                                </a>
                            </div>
                            <div class="col text-center">
                                <a href="visitorhome.html">
                                    <button class="btn btn-outline-light btn-lg download-button signinbtn">Visitors</button>
                                </a>
                            </div>
                            <div class="col text-center">
                                <a href="admin/index.php">
                                    <button class="btn btn-outline-light btn-lg download-button signinbtn">Sign in
                                        Tester (Admin)</button>
                                </a>
                            </div>
                            <div class="col text-center">
                                <a href="facultyhome.html">
                                    <button class="btn btn-outline-light btn-lg download-button signinbtn">Sign in
                                        Tester (Faculty)</button>
                                </a>
                            </div>Test case buttons -->


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>