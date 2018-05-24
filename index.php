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
      <style>

.scroll-down-thingy{
  display: none
}
.carousel--buttons{
  display: none;
}
        @media only screen and (min-width: 760px) {

@keyframes moving-arrow {
  0%{
    transform:translateY(0%);
  }
  20%{
    transform: translateY(10%);
  }
  50%{
    transform: translateY(0%);
  }
  70%{
    transform: translateY(30%);
  }
  95%{
    transform: translateY(0%);
  }
}
          .scroll-down-thingy{
            height:6em;
            background:transparent;
            position: absolute;
            left:1em;
            width:1em;
            top:65%;
            text-align: center;
            animation: moving-arrow 1s ease 0s infinite;
            display: block;

          }

          .carousel--buttons{
            display: flex;
          }




        }






      </style>
        <div class="wrapper">
            <?php require("inc/header.html"); ?>
            <!-- take a look at the header.html file, there is a comment for you:) -->
            <main class="content">

                <section id="carousel">
                    <h2>Suggested events</h2>
                    <div class="carousel--container">
                      <div class="carousel--buttons">
                        <a class="carousel--buttons-left">←</a>
                        <a class="carousel--buttons-right">→</a>
                      </div>
                        <div class="carousel">
                            <div class="carousel--inner" id="item1" style="background:url('images/event1.JPG')">
                                <div class="top">
                                    <h2>Printede Kjoler</h2>
                                    <span class="time">day 2018</span>
                                <p>Some description will go here. Some description will go here. Some description will go here. Some description will go here. Some description will go here. </p>
                                <button class="button--yellow-red no-mobile see-more">SEE MORE</button>
                                    </div>
                                <div class="bottom">
                                <span class="carousel--inner-price">free</span>
                                    </div>

                            </div>

                            <div class="carousel--inner" id="item2" style="background:url('images/event2.JPG')">
                                <div class="top">
                                    <h2>Printede Kjoler</h2>
                                    <span class="time">day 2018</span>
                                <p>Some description will go here</p>
                                    </div>
                                <div class="bottom">
                                <span class="carousel--inner-price">free</span>
                                    </div>
                                    <button class="button--yellow-red no-mobile">SEE MORE</button>
                            </div>

                        </div>
                    </div>
                </section>
                <a href="#search" class="scroll-down-thingy">
                  <img src="images/arrow.svg" alt="arrow">
                </a>
                <section id="intro_text">
                    <p>Mus elit Morbi mus enim lacus at quis Nam eget morbi. Et semper urna urna non at cursus dolor vestibulum neque enim.</p>
                </section>
                <section id="search">
                    <h2>Search by...</h2>
                    <section id="by_interest">
                      <p class="no-mobile">Search by <b>interest</b></p>
                        <!-- BUTTON! -->
                        <button class="button--red-blue by-interest">interest</button>
                        <form action="browse-events.php" method="" class="by-interest">
                            <label class="interest--checkbox">
                        <input type="checkbox" value="art">
                        <span class="interest--checkmark"><em>ART</em></span>
                      </label>
                            <label class="interest--checkbox">
                        <input type="checkbox" value="art">
                        <span class="interest--checkmark"><em>ART</em></span>
                      </label>
                            <label class="interest--checkbox">
                        <input type="checkbox" value="art">
                        <span class="interest--checkmark"><em>ART</em></span>
                      </label><label class="interest--checkbox">
                        <input type="checkbox" value="art">
                        <span class="interest--checkmark"><em>GAMES</em></span>
                      </label><label class="interest--checkbox">
                        <input type="checkbox" value="art">
                        <span class="interest--checkmark"><em>SOMETHING</em></span>
                      </label><label class="interest--checkbox">
                        <input type="checkbox" value="art">
                        <span class="interest--checkmark"><em>DADDIES</em></span>
                      </label>
                            <label class="interest--checkbox">
                        <input type="checkbox" value="art">
                        <span class="interest--checkmark"><em>ART</em></span>
                      </label>
                            <label class="interest--checkbox">
                        <input type="checkbox" value="art">
                        <span class="interest--checkmark"><em>ART</em></span>
                      </label>

                            <input type="submit" class="button--red" value="Search!">
                        </form>

                    </section>
                    <section id="by_calendar">
                      <p class="no-mobile">Search by <b>date</b></p>
                        <!-- BUTTON! -->
                        <button class="button--blue-yellow">calendar</button>

                        <form action="no-result.php" method="">
                            <!-- To style the calendar, you would need to expect the elements from the browser as it is projected into the div. Take into consideration:
                        1) every column has different width, maybe flexbox might help?
                        2) what happens when you click on the month? There is a new calendar with months / years, if you click on the year. Could you style that?
                        3) Have fun!-->
                            <div id="datepicker"></div>
                            <input type="text" id="d">

                            <input type="submit" class="button--red" value="Search!">
                        </form>

                    </section>
                </section>
                <section id="your_idea">
                    <h2 class="mobile">Got an idea for an event?</h2>
                    <!-- BUTTON TO BE STYLED! -->
                    <a href="idea.php"><button class="button--yellow-red">Tell us!</button></a>                    <!-- Here goes the form -->
                    <div class="idea--container">
                      <div class="idea--container-left">
                        <h2>Do you have an awesome idea for an event?</h2>
                        <form class="idea--form">
                          <div class="idea--form-left">
                            <textarea placeholder="Tell us about your idea!" name="idea" required></textarea>
                          </div>
                          <div class="idea--form-right">
                            <input type="text" name="name" required placeholder="Your name">
                            <input type="email" name="email" required placeholder="Your email">
                            <input type="submit" value="SEND" class="button--red">
                          </div>
                        </form>
                      </div>
                      <div class="idea--container-right">
                        <p>Submit it here and we will help you to turn it into reality!</p>
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
