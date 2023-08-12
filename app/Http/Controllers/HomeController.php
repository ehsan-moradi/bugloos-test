<?php

namespace App\Http\Controllers;


use EhsanMoradi\DataMapper\Mapper;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function xml()
    {
        $data = Http::withoutVerifying()
            ->get(route('api.xml'))
            ->body()
        ;

        $mapper = new Mapper(data: $data, config: config('data-mapper.nested'));

        dd([
            $mapper->plate(),
            $mapper->include(),
            $mapper->brickEachThen(),
            $mapper->brickEachExamine(),
            $mapper->brickEachSoil(),
            $mapper->brickEachSpeed(),
            $mapper->brickEachTherefore(),
            $mapper->brickEachLearn(),
            $mapper->brickPeriod(),
            $mapper->brickEntirely(),
            $mapper->brickDevelop(),
            $mapper->brickWeek(),
            $mapper->brickWent(),
            $mapper->win(),
            $mapper->lay(),
            $mapper->beat(),
        ]);
    }

    public function json()
    {
        $data = Http::withoutVerifying()
            ->get(route('api.json'))
            ->body()
        ;

        $mapper = new Mapper($data);

        dd([
            $mapper->name(),
            $mapper->family(),
            $mapper->birthdayDate(),
            $mapper->address()
        ]);
    }
}
