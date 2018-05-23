<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "Submit your idea! - Dokk1";
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

            <section class="form--idea">


                     <a class="button--back" href="index.php">back</a>

                <h2 class="form--idea-h2">Do you have an awesome idea for an event?</h2>
                <p class="form--idea-p">Submit it here and we will help you to turn it into reality!</p>

                <form>

                    <textarea placeholder="Tell us your idea!" class="type--idea"></textarea>

                    <input type="text" name="your name" placeholder="Your Name">

                    <input type="text" name="your email" placeholder="Your email">

                    <input class="button--form" type="submit" value="SEND">
                </form>

            </section>


        </main>

        <!-- javaScript -->
        <?php require("inc/script-databases.html"); ?>


    </body>

    </html>
