Blog_list();

function Blog_list() {
    return $.ajax({
        url: 'dev/shop_list.json',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $.each(data, function(key, val) {
                $('#blog_page').append('<div class="row align-items-center padding-top-2x padding-bottom-2x">\n' +
                    '          <div class="col-md-5"><img class="d-block w-270 m-auto" src="'+val.url+'" alt="Online Shopping"></div>\n' +
                    '          <div class="col-md-7 text-md-left text-center">\n' +
                    '            <div class="mt-30 hidden-md-up"></div>' +
                    '            <h2>' + val.title + '.</h2>' +
                    '            <p>'+val.body+'</p>' +
                    '<a class="text-medium text-decoration-none" href="shop-page.php?id=' + val.id + '">Подробнее&nbsp;<i class="icon-arrow-right"></i></a>'+
                    //'<a href="blog-page.php?id=' + val.id + '" class="btn btn-secondary float-right btn-sm">Подробнее</a>\n' +

                    '</div></div><hr>');
                console.log(val.img);
                //  console.log(val.address.city);

            });
        },
        error: function() {
            alert('Выполненно с ошибками или категория пустая getIssues_id');
        }
    });
}