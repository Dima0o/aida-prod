Shop_bild() ;
function Shop_bild() {
    return $.ajax({
        url: 'https://api.hh.ru/vacancies?employer_id=1199053',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $.each(data['items'], function (key, val) {
                $('#blog_page').append('<div class="row align-items-center padding-top-2x padding-bottom-2x">\n' +
                    '          <div class="col-md-5"><img class="d-block w-270 m-auto" src="https://hhcdn.ru/employer-logo-original/505539.jpg" alt="Online Shopping"></div>\n' +
                    '          <div class="col-md-7 text-md-left text-center">\n' +
                    '            <div class="mt-30 hidden-md-up"></div>' +
                    '            <h2>'+val.name+'.</h2>' +
                    '            <p><b style="text-indent: 1.5em">Обязанности:</b> '+val.snippet.responsibility+'</br>' +
                    '<b style="text-indent: 1.5em">Требования:</b> '+ val.snippet.requirement+'</br>' +
                    price(val.salary.from,val.salary.to)+
                    addres(val.address)+
                    '<a href="'+val.apply_alternate_url+'" class="btn btn-secondary float-right btn-sm">Откликнутся</a>\n' +
                    '</p>' +
                    '</div></div><hr>');
                //  console.log(val.address.city);

            });
        },
        error: function () {
            alert('Выполненно с ошибками или категория пустая getIssues_id');
        }
    });
}
function addres(data) {
    if (data != null) {
        return '<b style="text-indent: 1.5em">Адрес:</b> ' + data.city + ', ' + data.street + ', ' + data.building + '</br>';
    }else{
        return '';
    }

}
function price(down,up) {
    let text='<b style="text-indent: 1.5em">Зарплата</b>';
    if(down !=null){
        text=text+'<b style="text-indent: 1.5em"> от:</b>'+down;
    }
    if(up!=null){
        text=text+'<b style="text-indent: 1.5em"> до:</b> '+up+' руб.<br>';
    }
    return text+'<br>';
}