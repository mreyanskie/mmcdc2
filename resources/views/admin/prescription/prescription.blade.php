@extends('layouts.admin')
@section('content')
<div class="container">
            <div class="card" style="width: 40rem;">
                <div class="card-header text-center"><h4>Meneses Medical Clinic and Diagnostic Center
                </div>
                    <div class="card-body">
                            <h4 class="card-title text-center border-bottom">Prescription Form</h4><h1>Rx</h1>           
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="Name">Patient's Name:</label>
                                    <input type="text" class="form-control" id="inputName"/>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputGender">Sex:</label>
                                    <input type="text" class="form-control" id="inputGender"/>
                                </div>
                                        <div class="form-group col-md-1">
                                            <label for="inputGender">Age:</label>
                                            <input type="text" class="form-control" id="inputAge"/>
                                        </div>
                                <div class="col">
                                    <label for="Date" class="float-right font-weight-bold">Date: {{ date('m-d-Y') }}</label>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="Address">Address:</label>
                                    <input type="text" class="form-control" id="inputAddress"/>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="TextArea1">Medicine/s:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" col="5" rows="5" autocapitalize="characters"></textarea>
                              </div>
                              <div class="form-group col-md-3">
                                <label for="TextArea2">Dosage:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" col="5" rows="5" autocapitalize="characters"></textarea>
                              </div>
                              <div class="form-group col-md-4">
                                <label for="TextArea3">Intervals:</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" col="5" rows="5" autocapitalize="characters"></textarea>
                              </div>
                        
                                    <div class="col-12">
                                            <p class="text-monospace text-right">DR. JANELL P. MENESES, MD</p>
                                            <p class="text-monospace text-right">Lic. No.: 0101566</p>

                                        <!-- <button id="print" class="btn btn-success float-right">
                                                <i class="fa fa-print"></i>Print</button> -->
                                    </div>
                                    
                            </div>
                        </div>
                     </form>
                     <div id="app" class="d-print-none col-12">
                            <a href="" @click.prevent="printme"  class="btn btn-success float-right">
                                   <i class="fa fa-print"></i>Print</a>
                                   <script src="{{ asset('js/app.js')}}"> defer</script>
                                   <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
                     </div>
                </div>
            </div>
 </div>
@endsection