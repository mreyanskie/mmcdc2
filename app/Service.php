<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    public $table = 'services';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'price',
        'created_at',
        'updated_at',
        'deleted_at',
        'service_name',
    ];

    public function appointments()
    {
        return $this->belongsToMany(Appointment::class);
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
