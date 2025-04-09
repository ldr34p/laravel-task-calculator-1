<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculator', function () {
    return view("calculator");
});

Route::post('/calculator', function (Request $request) {
    $mass = $request->mass;
    $measuring = $request->measuring;
    $height = $request->height;
    if($measuring == "m"){
        $index = $mass/($height*$height);
    }
    else {
        $index = $mass/($height*$height)*10000;
    }

    return view(
        "result",
        ["index"=>$index, "mass"=>$mass, "height"=>$height]
    );
});
