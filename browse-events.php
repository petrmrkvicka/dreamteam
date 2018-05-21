
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

                <section class="browse--page-title">
                    <h2>This is happening!</h2>
                </section>

                <section class="browse--search-result-gallery">

                <div class="browse--search-result" style="background:url('images/event1.jpg')">
                    <h2 class="browse--header browse--header-date">10<br> <span class="month">May</span><span class="time">18:00</span></h2>
                    <a href="LINK">
                        <div class="browse--bottom">
                            <h2 class="browse--header browse--header-name">Name of the event goes here</h2>
                            <p class="browse--info">And here is a place for some short snippet about the event.</p>
                        </div>
                    </a>
                </div>

                <div class="browse--search-result" style="background:url('images/event1.jpg')">
                    <h2 class="browse--header browse--header-date">10<br> <span class="month">May</span><span class="time">18:00</span></h2>
                    <a href="LINK">
                        <div class="browse--bottom">
                            <h2 class="browse--header browse--header-name">Name of the event goes here</h2>
                            <p class="browse--info">And here is a place for some short snippet about the event.</p>
                        </div>
                    </a>
                </div>

                <div class="browse--search-result" style="background:url('images/event1.jpg')">
                    <h2 class="browse--header browse--header-date">10<br> <span class="month">May</span><span class="time">18:00</span></h2>
                    <a href="LINK">
                        <div class="browse--bottom">
                            <h2 class="browse--header browse--header-name">Name of the event goes here</h2>
                            <p class="browse--info">And here is a place for some short snippet about the event.</p>
                        </div>
                    </a>
                </div>

                <div class="browse--search-result" style="background:url('images/event1.jpg')">
                    <h2 class="browse--header browse--header-date">10<br> <span class="month">May</span><span class="time">18:00</span></h2>
                    <a href="LINK">
                        <div class="browse--bottom">
                            <h2 class="browse--header browse--header-name">Name of the event goes here</h2>
                            <p class="browse--info">And here is a place for some short snippet about the event.</p>
                        </div>
                    </a>
                </div>
                
            </section>



                <!-- BUTTON! -->
                <button class="button--red-yellow">Load More</button>


            </main>
            <?php require("inc/footer.html"); ?>
        </div>
        <!-- javaScript -->

    </body>

    </html>
