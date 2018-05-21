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
      body{
        overflow-x: hidden;
      }
      #d{
        display: none;
      }

      #by_calendar, #by_interest, #search{
        margin-bottom:2em
      }
      #search--cover{
        z-index:99;
        flex-wrap: wrap;
        color:white;
        top:-10em;
      }
      #search--cover a{
        color: var(--color-dark-blue);
        padding:.5em .7em;
        background: var(--color-white);
        display:inline-block;
        text-decoration: none;
        font-weight: bold
      }
      #search--cover p{
        margin-left:1em;
        margin-bottom:0.5em
      }
      #search--cover input{
        border:0;
        color:var(--color-dark-blue);
        width: 70%;
        font-weight:400;
        padding:.6em
      }
      #search--cover input::-webkit-input-placeholder,   #search--cover input::-moz-placeholder,   #search--cover input:-ms-input-placeholder,   #search--cover input:-moz-placeholder{
        color:white
      }

      .footer{
        background: url(../images/mobile.svg) var(--color-dark-blue);
        background-repeat: no-repeat;
        background-size: contain;
        background-position: bottom center;
        padding-bottom:4em
        }

        .button--red{
          background:var(--color-red);
        }

        .carousel--inner .top{
          content:"";
          height:70%;
          background:url(../images/carousel-name.svg);
          display:inline-block;
          margin:0em;
          padding:1.5em;
          background-repeat: no-repeat;
          z-index:0
        }
        .carousel--inner .bottom{
          background: url(../images/carousel-price.svg);
          background-repeat: no-repeat;
          background-position: right;
          margin:0;
          padding:1em;
          padding-top: 1.2em;
          text-transform: uppercase;
          font-size:1.2em;
          font-weight: bold
        }

        .carousel--inner{
          height:117vw
        }

        .carousel--container{
          overflow-y:hidden;
        }

        .top h2{
          font-size:2em;
          width:70%
        }

        .datepicker-days table tr th, .datepicker-days table tr td{
          font-size:80%
        }

        .datepicker-days table tr th{
          font-weight: bold
        }

        #intro_text{
          margin:2em 0
        }
        button, input[type=submit]{
          margin-bottom: .6em;
          padding:.6em;
          letter-spacing: 2px;
          font-size:1.2em
        }
        .interest--checkmark{
          background:white;
          box-shadow:1px 1px 2px rgba(0,0,0,0.1)
        }
        .interest--checkmark em{
          font-family: "AvenirNext-Bold";

        }
      </style>
        <div class="wrapper">
            <?php require("inc/header.html"); ?>
            <!-- take a look at the header.html file, there is a comment for you:) -->
            <main class="content">

                <section id="carousel">
                    <h2>Suggested events</h2>
                    <div class="carousel--container">
                        <div class="carousel">
                            <div class="carousel--inner" id="item1" style="background:url('images/event1.JPG')">
                                <div class="top">
                                    <h2>Printede Kjoler</h2>
                                <p>Some description will go here</p>
                                    </div>
                                <div class="bottom">
                                <span class="carousel--inner-price">free</span>
                                    </div>
                            </div>

                            <div class="carousel--inner" id="item2" style="background:url('images/event2.JPG')">
                                <div class="top">
                                    <h2>Printede Kjoler</h2>
                                <p>Some description will go here</p>
                                    </div>
                                <div class="bottom">
                                <span class="carousel--inner-price">free</span>
                                    </div>
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
                        <!-- BUTTON! -->
                        <button class="button--red-blue">interest</button>
                        <form action="#" method="">
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
                    <h2>Got an idea for an event?</h2>
                    <!-- BUTTON TO BE STYLED! -->
                    <button class="button--yellow-red">Tell us!</button>
                    <!-- Here goes the form -->
                </section>

            </main>
            <?php require("inc/footer.html"); ?>
        </div>
        <!-- javaScript -->
        <?php require("inc/script-databases.html"); ?>

        
    </body>

    </html>
