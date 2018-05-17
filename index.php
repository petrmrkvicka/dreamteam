<?php
  //includes everything from file below, without the file, website will show an error
  require("inc/head.html");
  // covered until </head>
 ?>
<body>
    <div class="wrapper">
      <?php require("inc/header.html"); ?>
        <!-- take a look at the header.html file, there is a comment for you:) -->
        <main class="content">

            <section id="carousel">
                <h2>Suggested events</h2>
                <div class="carousel--container">
                <div class="carousel">
              		<div class="carousel--inner" id="item1" style="background:url('images/1.jpg')">
                    <h2>HejHej</h2>
                    <p>Some description will go here</p>
                    <span class="carousel--inner-price">free</span>
                  </div>

                  <div class="carousel--inner" id="item2" style="background:url('images/2.jpg')">
                    <h2>HejHej</h2>
                    <p>Some description will go here</p>
                    <span class="carousel--inner-price">free</span>
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
                  <!-- BUTTON TO BE STYLED! -->
                    <button>interest</button>
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

                    </form>

                </section>
                <section id="by_calendar">
                  <!-- BUTTON TO BE STYLED! -->
                    <button>calendar</button>

                    <form action="#" method="">
                      <!-- To style the calendar, you would need to expect the elements from the browser as it is projected into the div. Take into consideration:
                        1) every column has different width, maybe flexbox might help?
                        2) what happens when you click on the month? There is a new calendar with months / years, if you click on the year. Could you style that?
                        3) Have fun!-->
                      <div id="datepicker"></div>
                      <input type="text" id="d" >


                    </form>

                </section>
            </section>
            <section id="your_idea">
                <h2>Got an idea for an event?</h2>
                <!-- BUTTON TO BE STYLED! -->
                <button>Tell us!</button>
                <!-- Here goes the form -->
            </section>

        </main>
        <?php require("inc/footer.html"); ?>
    </div>
    <!-- javaScript -->
    <?php require("inc/script-databases.html"); ?>

    <!-- start of JavaScript -->
      <script type="text/javascript">
    $(document).ready(function(){
      //all jS magic underneath

      // carousel
      /////////////PSEUDO CODE-desired///
      // 1. hide pictures behind each other -- done with CSS flexbox
      // 2. move every following picture a bit right and smaller, the same with the pictures on the left
      // 3. onClick on next, on swipe, move accordingly
      ///////////////////////////

      //how many elements do we work with
      var myElements = document.querySelectorAll('.carousel--inner');
      var amountOfElements = myElements.length;

      //fallback option - just sliding carousel
      //for each element, multiply width of the whole container
      var finalSize = amountOfElements * 100;

      //set a style attribute for the container
      $(".carousel").css("min-width",finalSize+"%");


      //////GIVING COLORS TO CHECKBOXES
      // 1. target checkboxes, get the amount of them - possible to skip thanks to jQuery
      // 2. create array of colors
      // 3. for each checkbox, give it background style
      ////////////////////////////////
      // creating array of colors
      // colors from https://flatuicolors.com/palette/defo
      var interestColors = ['#1abc9c-#16a085', '#2ecc71-#27ae60', '#3498db-#2980b9', '#9b59b6-#8e44ad', '#34495e-#2c3e50', '#f1c40f-#f39c12', '#e67e22-#d35400', '#e74c3c-#c0392b'];
      // for each interest element
      $(".interest--checkmark").each(function(index){
        // get random number from array above - example found in jQ library
        var thisInterestColor = interestColors[Math.floor(Math.random()*interestColors.length)];
        // split pair of colors
        var thisColor = thisInterestColor.split('-');
        // set style for each element
        $(this).css("background","linear-gradient(45deg,"+ thisColor[0] +", "+ thisColor[1] +")");

      });

      // datepicker for multiple dates
      // based on codepen https://codepen.io/ranjith555/pen/OyKjjm
      $('#datepicker').datepicker({
      multidate: true,
      format: 'dd-mm-yyyy',
      inline: true,
      altField: '#dateHolder'

      });
      // takes data from calendar div and puts them into input
      // based on coversation from https://stackoverflow.com/questions/19344135/combine-inline-jquery-datepicker-with-an-input-field
      $('#dateHolder').change(function(){
          $('#datepicker').datepicker('setDate', $(this).val());
      });


      // console.log(finalSize);



      // any javaScript should be put above this comment
    });

    </script>

          </body>
          </html>
