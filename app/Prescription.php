<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prescription extends Model
{

    public $table = 'prescription';


    protected $fillable = [
        'name',
        'body',
        
    ];
}