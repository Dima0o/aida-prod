<?
session_start();
include_once ('core.php');
mb_internal_encoding("UTF-8");
if(isset($_POST['param'])){
    $_POST['param']='hh';
}
$foo = array(
    'number' => 1,
    'float'  => 1.5,
    'array'  => array(1,2),
    'string' => 'bar',
    'function'=> 'function(){return "foo bar";}'
);
$value_arr = array();
$replace_keys = array();
foreach($foo as $key => &$value){
    // Проверяем значения на наличие определения функции
    if(strpos($value, 'function(')===0){
        // Запоминаем значение для послудующей замены.
        $value_arr[] = $value;
        // Заменяем определение функции 'уникальной' меткой..
        $value = '%' . $key . '%';
        // Запоминаем метку для послудующей замены.
        $replace_keys[] = '"' . $value . '"';
    }
}
// Кодируем массив в JSON
$json = json_encode($foo);
$json = str_replace($replace_keys, $value_arr, $json);

//"content":" <h2>Супермаркеты <span class='i'>«Айдасеть»</span></h2>    <p>        Основной формат — <a href='http://aidaset.ru/stores' title='Адреса магазинов'>супермаркеты</a> «шаговой доступности». Обширный ассортимент алкогольной продукции,        продуктов питания и бытовой химии — далеко не полный список товаров, которые мы предлагаем по <strong>самым низким ценам</strong>.    </p>    <p>        <a href='http://aidaset.ru/stores' title='Адреса магазинов'>Супермаркеты</a> оборудованы <strong>собственными пекарнями</strong>, что позволяет Вам приобрести свежую и ароматную выпечку «прямо из печи».    </p>    <p>        Кроме этого, в наших супермаркетах, проводиться множество акций, что позволяет нашим        покупателям приобретать товары по самым выгодным ценам.    </p>    <p>        Наш девиз — <strong>«Всё для людей»</strong>.    </p>",
/*{"_id": "5b20c58a11f09f768fd11910",
"session": 0,
"guid": "d818a825-6410-4ae2-b116-32970770ac9a",
"isActive": false,
"user": [],
"picture": "http://placehold.it/32x32",
"name": "Гость",
"gender": "female",
"company": 1,
"friends": [
    {"id": 0,
    "name": "Главная",
    "url":"?tmp=home",
    "status":""},
    {"id": 1,
    "name": "О компании",
    "url":"?tmp=about",
    "status":""},
    {"id": 2,
    "name": "Вакансии",
    "url":"?tmp=hh",
    "params":"<?=params()?>",
    "status":"active"}
],
"js":"<?=$_POST['primer']?>",
"titel":"Вакансии<?=$_POST['primer']?>",
"function":"ggIdea"}
*/
function params($key,$text){
    //str_replace("%body%", "black", "<body text='%body%'>");
    //$text='';
   $text= str_replace($key, "black", $text);

    foreach ($_POST as $key=> $value){
        //if()

        $text=$text.','.$value;
    } foreach ($_GET as $value){
        $text=$text.','.$value;
    }
    return $text;
}
//получение всех параметров для работы  скорее всего гет будет
function Routing(){
  //  str_replace("%body%", "black", "<body text='%body%'>");

    $mass=array();
    foreach ($_POST as $key=> $value){
        $mass[]=params($key,$value);

    } foreach ($_GET as $key=> $value){
        $mass[]=params($key,$value);
    }
    return $mass;
}
//строим глобальные  параметры потом многомерный массив возвращает оставшиеся данные для работы  и фунции через которуб будет все рендерится дальше
?>
{
    "_id": "<?=$_COOKIE['PHPSESSID']?>",
    "titel":"<?=titel().'--'.$_POST['param']?>",
    "breadcrumbs":<?=json_encode(friends())?> ,
    "menu":<?=json_encode(blok_menu())?>,
    "function":<?=json_encode(friends())?>
}

<?
function titel(){
    return'Страница';
}function blok_menu(){

    Routing();
    $qr_result = mysql_query("select * from `k99969kp_1c`.`blok_menu`") or die(mysql_error());
    if(count(mysql_numrows($qr_result))>0){
        while ($data = mysql_fetch_array($qr_result)) {
            $mass[] = array("url" => $data['uid'], "name" => $data['name']);
        }
    };
    return $mass;
    //return'Страница';
}function friends(){

   // $mass=array("categoru_list","Menu","Card_Bild");
   $mass=array("hh","ElemBlok");
    if(isset($_POST['primer'])){
        $mass[]=str_replace("?tmp=", "", $_POST['primer']);
    }
    return $mass;
    //return'Страница';
}


