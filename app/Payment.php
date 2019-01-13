<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function getTotal(){
        $total = 0;
        $pmt = $this->payment;
        foreach($pmt as $p){
            $total += $p;
            return $total;
        }
    }
}
