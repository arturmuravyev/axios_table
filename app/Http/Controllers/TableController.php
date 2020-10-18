<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    //
    public function genData()
    {
        $data = [
            "projects" => [
                [
                    'name' => 'fw',
                    'id' => 254,
                    'branches' => [
                        [
                            'name' => 'master',
                            'commit' => 'new update'
                        ],
                        [
                            'name' => 'demo',
                            'commit' => '#23111 fix'
                        ],
                    ]
                ],
                [
                    'name' => 'sprint',
                    'id' => 387,
                    'branches' => [
                        [
                            'name' => 'master',
                            'commit' => 'ouch smth'
                        ],
                        [
                            'name' => 'demo',
                            'commit' => '#33311 fixing'
                        ],
                    ]
                ],
                [
                    'name' => 'bda',
                    'id' => 988,
                    'branches' => [
                        [
                            'name' => 'demo2',
                            'commit' => 'new mechanism'
                        ],
                        [
                            'name' => 'demo3',
                            'commit' => '#444 feature'
                        ],
                    ]
                ]
            ]
        ];

        return $data;

    }
    public function getData()
    {

        return view('welcome', ['data' => self::genData()]);
    }

    public function getBranches($project_id){

        $data = self::genData();

        foreach ($data['projects'] as $proj)
        {
            if ($proj['id'] == $project_id)
            {
                return response()->json(['branches' => $proj['branches']]);
            }
        }

        return response()->json(['branches' => null]);
    }
}
