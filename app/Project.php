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

    public function tasks(){
        return $this->hasMany('App\Task');
    }

    public function users(){
        return $this->belongsToMany('App\User', 'user_projects', 'project_id', 'user_id');
    }
}