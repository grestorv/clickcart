<?php

namespace App\Http\Controllers;
use App\Click;
use Illuminate\Http\Request;

class ClickController extends Controller
{
    public function index(){
        return view('click');
    }
    public function getClick(Request $request){
        $click=Click::where('xcoord', $request->x)->where('ycoord',$request->y)->first();
        if(isset($click)){
            $click->increment('quantity');
        }
        else {
            $click = new Click();
            $click->xcoord = $request->x;
            $click->ycoord = $request->y;
            $click->quantity=1;
            $click->save();
        }
    }
    public function clickcart(){
        echo date('Y-m-d');
        $clickArr=Click::whereDate('created_at', date('Y-m-d'))->get();
        echo 'aaa';
        return view('clickcart', ['clickArr' => $clickArr]);
    }
}
