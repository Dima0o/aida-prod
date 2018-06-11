function hh() {
    /*return $.ajax({
        url: 'https://api.hh.ru/vacancies?employer_id=1199053',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $.each(data['items'], function (key, val) {
                $('#container').append('<div class="row align-items-center padding-top-2x padding-bottom-2x">\n' +
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
    });*/
    Hh2();
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
function CoffeeMachine(power) {
    this.waterAmount = 0;
    var WATER_HEAT_CAPACITY = 4200;

    function getBoilTime() {
        return this.waterAmount * WATER_HEAT_CAPACITY * 80 / power;
    }

    function onReady() {
        alert( 'Кофе готов!' );
    }

    this.run = function() {
        setTimeout(onReady, getBoilTime.call(this));
    };

}

// создаю кофеварку, мощностью 100000W чтобы кипятила быстро
var coffeeMachine = new CoffeeMachine(100000);
coffeeMachine.waterAmount = 200;

//coffeeMachine.run();
function Person(first, last, age, gender, interests) {
    this.name = {
        'first': first,
        'last' : last
    };
    this.age = age;
    this.gender = gender;
    this.interests = interests;
    this.bio = function() {
        alert(this.name.first + ' ' + this.name.last + ' is ' + this.age + ' years old. He likes ' + this.interests[0] + ' and ' + this.interests[1] + '.');
    };
    this.greeting = function() {
        alert('Hi! I\'m ' + this.name.first + '.');
    };
}

//var person1 = new Person('Bob', 'Smith', 32, 'male', ['music', 'skiing']);
//кнопки для получение  данных  и спрятать их в параметрах для работы без аякса


function Jobs() {
    $('#container').html('<div class="panel-group" id="accordion1"></div>');
}
function Hh2() {
    Jobs();
     $.ajax({
        url: 'https://api.hh.ru/vacancies?employer_id=1199053',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            console.log(data);
            let i=0;
            $.each(data['items'], function (key, val) {
                $('#accordion1').append('<div class="panel panel-default">\n' +
                    '                <div class="panel-heading">\n' +
                    '                    <h5 class="panel-title">\n' +
                    '       <a class="accordion-toggle" data-toggle="collapse" data-target="#accordion1_'+i+'" aria-expanded="false" aria-controls="#accordion1_'+i+'" href="#accordion1_'+i+'">'+val.name+'.</a>\n' +
                    '                    </h5>\n' +
                    '                </div>\n' +
                    '                <div id="accordion1_'+i+'" class="panel-collapse collapse in">\n' +
                    '                    <div class="panel-body">\n'+
                    '            <p><b style="text-indent: 1.5em">Обязанности:</b> '+val.snippet.responsibility+'</br>' +
                    '<b style="text-indent: 1.5em">Требования:</b> '+ val.snippet.requirement+'</br>' +
                    '<a href="'+val.apply_alternate_url+'" class="btn btn-secondary float-right btn-sm">Откликнутся</a>\n' +
                    price(val.salary.from,val.salary.to)+
                    addres(val.address)+

                    '</p>' +
                    '</div>\n' +
                    '                </div>\n' +
                    '            </div>');
                    i++;
            });
        },
        error: function () {
            alert('Выполненно с ошибками или категория пустая getIssues_id');
        }
    });

}
//передача данных в параметр для блока вакансий