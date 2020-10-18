<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    //
    public function getData()
    {
        $data = [
            "projects" => [
                [
                    'name' => 'fw',
                    'id' => 1
                ],
                [
                    'name' => 'sprint',
                    'id' => 2
                ]
            ]
        ];

        return view('welcome', ['data' => $data]);
    }
}
