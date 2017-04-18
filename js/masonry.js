var  $grid;

jQuery(document).ready(function ($) {
    $grid =  $('.grid').masonry({
        columnWidth: 20,
        itemSelector: '.grid-item'

    });
});



var target='.find-block';

jQuery(target).each(function(){
    jQuery(this).click(function(){
        location = jQuery(this).find('a').attr('href');});
    jQuery(this).css('cursor','pointer');
});