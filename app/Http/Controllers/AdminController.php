<?php

namespace App\Http\Controllers;
use App\Click;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Array_;

class AdminController extends Controller
{
    public function index(){
        $clickArr=Click::all();
        $clickQuantity=[];
        for($i=0;$i<=24;$i++){
            $clickQuantity[$i]=0;
        }
        foreach ($clickArr as $click) {
            $clickQuantity[$click->getHour()]++;
        }
        //SELECT * FROM `clicks` WHERE HOUR(created_at) BETWEEN 16 AND 18
        //$clickArr=Click::first();
        //$clickArr=$clickArr->getHour();
        var_dump($clickQuantity);
        return view('admin',['clickQuant' => $clickQuantity]);
    }
}
