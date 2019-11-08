<?php

namespace App\Http\Controllers\Admin;
use App\Appointment;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{

    public function index()
    {
        $events = [];

        $appointments = Appointment::with(['patient', 'employee'])->get();

            foreach ($appointments as $appointment) {
                if (!$appointment->start_time) {
                    continue;
                }

                $events[] = [
                    'title' => $appointment->patient->first_name . ' '.$appointment->patient->last_name.' ' . '('.$appointment->employee->name.')',
                    'start' => $appointment->start_time,
                    'url'   => route('admin.appointments.edit', $appointment->id),
                ];
            
        }

        return view('admin.calendar.calendar', compact('events'));
    }
}
