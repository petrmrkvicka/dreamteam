<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "Teen Study Café - Dokk1";
  $descr = "";
  $keywords = "Study, Homework, Homework Help, Tutor, School, After School, Studies, Teen, Library";
  //includes everything from file below, without the file, website will show an error
  require("inc/head.html");
  // covered until </head>
 ?>

    <body>
        <div class="wrapper">
            <?php require("inc/header.html"); ?>
            <!-- take a look at the header.html file, there is a comment for you:) -->
            <main class="content">
                <section id="event-top">
                    <div id="event--header-image" class="event--header-image" style="background:url('images/event-teen-study.jpg')">


                        <h2 class="event--date mob">29<br><span class="month">May</span><span class="time">15:30<br>-18:00</span></h2>


                        <div class="browse--bottom">
                            <h2 class="browse--header">Teen Study Café at DOKK1</h2>
                            <h2 class="event--date des">29<br><span class="month">May</span><span class="time">15:30<br>-18:00</span></h2>

                            <p class="event--description">After school homework help for 14-18 year olds from Red Barnet Ungdom volunteers.</p>
                        </div>

                    </div>
                </section>
                <section>
                    <h2 class="event--padding-left">Moments from past events!</h2>
                    <br>

                    <div id="flexImages">
                        <div>
                            <a class="leftArrow">←</a>
                        </div>
                        <div class="slide-pictures">
                            <img src="images/event-teen-study2.jpg" alt="yup">
                        </div>
                        <div>
                            <a class="rightArrow">→</a>
                        </div>
                    </div>
                    <br>



                </section>



                <div class="flexContainer">
                    <section class="flexContainerItem first">
                        <p>Need help with a book report? Have a question about a tricky math question? Or do you just want a place to get your homework done so you can enjoy the rest of your day? Then come to the study cafe at DOKK1! 
                        </p>
                        <br>
                        <p>We have a team of talented young volunteers from Red Barnet Ungdom who are happy to help you with your homework. You can get one-on-one help or work on your own until you’ve got a question. 
                        </p>
                        <br>
                        <p>It’s free, so just meet up! You’ll find us in the DOKK1 Corner (Hjørnet).</p>
                    </section>

                    <section class="flexContainerItem second">
                        <!-- BUTTON! -->
                        <button class="button--red-yellow no-mobile" id="myBtn">I AM ATTENDING</button>
                        <a class="button--red-yellow no-desktop button" href="signup.php">I AM ATTENDING</a>

                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                          <!-- Modal content -->
                          <div class="modal-content">
                            <span class="close">&times;</span>
                              <iframe src="signup-frame.php" style="width:100%;height:100%"></iframe>
                          </div>

                        </div>

                        <br>
                        <h2>Look if your friends are joining!</h2>
                        <br>
                        <div id="slideImages" class="slide-facebook slide-pictures">
                            <img src="images/melissa.png" alt="yup">
                            <img src="images/petr.png" alt="Facebook Profile Picture">
                            <img src="images/shereen.png" alt="yup">
                            <img src="images/flo.png" alt="Facebook Profile Picture">
                            <img src="images/robert.jpg" alt="Facebook Profile Picture">
                            <img src="images/elis.jpg" alt="Facebook Profile Picture">
                            <img src="images/tyson.jpg" alt="Facebook Profile Picture"> 
                            <img src="images/simon.jpg" alt="Facebook Profile Picture"> 
                            <img src="images/chris.jpg" alt="Facebook Profile Picture">
                        </div>
                    </section>
                </div>


            </main>
            <?php require("inc/footer.html"); ?>
        </div>

        <!-- javaScript -->
        <script src="js/script.js">


        </script>
        <?php require("inc/script-databases.html"); ?>
    </body>

    </html>
