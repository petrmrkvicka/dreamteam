<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "Browse events - Dokk1";
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

                <section class="browse--search-result-gallery">

                    <div class="grid grid-static1">
                        <h2>Take a look at your search results.</h2>
                    </div>


                    <div class="browse--search-result grid grid-static2" style="background:url('images/event-teen-study.jpg')">
                        <h2 class="browse--header browse--header-date">29<br> <span class="month">May</span><span class="time">15:30<br>-18:00</span></h2>
                        <a href="LINK">
                            <div class="browse--bottom">
                                <h2 class="browse--header browse--header-name">Teen Study Café at DOKK1</h2>
                                <p class="browse--info">After school homework help for 14-18 year olds from Red Barnet Ungdom volunteers.</p>
                            </div>
                        </a>
                    </div>

                    <div class="browse--search-result grid" style="background:url('images/event-chess.jpg')">
                        <h2 class="browse--header browse--header-date">26<br> <span class="month">May</span><span class="time">12:00-15:00</span></h2>
                        <a href="LINK">
                            <div class="browse--bottom">
                                <h2 class="browse--header browse--header-name">Chess for Fun</h2>
                                <p class="browse--info">Chess for Fun is for all ages!</p>
                            </div>
                        </a>
                    </div>

                    <div class="browse--search-result grid" style="background:url('images/event-pokemon.jpg')">
                        <h2 class="browse--header browse--header-date">4<br> <span class="month">June</span><span class="time">16:00-<br>19:00</span></h2>
                        <a href="LINK">
                            <div class="browse--bottom">
                                <h2 class="browse--header browse--header-name">Pokémon League</h2>
                                <p class="browse--info">Come join Pokémon fans get together to trade, play, and have some fun!</p>
                            </div>
                        </a>
                    </div>

                    <div class="browse--search-result grid" style="background:url('images/event-techlab.jpg')">
                        <h2 class="browse--header browse--header-date">21<br> <span class="month">June</span><span class="time">15:30<br>-17:30</span></h2>
                        <a href="LINK">
                            <div class="browse--bottom">
                                <h2 class="browse--header browse--header-name">TechLab: Creative Workshops</h2>
                                <p class="browse--info">At TechLab you can come experiment with our 3D printer and laser cutter and get started on your own projects!</p>
                            </div>
                        </a>
                    </div>

                    <div class="browse--search-result grid" style="background:url('images/event5.jpg')">
                        <h2 class="browse--header browse--header-date">2<br> <span class="month">June</span><span class="time">13:00<br>-16:00</span></h2>
                        <a href="LINK">
                            <div class="browse--bottom">
                                <h2 class="browse--header browse--header-name">Knitting Café</h2>
                                <p class="browse--info">Bring your yarn with and meet other happy knitters and crocheters.</p>
                            </div>
                        </a>
                    </div>

                    <div class="browse--search-result grid" style="background:url('images/events-aarhus-music-school.jpg')">
                        <h2 class="browse--header browse--header-date">26<br> <span class="month">May</span><span class="time">10:30<br>-12:30</span></h2>
                        <a href="LINK">
                            <div class="browse--bottom">
                                <h2 class="browse--header browse--header-name">Aarhus Music School’s Drum Show</h2>
                                <p class="browse--info">Aarhus Music School has prepared a program of megabeat bands, percussion, small ensembles, marimba, and other gems.</p>
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
        <?php require("inc/script-databases.html"); ?>
    </body>

    </html>
