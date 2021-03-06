<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "Pokémon League - Dokk1";
  $descr = "";
  $keywords = "Play, Game, Pokemon, Cards, Trading, Trade, Club, Pokemon League";
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
                    <div id="event--header-image" class="event--header-image" style="background:url('images/event-pokemon.jpg')">


                        <h2 class="event--date mob">4<br><span class="month">June</span><span class="time">16:00-<br>19:00</span></h2>


                        <div class="browse--bottom">
                            <h2 class="browse--header">Pokémon League</h2>
                            <h2 class="event--date des">10<br><span class="month">June</span><span class="time">16:00-<br>19:00</span></h2>

                            <p class="event--description">Come join Pokémon fans get together to trade, play, and have some fun!</p>
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
                            <img src="images/event-pokemon2.jpg" alt="Pokemon League at DOKK1">
                            <img src="images/event-pokemon1.JPG" alt="Girls dressed as Pikachu">
                            <img src="images/event-pokemon3.jpg" alt="Facepaint boy pokemon at Dokk1">
        
                        </div>
                        <div>
                            <a class="rightArrow">→</a>
                        </div>
                    </div>
                    <br>



                </section>



                <div class="flexContainer">
                    <section class="flexContainerItem first">
                        <p>What is a Pokémon League, you ask? It’s a fun way for all Pokemon game players to get together, regardless of experience level or skill. Using your own cards, you can play, trade, and share your love of collecting and playing with other Pokemon players who love the game as much as you do. 
                        </p>
                        <br>
                        <p>Don’t know how to play? No problem! It’s quick to learn, and you can borrow a deck of cards from DOKK1.
                        </p>
                        <br>
                        <p>Any other trading card game players are also welcome.</p>
                        <br>
                        <p><a class="event--link" href="https://www.facebook.com/groups/pokemondk/">Follow Denmark's Pokémon League on Facebook.</a></p>
                        
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