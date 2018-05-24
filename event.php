<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "Browse Event Search Results at Dokk1";
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
                        
                        <h2 class="event--date mob">10<br><span class="month">May</span><span class="time">18:00</span></h2>

                            <div class="browse--bottom">
                                <h2 class="browse--header">Name of the event goes here</h2>              
                                <h2 class="event--date des">10<br><span class="month">May</span><span class="time">18:00</span></h2>

                                <p class="event--description">And here is a place for some short snippet about the event.</p>
                            </div>

                        
                    </div>

                </section>
                <section>
                <h2>This is what it looks like!</h2>
                    <br>
                    
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
                   

                <!-- BUTTON! -->
                <button class="button--red-yellow">I AM ATTENDING</button>
                <section>
                <br>
                <h2>Look if your friends are joining!</h2>
                    <br>
                     <div class= "slide-facebook slide-pictures"
                         >
                        <img src="images/melissa.png" alt="yup">
                        <img src="images/petr.png" alt="yup">
                        <img src="images/shereen.png" alt="yup">
                        <img src="images/flo.png" alt="yup">
                        <img src="images/petr.png" alt="yup">
                        <img src="images/melissa.png" alt="yup">
                        <img src="images/petr.png" alt="yup">
                    </div>
</section>

            </main>
            <?php require("inc/footer.html"); ?>
        </div>

        <!-- javaScript -->
        <?php require("inc/script-databases.html"); ?>
    </body>

    </html>
