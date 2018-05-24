<?php
  //variables set for head.html, where these are used to show difference between pages
  $title = "This is 404 page - DOKK1";
  $descr = "";
  $keywords = "";
  //includes everything from file below, without the file, website will show an error
  require("inc/head.html");
  // covered until </head>
 ?>

    <body>
      <style>
/* special for footer only */
      body{
        min-height:100vh
      }
      footer.footer{
        padding-bottom: 0
      }
      .dark {
        text-align: center;
        position: relative;
      }
      .dark h1 {
        margin: 0;
        font-size: 15vw;
        text-transform: uppercase;
        line-height: 1.9;
      }
      .dark h1 {
        color: black;
        padding-bottom: 1px;
      }
      .dark img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
      }
      .dark {
        background: white;
      }

      .dark img {
        mix-blend-mode: lighten;
      }

      .something-wrong{
        text-align: center;
        font-size: 1.3em;
        line-height: normal;
        color:var(--color-grey);
        width: 80%;
        margin-left: 10%
      }


      @media only screen and (min-width: 760px) {


      .something-wrong{
        font-size: 2em;
        width:60%;
        margin-left:20%;


      }
    }


      </style>
        <div class="wrapper">
            <?php require("inc/header.html"); ?>
            <!-- take a look at the header.html file, there is a comment for you:) -->
            <main class="content">

              <section id="404">
                <!-- https://codepen.io/dudleystorey/pen/aONdzJ -->
                <div class="dark">
                  <h1>4 oh 4</h1>
                  <img src="/images/bg.svg" alt="Photograph of the Chicago skyline taken from the water during the day" style="height:100%">
                </div>
                <p class="something-wrong">Sorry! Something went wrong and the page you were looking for cannot be found! </p>
                <a href="/index.php" class="button--yellow-red button" style="width:auto;padding:1em">Go to the homepag</a>
              </section>
            </main>
            <?php require("inc/footer.html"); ?>
        </div>
        <!-- javaScript -->
        <?php require("inc/script-databases.html"); ?>


    </body>

    </html>
