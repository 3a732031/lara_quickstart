<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Illuminate\Http\Request;

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

//Route::get('/', function () {
//    return view('welcome');
//});

/*顯示所有任務*/
Route::get('/', function () {
    //
    return view('tasks');
});
/* 增加新的任務*/
Route::post('/task', function (Request $request) {

    //驗證 和 resources/views/common/errors.blade.php關聯
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // 建立該任務...
    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');

});
/*刪除任務*/
Route::delete('/task/{task}', function (Task $task) {
    //
});

