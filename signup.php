<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "Home of events at Dokk1";
  $descr = "";
  $keywords = "";
  //includes everything from file below, without the file, website will show an error
  require("inc/head.html");
  // covered until </head>
 ?>

    <body>

        <?php require("inc/header.html"); ?>
        <!-- take a look at the header.html file, there is a comment for you:) -->
        <main class="content">

            <section class="form--idea">
                
                
                     <a class="button--back" href="index.php">back</a>
                
                <h2>Sign up for the <span class="event--name-span">The Amazing Name</span> event</h2>
                
                <form>
                    
                    <input type="text" name="your name" placeholder="Your Name">
                    
                    <input type="text" name="your email" placeholder="Your email">
                    
                    <input class="button--form" type="submit" value="SIGN UP">
                </form>

            </section>


        </main>

        <!-- javaScript -->
        <?php require("inc/script-databases.html"); ?>


    </body>

    </html>