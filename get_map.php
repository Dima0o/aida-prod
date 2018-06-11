<?

function header(){

    //подключение стилей и футера
    //работа с классами

}
function routung(){
    //if(){}
    $mass=array('hh','profile','catalog','shop','shop-id','card','lk','login');
    if (in_array($_GET['tmp'], $mass)) {
        return $_GET['tmp'];
    }else{
        return '404';
    }
}
function footer(){
    //include('theme/footer.php');


}
?>