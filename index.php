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

      h2{
        text-transform: none;
        letter-spacing: normal;
      }
        @media only screen and (min-width: 760px) {
          #your_idea button{
            display: none;
          }
          .idea--container{
            display: flex;
            width:100vw;
            margin-left:-4em
          }
          .idea--container-left, .idea--container-right{
            flex-basis: 50%
          }
          .idea--form-left, .idea--form-right{
            flex-basis: 45%
          }
          .idea--container-left{
            background:url(images/dokk1.png) var(--color-red);
            color:var(--color-white);
            background-size: cover;
            background-position: bottom left;
            background-repeat: no-repeat;
          }
          .idea--container-left h2{
            margin:3rem 3rem 40% 30%;
            text-align: right;
          }
          .idea--container-right p{
            margin:3rem 60% auto 3rem
          }
          #your_idea h2.mobile{
            display:none
          }
          .idea--form{
            background:rgba(0,0,0,0.5);
            padding:2em;
            position: absolute;
            display: flex;
            flex-wrap: nowrap;
            margin-left:50%;
            transform: translateX(-50%) translateY(-120%);
            justify-content: space-between;
          }

          .idea--form-left textarea{
            height: 100%
          }
          .idea--form-right input[type=text], .idea--form-right input[type=email], .idea--form-right input[type=submit]{
            margin:0;
            padding: 0.3em;
            cursor: pointer;
            font-size: 1em;
            text-align: left;
            width: 80%;
            font-family: "AvenirMedium";
          }
          footer.footer{
            margin:0 -3em
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
                <section id="intro_text">
                    <p>Mus elit Morbi mus enim lacus at quis Nam eget morbi. Et semper urna urna non at cursus dolor vestibulum neque enim.</p>
                </section>
                <section id="search">
                    <h2>Search by...</h2>
                    <section id="by_interest">
                      <p class="no-mobile">Search by <b>interest</b></p>
                        <!-- BUTTON! -->
                        <button class="button--red-blue by-interest">interest</button>
                        <form action="#" method="" class="by-interest">
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

                        <form action="#" method="">
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
                            <input type="text" name="name" required>
                            <input type="email" name="email" required>
                            <input type="submit" value="SEND">
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
