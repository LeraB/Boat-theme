jQuery(function ($) {

    $('#blog_true_loadmore a').click(function (e) {

        e.preventDefault();

        var data = {
            'action': 'blog_load',
            'query': blog_true_posts,
            'page': blog_current_page
        };


        $.ajax({
            url: blogload.ajaxurl,
            data: data,
            type: 'post',
            dataType: 'html',
            success: function (data) {
                console.log(data);
                //var msnry = new Masonry( '.grid');
                if (data) {

                    blog_current_page++;

                 $grid.append( data ).masonry( 'appended', data );

                   //msnry.appended( data );

  //                  $grid.masonry( 'appended', data );
                      /*  .append( data )
                        .masonry( 'appended', data )
                        // layout
                        .masonry();
*/
                      $grid.masonry('reloadItems');
                    if (blog_current_page === blog_max_pages) $("#blog_true_loadmore").css('display', 'none');

                    console.log('max - page');

                } else {

                    $('#blog_true_loadmore').css('display', 'none');
                    console.log('min - page');

                }
            }
        });
    });
});