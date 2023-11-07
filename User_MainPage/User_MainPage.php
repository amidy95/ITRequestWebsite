<?php
    include "../User_MainPage/include_main/main_header.php";
?>

<?php
    include "include_main/main_top_nav.php";
?>

<?php
    include "include_main/main_sidenav.php";
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 center">
    <div>
        <br>
        <section id="testimonials" class="center" align="center">
            <h1 class="h2">Aramark 
                <?php
                session_start(); // Start the session
                // Check if user session variables are set
                if (isset($_SESSION['db_first_name']) && isset($_SESSION['db_last_name'])) {
                    echo $_SESSION['db_first_name'] . " " . $_SESSION['db_last_name'];
                }
                ?>
            </h1>

            <div>
                <br>
                <div class="bodycenter">
                    <br>
                    <h3>Welcome back, 
                        <?php
                        if (isset($_SESSION['db_first_name']) && isset($_SESSION['db_last_name'])) {
                            echo $_SESSION['db_first_name'] . " " . $_SESSION['db_last_name'];
                        }
                        ?>
                    </h3>
                    <br>
                    <h3> 
                        <?php 
                            date_default_timezone_set('America/New_York');
                            $date = date('m/d/Y', time());
                            echo "Today is " . date("l") . "<br>";
                            $hour = date("h");
                            $minute = date("i");
                            $sec = date("s");
                            $ampm = date("a");
                            
                            echo $date;
                        ?>
                    </h3>

                    <h3>The time is <span id="hours"><?php echo $hour ?></span>:<span id="minutes"><?php echo $minute ?></span>:<span id="seconds"><?php echo $sec ?></span><span id="minutes"> <?php echo $ampm ?></span></h3>

                    <script>
                    var thetime = '<?=date('H:i:s');?>';
                    var arr_time = thetime.split(':');
                    var ss = arr_time[2];
                    var mm = arr_time[1];
                    var hh = arr_time[0];

                    var update_ss = setInterval(updatetime, 1000);

                    function updatetime() {
                        ss++;
                        if (ss < 10) {
                            ss = '0' + ss;
                        }
                        if (ss == 60) {
                            ss = '00';
                            mm++;
                            if (mm < 10) {
                                mm = '0' + mm;
                            }
                            if (mm == 60) {
                                mm = '00';
                                hh++;
                                if (hh < 10) {
                                    hh = '0' + hh;
                                }
                                if (hh == 24) {
                                    hh = '00';
                                }
                                $("#hours").html(hh);
                            }
                            $("#minutes").html(mm);
                        }
                        $("#seconds").html(ss);
                    }
                    </script>
                </div>

                <div id="testimonial-carousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h2> </h2>
                        <div class="video-background-holder">
                            <div class="video-background-overlay">
                                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                                    <source src="../laptop.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
</div>

<!--
        <br>
        <section id="testimonials" class = "center">
        <h5>Announcements</h5>
        <p>Due to the Covid-19 all classes will be in an Online Learning form.</p>
        </section>
        <br>
        <section id="testimonials" class = "center">
        <h5>Congrats to class of 2021</h5>
        <p>Due to the Covid-19 all classes will be in an Online Learning form.</p>
        </section>
  
      <br><br>
            -->

</div>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
<?php 
    include "include_main/main_footer.php";
?>
</body>
</html>
































