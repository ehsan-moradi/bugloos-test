<?php

namespace App\Http\Controllers;


use EhsanMoradi\DataMapper\Mapper;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'ehsan',
            'lastName' => 'moradi',
            'birthdayDate' => '1994',
            'user' => [
                'age' => '30'
            ]
        ];

        $mapper = new Mapper($data);
        dd(
            $mapper->name(), // ehsan
            $mapper->family(), // moradi
            $mapper->birthDate(), // 1994
            $mapper->userAge() // 30
        );

    }
}
