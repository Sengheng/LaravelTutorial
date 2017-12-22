<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use App\Task;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('about', function(){
	return view('index',[
		'name'=> 'World',
		'age' => 2
	]);
});*/
/*Route::get('about', function(){
	return view('index') -> with('name',"Sengheng");
});*/
/*Route::get('about', function(){

	$name = 'Tommy';
	return view('index',['name' => $name]);
});*/
/*Route::get('about', function(){
	$name ='Danny';
	$gender = "F";
	return view('index',compact('name','gender'));
});
*/


Route::get('about/{aboutme}', function ($id){

	//dd($id);
	$task = DB::table('tasks')->find($id);
	dd($task);
	return view('index', compact('tasks'));
//	return $tasks;
});
Route::get('/tasks', function (){

	/*$tasks = [
		'Go to the store',
		'Buy some drinks',
		'Come back home'

	];

	return view('index', compact('tasks'));*/

	//$tasks = DB::table('tasks')->get();
	$tasks = Task::all();
	return view('index', compact('tasks'));
//	return $tasks;
});
Route::get('/tasks/{task}', function ($id){

	//$task = DB::table('tasks')->find($id);
	$task = Task::find($id);

	return view('show', compact('task'));
//	return $tasks;
});
