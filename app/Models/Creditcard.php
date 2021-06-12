<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creditcard extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'type',
        'number',
        'name',
        'expirationDate'
    ];

    public function users(){

        return $this->belongsToMany('App\Models\User');

    }

}
