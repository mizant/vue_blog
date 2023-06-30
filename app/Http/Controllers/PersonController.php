<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name'=> 'Ivan',
                'age'=> 20,
                'job'=> 'developer'
            ],
            [
                'id' => 2,
                'name'=> 'Vasya',
                'age'=> 26,
                'job'=> 'cleaner'
            ],
            [
                'id' => 3,
                'name'=> 'Ira',
                'age'=> 40,
                'job'=> 'manager'
            ],
            [
                'id' => 8,
                'name'=> 'Dima',
                'age'=> 19,
                'job'=> 'student'
            ],
        ];
        return $persons;
    }
}
