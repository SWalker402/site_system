@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Assessments Form</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">

                        <div class="col-sm-12">

                            <form method="POST" action="/assessments">
                            {{ csrf_field() }}

                                <div >
                                    <div class="col-sm-8">
                                        <p class="font-weight-bold"><label> Date :&nbsp;</label>{{ \Carbon\Carbon::now()->format('m/d/Y')}}</p>
                                        <p class="font-weight-bold"><label> User Name :&nbsp;</label>{{ Auth::user()->name }}&nbsp;{{ Auth::user()->last_name }}  </p>
                                        <p class="font-weight-bold"><label> Customer :&nbsp;</label>Customer Name</p>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="job_number">Job Number</label>
                                        <div>
                                            <input type="text" class="form-control" id="job_number" name="job_number"  placeholder="Number" >
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="job_number">Job Number</label>
                                    <div>
                                        <input type="text" class="form-control" id="job_number" name="job_number"  placeholder="Number" >
                                    </div>
                                </div>


                                <div class="form-group col-sm-6">
                                    <label for="start_date">Start Date</label>
                                    <div>
                                        <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Number" >
                                    </div>
                                </div>  

                                <div class="form-group col-sm-6">
                                    <label for="exp_date">Exp. Date</label>
                                    <div>
                                        <input type="date" class="form-control" id="exp_date" name="exp_date" placeholder="Number" >
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label for="location">Location</label>
                                    <textarea class="form-control" id="location" name="location" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12 form-group">
                                        <p><label>GPS Coordinates</label></p>
                                    </div>    
                                </div>    
                                
                                <div class="col-sm-6 form-group">
                                    <label for="gps_n" class="col-sm-2 col-form-label">N</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="gps_n" name="gps_n" placeholder="N coordinate" >
                                    </div>
                                </div>


                                <div class="col-sm-6 form-group">
                                    <label for="gps_w" class="col-sm-2 col-form-label">W</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="gps_w" name="gps_w" placeholder="W coordinate"  >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="usa_ticket">USA Ticket#</label>
                                    <div>
                                        <input type="text" class="form-control" id="usa_ticket"  name="usa_ticket" placeholder="Number" >
                                    </div>
                                </div>  

                                <div class="form-group">
                                    <label for="emergency_phone">Emergency Agency/Phone#</label>
                                    <div>
                                        <input type="text" class="form-control" id="emergency_phone" name="emergency_phone" placeholder="Number" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="kit_location_id">First Aid Kit Location</label>
                                    <select class="form-control" id="kit_location_id"  name="kit_location_id">
                                        <option value="0">---</option>
                                        @foreach ($kit_locations as $k_location) 
                                            <option value="{{ $k_location->id }}">{{ $k_location->name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="med_facility_id">Nearest Medical Facility</label>
                                    <select class="form-control" id="med_facility_id"  name="med_facility_id">
                                        <option value="0">---</option>
                                        @foreach ($facilities as $facility) 
                                            <option value="{{ $k_location->id }}">{{ $facility->name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="water_services">Water Sources</label>
                                    <div>
                                        <input type="text" class="form-control" id="water_sources" name="water_sources" placeholder="" >
                                    </div>
                                </div>    

                                <div class="form-group">
                                    <label for="bleed-off">Bleed Off</label>
                                    <div>
                                        <input type="text" class="form-control" id="bleed-off" placeholder="" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cutting">Cutting</label>
                                    <div>
                                        <input type="text" class="form-control" id="cutting" placeholder="" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="test-hole">Test Hole</label>
                                    <div>
                                        <input type="text" class="form-control" id="test-hole" placeholder="" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="hazard">Select Hazard</label>
                                    <select class="form-control" id="hazard">
                                    <option value="0">---</option>
                                    @foreach ($hazards as $hazard) 
                                        <option value="{{ $hazard->id }}">{{ $hazard->name}}</option>
                                    @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit Form</button>
                                <button type="submit" class="btn btn-success pull-right">Save Changes</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
