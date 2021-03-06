<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "You have your ticket - Dokk1";
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

                <section>
                    <h2>Dear Name, You're going to The Amazing Name.</h2>
                    <br>
                    <p>Your ticket has been sent to <b>sibp@aarhus.dk</b></p>

                    <br>
                    <div class="confirmation--container">
                    <div class="confirmation--left">
                    <p>Who's going with you? Share with friends.</p>
                        </div>

                    <div class="confirmation--right">
                    <a class="blue--box-facebook" ><img src="images/socials/facebook.svg" alt="facebook logo"></a>

                        </div>

                   </div>
                </section>

            </main>
            <?php require("inc/footer.html"); ?>
        </div>
        <!-- javaScript -->
        <?php require("inc/script-databases.html"); ?>


    </body>

    </html>
