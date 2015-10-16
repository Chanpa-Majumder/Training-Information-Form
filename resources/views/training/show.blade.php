@extends('master')
@section('title', 'Training Information')
@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <div class="content">
				   <div class="row">
				     <div class="col-md-12">
                       <h1 class="header" align="center">{!! $training->training_name !!}</h1>
					 </div>   
				   	</div>
					
					<div class="row">
					   <div class="col-md-2"></div>
					   <div class="col-md-8">
					      <div class="well">
						    
							<p> <strong>Training Type</strong>: {!! $training->training_type  !!}</p>
							
							<dd> <strong>Information How to Apply</strong>: {!! $training->appling_information !!}</dd>
							<em> <strong>Objectives</strong>: {!! $training->objectives !!}</em>
							<dl> <strong>List of Courses</strong>: {!! $training->courses !!}</dl>
							<p> <strong>Start Date</strong>: {!! $training->start_date !!}</p>
							<p> <strong>End Date</strong>: {!! $training->end_date !!}</p>
							<dd> <strong>Resources Provided by BARD to a particular Training</strong>: {!! $training->provided_resources !!}</dd>
							<p> <strong>Leave a Testimonial</strong>: {!! $training->testimonial !!}</p>
							<p> <strong>Information about Accomodation</strong>: {!! $training->accommodation !!}</p>
							<p> <strong>Daily Schedule</strong>: {!! $training->daily_schedule !!}</p>
							<p> <strong>Fees Structure</strong>: {!! $training->fees_structure !!}</p>
							<b> <strong>Responsible person for Trainees</strong>: {!! $training->responsible_person !!}</b>
						 </div>	
					  </div>
					</div>
                </div>
                <a href="#" class="btn btn-info">Edit</a>
                <a href="#" class="btn btn-info">Delete</a>
            </div>
    </div>

@endsection
