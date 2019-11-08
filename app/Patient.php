<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'patients';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const GENDER_SELECT = [
        'male'   => 'Male',
        'female' => 'Female',
    ];

    protected $fillable = [
        'email',
        'gender',
        'contact',
        'last_name',
        'first_name',
        'diagnosis',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_id',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'patient_id', 'id');
    }
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
}
