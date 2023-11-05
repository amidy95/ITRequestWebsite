<?php
    include "../include_user/user_header.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') 
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $employee_id = $_POST['employee_id'];
        $email = $_POST['email'];


    include "db.php"; // include the connection to the database.

    header("Location: ../Include_Admin/AdminApproval.php"); // Redirect to admin approval page after successful registration.
    exit(); // Ensure that the script stops after the redirect.

    }
?>



<div class="video-background-holder">
  <div class="video-background-overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" >
        <source src="../laptop.mp4" type="video/mp4">
    </video>
  <div class="video-background-content container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white titlebox">
        <div class="titleboxinside">

        

                            <!-- Signup form -->
                            <div class="signup">
                                <form class="form-signin" style="background-color: white; color: black;" action="signup.php" method="post">
                                    <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>

                                            <!-- First Name -->
                                            <input type="text" name="first_name" id="inputFirstName" class="form-control" placeholder="First Name" required autofocus>
                                            <br><br>

                                            <!-- Last Name -->
                                            <input type="text" name="last_name" id="inputLastName" class="form-control" placeholder="Last Name" required>
                                            <br><br>

                                            <!-- Employee ID -->
                                            <input type="text" name="employee_id" id="inputEmployeeID#" class="form-control" placeholder="Employee ID #" required>
                                            <br><br>

                                            <!-- Email Address -->
                                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address" required>
                                            <br><br>

                                            <!-- Submit button to sign up -->
                                            <button class="btn btn-outline-light btn-lg download-button signinbtn" type="submit" name="sign_up">Sign Up</button>
                                            <br><br>

                                        <p class="mt-5 mb-3 text-muted">&copy; IT Request Form 2023</p>
                                    </form>
                                    <!-- End signup form -->
                                </div>
                            </div>
          <br>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };


</script>
<style type="text/css">
.demobtn:hover{
  color: blue;
}
.options_home{
  font-family: 'Playfair Display SC', serif;
}

.typer{
  font-family: 'Alegreya Sans', sans-serif;
  color: white;
}

.cpu{
  border-radius: 50%;
}

</style>



<br>
    <hr style = "border-width:10px; width:100%; background-color:black;" >
    <div class="downArrow bounce bodycenter">
        <a style ="color: black;" class="btn btn-lg" href="#second_row" ><i class="fas fa-arrow-down fa-3x"></i></a>
        </div>
        <br>
    <div class = "bodycenter"> 
       <h2 href="" class="typewrite  bodycenter" data-period="1000" data-type='[ "Developed by Arvingson Midy" ]'>
    <span class="wrap"></span></h2>
    <br>
   
    <br>
</div>
    <br>
    <div class = "bodycenter">
      <img class= "bodycenter cpu" src="../images/cpu.gif">
      <br>
<br><br>
<br>
      </div>
    <hr style = "border-width:10px; width:100%; background-color:black;" >
  <br>
  <br>
<br>
  <br>


  <a id = "second_row">
    <div class="row">

    </div><!-- /.container -->
  </a>
</main>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

      
  </body>
</html>