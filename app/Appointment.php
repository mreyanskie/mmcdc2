<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\MultiTenantModelTrait;

class Appointment extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'appointments';

    protected $dates = [
        'start_time',
        'created_at',
        'updated_at',
        'deleted_at',
        'finish_time',
    ];

    protected $fillable = [
        'price',
        'patient_id',
        'start_time',
        'created_at',
        'updated_at',
        'deleted_at',
        'employee_id',
        'finish_time',
        'description',
        'created_by_id',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }

    public function getStartTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setStartTimeAttribute($value)
    {
        $this->attributes['start_time'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getFinishTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setFinishTimeAttribute($value)
    {
        $this->attributes['finish_time'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }
    public function created_by()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }
    public static function boot()
    {
        parent::boot();

        Appointment::observe(new \App\Observers\AppointmentActionObserver);
    }
}
