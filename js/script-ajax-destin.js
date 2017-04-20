jQuery(function ($) {


    $('#blog_true a').click(function (e) {

        e.preventDefault();

        var data = {
            'action': 'blog_load',
            'query': blog_true_posts,
            'page': blog_current_page
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
                    console.log(blog_current_page);
                    console.log(blog_max_pages);
                    if (blog_current_page == blog_max_pages) {
                        $("#blog_true").css('display', 'none');



                    }
                }
            }
        });
    });


});