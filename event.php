<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "Name of the event - Dokk1";
  $descr = "";
  $keywords = "";
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
                    <div id="event--header-image" class="event--header-image" style="background:url('images/event7.jpg')">
<<<<<<< HEAD

                        <h2 class="event--date mob">10<br><span class="month">May</span><span class="time">18:00</span></h2>
=======

                        <h2 class="event--date mob">10<br><span class="month">May</span><span class="time">18:00</span></h2>

                            <div class="browse--bottom">
                                <h2 class="browse--header">Name of the event goes here</h2>
                                <h2 class="event--date des">10<br><span class="month">May</span><span class="time">18:00</span></h2>
>>>>>>> 7db0e82dce44dfdec4ae93129a4cc365ce6a6fc7

                        <div class="browse--bottom">
                            <h2 class="browse--header">Name of the event goes here</h2>
                            <h2 class="event--date des">10<br><span class="month">May</span><span class="time">18:00</span></h2>

<<<<<<< HEAD
                            <p class="event--description">And here is a place for some short snippet about the event.</p>
                        </div>
=======

>>>>>>> 7db0e82dce44dfdec4ae93129a4cc365ce6a6fc7
                    </div>
                </section>
                <section>
                    <h2>This is what it looks like!</h2>
                    <br>
<<<<<<< HEAD
                    <div id="flexImages">
                        <div>
                            <img class="leftArrow" src="./icons/leftArrow.png" alt="arrow">
                        </div>
                        <div class="slide-pictures">
                            <img src="images/event4.JPG" alt="yup">
                            <img src="images/event7.JPG" alt="yup">
                            <img src="images/event3.JPG" alt="yup">
                            <img src="images/event2.JPG" alt="yup">
                            <img src="images/event1.JPG" alt="yup">
                        </div>
                        <div>
                            <img class="rightArrow" src="./icons/leftArrow.png" alt="arrow">
                        </div>
                    </div>
                    <br>
=======

                    <div class= "slide-pictures"
                         >
                        <img src="images/event4.JPG" alt="yup">
                        <img src="images/event7.JPG" alt="yup">
                        <img src="images/event3.JPG" alt="yup">
                        <img src="images/event2.JPG" alt="yup">
                        <img src="images/event1.JPG" alt="yup">
                    </div>

                    <br>

                    <p>This here is just some random text about the event on would write for everyone to read.
                    </p>
                    <br>
                    <p>In DOKK1, there is a lot of fun for adults, but also for kids so make sure that you come because it will be awesome!
                    </p>
                </section>

>>>>>>> 7db0e82dce44dfdec4ae93129a4cc365ce6a6fc7


                </section>
                <div class="flexContainer">
                    <div class="flexContainerItem">
                        <p>This here is just some random text about the event on would write for everyone to read.
                        </p>
                        <br>
                        <p>In DOKK1, there is a lot of fun for adults, but also for kids so make sure that you come because it will be awesome!
                        </p>
                    </div>

                    <section class="flexContainerItem">
                        <!-- BUTTON! -->
                        <button class="button--red-yellow">I AM ATTENDING</button>
                        <br>
                        <h2>Look if your friends are joining!</h2>
                        <br>
                        <div id="slideImages" class="slide-facebook slide-pictures">
                            <img src="images/melissa.png" alt="yup">
                            <img src="images/petr.png" alt="yup">
                            <img src="images/shereen.png" alt="yup">
                            <img src="images/flo.png" alt="yup">
                            <img src="images/petr.png" alt="yup">
                            <img src="images/melissa.png" alt="yup">
                            <img src="images/petr.png" alt="yup">
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
