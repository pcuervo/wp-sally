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

function addSourceToVideo(element, src, type) {
    element.html('<source src="'+src+'" type="'+type+'"></source>');
}

function createTutorialVideo(element, src, type) {
    element.html('<video class=" z-index---1" controls id="videoTutorial" width="100%" height="100%" ><source src="'+src+'" type="'+type+'"></source>Your browser does not support the video tag.</video>');
}

function loadVideo(){
    $('.js-video-container').load( "ajax/video.html .js-video-element" );
}

function emptyVideo(){
    $('.js-video-container').empty();
}

function publishVideoWP( name, title, category, video_url, img_url ){
    $.post(
        ajax_url,
        {
            name:       name,
            title:      title,
            category:   category,
            video_url:  video_url,
            img_url:    img_url,
            action:     'save_tutorial'
        },
        function( response ){
            console.log( response );
            if( parseInt( response.error ) ){
                alert( response.message );
                return;
            }
            $('.btn-fb').attr( 'data-share-url', response.permalink );
            $('.btn-tw').attr( 'href', 'http://twitter.com/home?status=Sally Beauty - '+ response.the_title +' - '+response.permalink );
            $('.js-video-container').hide();
            $('.js-publicar-element').show();
        }
    );
}// publishVideoWP

//Compartir redes
function loadRedes(){
    $('.js-publicar-container').load( "ajax/comparte.html .js-publicar-element", function(){
        imgToSvg();
    });
};

function getCookie( cname ) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
};

function runIsotope(container, item){
    var $container = $(container);
    $container.imagesLoaded( function(){
        $container.isotope({
            itemSelector : item,
            layoutMode: 'masonry'
        });
    });
    $('.filter-button-group').on( 'click', 'a', function(e) {
        e.preventDefault();
      var filterValue = $(this).attr('data-filter');
      $container.isotope({ filter: filterValue });
    });
}// runIsotope

function shareVideoFB( url ){
    FB.ui({
        method: 'share',
        href: url,
    }, function(response){
        console.log( response );
    });
}
