<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/* Создание маршрута /test с выводом сообщения "Тестовая страница!" */
Route::get('/test', function (){
    return "Тестовая страница!";
});
Route::get('/test/1', function (){
    return "Тестовая страница 1!";
});
Route::get('/test/2', function (){
    return "Тестовая страница 2!";
});

/* Памаметры в маршруте */
Route::get('/post/{id}', function ($id) {
    return "Пост " . $id;
});
/* Сделайте маршрут, обрабатывающий адреса вида /user/:name, где вместо :name может быть любая строка. */
Route::get('/user/{name}', function ($name){
    return "Привет, " . $name;
});

/* Несколько памаметров в маршруте */
Route::get('/post/{cardId}/{postId}', function ($cardId, $postId) {
   return $cardId . " - " . $postId;
});
/* Сделайте маршрут, обрабатывающий адреса вида /user/:surname/:name/, где параметры задают имя и фамилию юзера. */
Route::get('/user/{surname}/{name}', function ($surname, $name) {
    return "Привет, " . $surname . " " .$name . "!";
});

/* Необязательные параметры  - ? */
Route::get('/posts/page/{page?}', function ($page = 1){
    return "Номер страницы: " . $page;
});
/* Пусть дан адрес вида /city/:city, где в параметре будет задаваться город. Сделайте так, чтобы город был необязательным параметром и по умолчанию имел значение Томск. */
Route::get('/city/{city?}', function ($city = 'Томск'){
   return "Город: " . $city;
});

/* Ограничение параметров */
Route::get('/users/{age}', function ($age){
    return "Возраст пользователя: " . $age;
})->where('age', '[0-9]+');

Route::get('/govsign/{sign}/{id}', function ($sign, $id){
   return "Номер: " . $sign . ". Регион: " . $id . ".";
})->where('sign', '[a-z]+')->where('id', '[0-9]+');

/* whereAlpha - ограничение только на буквы
 * whereNumber - ограничение только на цифры
 * whereAlphaNumeric - ограничение на буквы и цифры
 * ограничение на id сделано глобально на все маршруты в файле App\Providers\RouteServiceProvider.php */
Route::get('/govsign2/{sign}/{id}', function ($sign, $id){
    return "Номер: " . $sign . ". Регион: " . $id . ".";
})->whereAlpha('sign');

/* Разрешение конфликтов в маршрутах
 * сначало указывем частные случаи, потом общие
 */
Route::get('/test2/all', function () {
    return "Все тесты";
});
Route::get('/test2/{n}', function ($n){
   return "Тест - " . $n;
});

/* Группировка маршрутов */
Route::prefix('/test3')->group( function () {

    Route::get('/all', function () {
        return "Все тесты";
    });

    Route::get('/{n}', function ($n){
        return "Тест - " . $n;
    });
});
