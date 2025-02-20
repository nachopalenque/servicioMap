<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WeatherService;

class WeatherController extends Controller
{

    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }


    public function show($city)
    {
        $weather = $this->weatherService->getWeather($city);

        if ($weather) {
            $clima = $weather['weather'][0]['main'];
            $temperatura = $weather['main']['temp_max']-273.15;
            //devuelve un valor concreto del json en este caso la clave main
            return view('clima', ['clima' => $clima, 'ciudad' => $city, 'temperatura' => $temperatura]);
            //devuelve el json
            //return response()->json($weather);
        } else {
            return response()->json(['error' => 'No se pudo obtener la información del clima'], 500);
        }
    }

}
