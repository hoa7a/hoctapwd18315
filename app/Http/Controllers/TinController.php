<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinController extends Controller
{
    public function thongtinsv(){
        $sinhviens = [
            [
                "ten"=> "Hoalv19",
                "tuoi"=> "20",
                "mssv"=> "PH40029",
                'email'=> "hoa40029@fpt.edu.vn"
            ]
        ];
        return view('list-sv')
            ->with(
                [
                    'sinhvienfpt'=> $sinhviens
                ]
            );
    }
}
