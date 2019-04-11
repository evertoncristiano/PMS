<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name','description', 'deliveryDate', 'customer_id'
    ];

    public function customer(){
        return $this->belongsTo('App\Customer', 'customer_id', 'id');
    }
}