    $(document).ready(function() {
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
        $(".carousel").css("min-width", finalSize + "%");


        //////GIVING COLORS TO CHECKBOXES
        // 1. target checkboxes, get the amount of them - possible to skip thanks to jQuery
        // 2. create array of colors
        // 3. for each checkbox, give it background style
        ////////////////////////////////
        // creating array of colors
        // colors from https://flatuicolors.com/palette/defo
        var interestColors = ['blue', 'red', 'yellow'];
        // for each interest element



        $(".interest--checkmark").each(function(index) {
            // get random number from array above - example found in jQ library
            var thisInterestColor = interestColors[Math.floor(Math.random() * interestColors.length)];
            // split pair of colors
            // set style for each element
            $(this).addClass(thisInterestColor);

        });




        // datepicker for multiple dates
        // based on codepen https://codepen.io/ranjith555/pen/OyKjjm
        $('#datepicker').datepicker({
            multidate: true,
            format: 'dd-mm-yyyy',
            inline: true,
            altField: '#dateHolder',
            maxViewMode: 0

        });
        // takes data from calendar div and puts them into input
        // based on coversation from https://stackoverflow.com/questions/19344135/combine-inline-jquery-datepicker-with-an-input-field
        $('#dateHolder').change(function() {
            $('#datepicker').datepicker('setDate', $(this).val());
        });

        //showing search bar
        $(".search--magnifying_glass").click(function() {$('#search--cover').animate({ top:'0' }, 300);});

        //hiding search bar
        $("#x--image").click(function() {$('#search--cover').animate({ top:'-10em' }, 300);});

        //hiding cookies bar
        $(".cookieterms--button").click(function() {$('.js-cookieterms').animate({ bottom:'-10em' }, 300);
        document.cookie = "cookie=accepted; expires=365; path=/";});

      

        // console.log(finalSize);
        // any javaScript should be put above this comment
    });
