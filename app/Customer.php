<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'cnpj',
        'zip_code',
        'address',
        'number',
        'district',
        'city',
        'state',
        'country'
    ];

    public function projects(){
        return hasMany('App\Projects');
    }
}
