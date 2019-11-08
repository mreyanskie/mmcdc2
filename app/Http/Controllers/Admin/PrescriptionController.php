<?php

namespace App\Http\Controllers\Admin;
use App\Prescription;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class PrescriptionController extends Controller
{

    public function index()
    {
        abort_if(Gate::denies('prescription_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $prescriptions = Prescription::all();
        return view('admin.prescription.prescription');
    }
    public function store(Request $request)
    {
    //
    }
}
