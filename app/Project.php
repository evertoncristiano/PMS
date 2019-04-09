<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function customer()
    {
        return belongsTo('App\Customer', 'customer_id');
    }
}
