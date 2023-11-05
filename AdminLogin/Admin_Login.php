<?php
    include "../include_user/user_header.php";
?>


    <div class="video-background-holder">
        <div class="video-background-overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="../laptop.mp4" type="video/mp4">
        </video>
        <div class="video-background-content container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                

                <div class="w-100 text-white titlebox">
                    <div class="titleboxinside">
                        <!-- Signup form -->
                        <div class="signup">
                            <form class="form-signin" style="background-color: white; color: black;" action = "includes/login.php" method = "post">
                                <h1 class="h3 mb-3 font-weight-normal">Administrator</h1>
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
                                    <button class="btn btn-outline-primary btn-lg download-button signinbtn"
                                        type="submit" name="sign_in">Sign in</button>
                                        <br><br>
                                        
                                <p class="mt-5 mb-3 text-muted">&copy;IT Request Form 2023 </p>
                            </form>
                            <!-- end signup form -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>