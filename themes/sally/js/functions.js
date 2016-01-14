var $ = jQuery.noConflict();

/*------------------------------------*\
    #GENERAL FUNCTIONS
\*------------------------------------*/
function imgToSvg(){
    $('img.svg').each(function(){
        var $img = $(this);
        var imgID = $img.attr('id');
        var imgClass = $img.attr('class');
        var imgURL = $img.attr('src');

        $.get(imgURL, function(data) {
            // Get the SVG tag, ignore the rest
            var $svg = $(data).find('svg');

            // Add replaced image's ID to the new SVG
            if(typeof imgID !== 'undefined') {
                $svg = $svg.attr('id', imgID);
            }
            // Add replaced image's classes to the new SVG
            if(typeof imgClass !== 'undefined') {
                $svg = $svg.attr('class', imgClass+' replaced-svg');
            }

            // Remove any invalid XML tags as per http://validator.w3.org
            $svg = $svg.removeAttr('xmlns:a').removeAttr('width').removeAttr('height');

            // Replace image with new SVG
            $img.replaceWith($svg);

        }, 'xml');

    });
} //imgToSvg

function playPause( video ) {
    if (video.paused){
        video.play();
        return;
    }
    video.pause();
}// playPause

/*------------------------------------*\
    #TOGGLE FUNCTIONS
\*------------------------------------*/

function loadVideo(){
    $('.js-video-container').load( "ajax/video.html .js-video-element" );
}

function emptyVideo(){
    $('.js-video-container').empty();
}

//Compartir redes

function loadRedes(){
    $('.js-publicar-container').load( "ajax/comparte.html .js-publicar-element", function(){
        imgToSvg();
    });
}