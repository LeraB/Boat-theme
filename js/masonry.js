jQuery(document).ready(function ($) {
    $('.grid').masonry({
        // use element for option
        itemSelector: '.grid-item',
        percentPosition: true,
                  // use outer width of grid-sizer for columnWidth
        columnWidth: 200


       // persentPosition: true

    });
});


var target='.find-block';

jQuery(target).each(function(){
    jQuery(this).click(function(){
        location = jQuery(this).find('a').attr('href');});
    jQuery(this).css('cursor','pointer');
});