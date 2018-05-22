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

      #js-cookieterms{
        position: fixed;
        left:0;
        bottom:0;
        right:0;
        background:rgba(0,0,0,0.7);
        padding:1em
      }

      span.cookieterms--agree{
        float:right;
        background:var(--color-red);
        padding:0.4em;
        cursor: pointer;
      }

      #search--desktop{
        display:none
      }

      .no-mobile{
        display:none
      }

      @media only screen and (min-width: 760px) {
          header{
            display:flex;
            justify-content: space-between;
          }
          #search--desktop {
            display:flex;
            width:90%;
            flex-wrap: nowrap;
            justify-content: flex-end;
            align-items: center;
          }
          #search--desktop p, #search--desktop a, #search--desktop form, #search--desktop div{
            display:inline-block;
            color:black
          }
          #search--desktop p{
            padding-right: 1rem
          }
          #search--desktop a{
            font-family: "AvenirBold"
          }
          #search--desktop input{
            display: inline-block;
          }
          .search--desktop-magnifying-glass{

          }
          #search--cover.mobile{
              display:none;
          }
          .search--magnifying_glass{
              display:none;
          }
          .search--desktop-input-holder, .search--desktop-input-holder form{
            background:var(--color-dark-blue);
            display: flex!important;
            flex-wrap: nowrap;
          }
          .search--desktop-input-holder input[type="submit"]{
            width:auto;
            margin-left:auto;
            margin-right:1em;
            background:url(../images/search-white.svg) var(--color-dark-blue);
            background-repeat: no-repeat;
            background-position: center;
            box-shadow:none;
            cursor: pointer;
          }
          .search--desktop-input-holder input[type="text"]{
            margin-right:2em;
            cursor: default;
            width:15em;
            background:transparent;
            border:0;
            color:white;
            font-family: "Avenir"
          }
          .search--desktop-input-holder input::placeholder{
            color:white;
            opacity:0.7
          }


          .carousel{
            width:50%!important;
          }
          .carousel--inner:not(#item1){
            display:none
          }
          .carousel--inner{
            display: block;
            height:80vh;
            width:40%;
            margin-left:50%

          }
          .carousel--container{
            width:100%;
          }
          .carousel--inner .top{
            background:var(--color-dark-blue);
            height:auto;
            margin-top:8em;
            position:absolute;
            left:0;
            width:53vw
          }
          .carousel--inner .top h2{
            font-size:4rem;
            margin-left:2rem
          }
          .carousel--inner .top p{
            margin-top:1em;
            margin-left:1em;
            max-width:30em
          }
          .carousel--inner .top span.time{
            font-size: 1em;
            margin-left: 2rem;
            font-family: "AvenirMedium"

          }
          .no-mobile{
            display: block;
          }
          .see-more{
            width:40%;
            margin-left:2em;
            top:45%;
            transform: none;
            position: absolute;
            margin-top:12em
          }
          .carousel--inner .bottom{
            transform: rotate(180deg);
          }
          .carousel--inner-price{
            transform: rotate(180deg);
            display:inline-block;
          }
          .carousel--buttons-left, .carousel--buttons-right{
            content:"←";
            display:inline-block;
            font-size:2em;
            padding:.8em;
            background:var(--color-yellow);
            color:var(--color-black);
            position:absolute;
            margin-top:76vh;
            max-height:4vh;
            max-width:4vh;
            transform: translateY(-50%);
          }
          .carousel--buttons-left:hover, .carousel--buttons-right:hover{
            background:var(--color-red)
          }
          .carousel--buttons-right{
            content:"→";
            margin-top:68vh;
            margin-left:9vh
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
<<<<<<< HEAD
                    <a href="idea.php"><button class="button--yellow-red">Tell us!</button></a>                    <!-- Here goes the form -->
=======
                    <a href="idea.php"><button class="button--yellow-red">Tell us!</button></a>
                    <!-- Here goes the form -->
>>>>>>> 31b55fbdfedd7b82d7178004cb463c8c7309d278
                </section>

            </main>
            <?php require("inc/footer.html"); ?>
        </div>
        <!-- javaScript -->
        <?php require("inc/script-databases.html"); ?>


    </body>

    </html>
