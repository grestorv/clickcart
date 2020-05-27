<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    public function getHour(){
        $hour=$this->created_at;
        return date('H', strtotime($hour));
    }
}
