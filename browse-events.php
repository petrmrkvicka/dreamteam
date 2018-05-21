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

                <section>
                    <h2>This is happening!</h2>
                </section>


                <section class="browse--search-result" style="background:url('images/event1.jpg')">
                    <div>
                        <h2 class="browse--header">10<br> <span class="month">maj</span><span class="time">kl.18</span></h2>
                        <h2 class="browse--header">Name of the event goes here</h2>
                    </div>
                    <div>
                        <p>And here is a place for some short snippet about the event.</p>
                    </div>
                </section>


            </main>
            <?php require("inc/footer.html"); ?>
        </div>
        <!-- javaScript -->

    </body>

    </html>
