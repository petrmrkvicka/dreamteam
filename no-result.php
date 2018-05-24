<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "There are no results for your page - Dokk1";
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

                <section class="browse--page-title">
                    <h2>Take a look at your search results.</h2>
                </section>

                <section class="browse--search-result-gallery no-result">

                    <div class="grid grid-static1">
                        <h2>Take a look at your search results.</h2>
                    </div>


                    <div class="browse--search-result grid no-result" style="background:whitesmoke">
                        <p>No events match your search query!<br>Go to the <a href="/index.php">homepage</a> or search again!</p>
                    </div>


                </section>



            </main>
            <?php require("inc/footer.html"); ?>
        </div>

        <!-- javaScript -->
        <?php require("inc/script-databases.html"); ?>
    </body>

    </html>
