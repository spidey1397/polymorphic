<?php

use Illuminate\Support\Facades\Route;
use App\Project;
use App\Category;
use App\Image;

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
    // $project = Project::create([
    //     'name' => 'second project'
    // ]);

    // $project->images()->create([
    //     'name' => 'nilay'
    // ]);                                      // adding relation of Project & Image models into database


    // $project = Project::find(1);
    // $image = Image::create([
    //     'name' => 'dhruv'
    // ]);

    // $project->images()->attach($image);     // find and add relation of Project & Image models into database

    
    // $categories = Category::create([
    //     'name' => 'friend'
    // ]);
    // $image = Image::find(2);

    // $categories->images()->attach($image);  // add category related to image-1 (Ralation between Image & Category model)

    // $image = Image::find(2);
    // dd($image->categories);                // finding an images that are related to categories

    return view('welcome');
});



