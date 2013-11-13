/* document ready loop:
- triggers anything inside once the HTML document
is done loading
*/
$(document).ready(function() {
    // console.log is used to send text data to the console
    console.log('doc ready!');


    // a function called when a click event is registered on
    // an element with the id of 'submit'
    $('#submit').click(function(){
    // create a simple array with one member key
    // this is the twitter search term, feel free to modify this
    var search_term = {
    q: 'cloudspokes'
    };
// pass the search term to the search function defined below
search(search_term);
});
});

/*
the main search function

this takes a search term defined by 'search_term' and then uses the
jquery ajax function to connect to the twitter search api as outlined here:
- https://dev.twitter.com/docs/api/1/get/search

for more info on what you can do with the jquery ajax function see:
- http://api.jquery.com/jQuery.ajax/
*/
function search(search_term) {
    $.ajax({
        /* the 'param' function ensures that our search terms are properly encoded
         see: http://api.jquery.com/jQuery.param/ */
        url: 'http://search.twitter.com/search.json?' + $.param(search_term),


        /* the data type should be set to jsonp. for more info on that see:
         http://en.wikipedia.org/wiki/JSONP */
        dataType: 'jsonp',

        /* since the function runs asynchronously, we need to define what should happen
         when the twitter API sends back a successful response (i.e. HTTP code 200)
         */

        success: function(data) {
            // uncomment the below to see the data in the console
            //console.dir(data);

            /* loop through each item inside of data['results'] and
             extract the 'text' property.
             we then use that to create a list item tag (<li>) and append
             that to the HTML element with id 'tweets'
             */
            for (item in data['results']) {
                $('#tweets').append(
                    '<li>' + data['results'][item]['text'] + '</li>');
            }
}
});
}

function CarouselDemoCtrl($scope) {
    $scope.myInterval = 5000;
    var slides = $scope.slides = [];
    $scope.addSlide = function() {
        var newWidth = 200 + ((slides.length + (25 * slides.length)) % 150);
        slides.push({
            image: 'http://placekitten.com/' + newWidth + '/200',
            text: ['More','Extra','Lots of','Surplus'][slides.length % 4] + ' ' +
                ['Cats', 'Kittys', 'Felines', 'Cutes'][slides.length % 4]
        });
    };
    for (var i=0; i<4; i++) {
        $scope.addSlide();
    }
}
