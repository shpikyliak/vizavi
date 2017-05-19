<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Firm extends Model
{
    public function phones()
    {
        return $this->hasMany(Phone::class);
    }

    public function getPhone()
    {
        if ($this->phones->isNotEmpty()) {
            return $this->phones->first()->phone;
        }
        return '---';
    }

    static function getByPhonesCount($phones, $param)
    {
        $firms = Firm::all();
        $collection = array();
        switch ($param) {
            case '=':
                foreach ($firms as $firm) {
                    if ($firm->phones->count() == $phones) {
                        $collection[] = $firm;
                    }
                }
                break;
            case '>=':
                foreach ($firms as $firm) {
                    if ($firm->phones->count() >= $phones) {
                        $collection[] = $firm;
                    }
                }
                break;
            case '<':
                foreach ($firms as $firm) {
                    if ($firm->phones->count() < $phones) {
                        $collection[] = $firm;
                    }
                }
                break;
            default:
                foreach ($firms as $firm) {
                    if ($firm->phones->count() == $phones) {
                        $collection[] = $firm;
                    }
                }
                break;
        }


        return collect($collection);
    }

    static function maxium()
    {
        $firms = Firm::all();
        $phonesAmount = array();
        foreach ($firms as $firm) {
            $phonesAmount[$firm->id] = $firm->phones->count();
        }

        $max = collect($phonesAmount)->max();

        return Firm::find(array_search($max, $phonesAmount));
    }


}
