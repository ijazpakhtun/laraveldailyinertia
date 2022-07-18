<?php

use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    
    return inertia('Home');
});

Route::get('/users', function () {
   
   
    return inertia('Users/Index', ['users'=>\App\Models\User::query()
    
        ->when(request()->has('search'), function ($query) {
            $query->where('name', 'like', '%' . request('search') . '%');
        })
        ->paginate(10)
        ->withQueryString()
        ->through(fn($user)=>[
                'id'=>$user->id,
                 'name'=>$user->name,
                
        ]),

        'filters'=>request()->only(['search'])
    ]);         
    });


Route::get('users/create', function () {
    return inertia('Users/Create');
});

Route::post('users', function(){
    sleep(3);
    $attributes=request()->validate([
        'name'=>['required','min:3'],
        'email'=>['required','email','unique:users'],
        'password'=>['required','min:6']
    ]);

    User::create($attributes);

    return redirect('/users');
});

Route::get('/settings', function () {
    return inertia('Settings');
});

Route::get('/logout', function () {

    return "logout the user out";
    // return inertia('Profile');
});

