jQuery(function ($) {


    $('#blog_true_loadmore a').click(function (e) {

        e.preventDefault();

        var data = {
            'action': 'blog_load',
            'query': blog_true_posts,
            'page': blog_current_page,
            'post_type': postt
        };

        function getItemElement(data) {
            var elem = document.createElement('div');
            elem.className = 'grid ';
            elem.innerHTML = data;
            console.log(elem);
            return elem;

        }


        $.ajax({
            url: blogload.ajaxurl,
            data: data,
            type: 'post',
            dataType: 'html',
            success: function (data) {

                //var msnry = new Masonry( '.grid');
                dataparse = JSON.parse(data);

                data = [getItemElement(dataparse)];
                var $elems = $(data);

                console.log(data);
                if (data) {

                    blog_current_page++;

                    $grid.append($elems).masonry('appended', $elems);

                    if (blog_current_page == blog_max_pages) {

                        $("#blog_true_loadmore").css('display', 'none');



                    }
                }
            }
        });
    });


});