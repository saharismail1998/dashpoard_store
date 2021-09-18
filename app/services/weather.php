<?php
namespace App\services;
use Illuminate\Support\Facades\Http;

class weather {
public function weather(){
return Http::get('https://api.openweathermap.org/data/2.5/weather?q=Gaza&appid=e891f6b3fe87c2e59f5dc0edddaa5b2c')->json();

}
}

?>