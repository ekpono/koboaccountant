<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

// For creating a new view file
// Artisan::command('kobo:view {name}', function(){

//     $view = $this->argument('name');
    
//     $template = File::get('resources/templete/view.txt');
  
//     $compiled = str_replace('{name}', $view, $template);

//     File::put('resources/views/'.$view.'.blade.php', $compiled);

//     $this->info('View successfully reneragated');
    
// })->describe('Get a view file out of the box');