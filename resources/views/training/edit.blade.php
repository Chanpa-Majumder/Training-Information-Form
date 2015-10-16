@extends('master')
@section('title', 'Edit Training Information')
@section('content')
    <div class="container" style="background-color: white; color: black; font-size: 20;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-2"></div>

                <div class="col-md-8">
                    <h2 align="center">Edit Training Information Form</h2>
                    <form class="form-horizontal" method="post">
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <label for="TrainingName" class="control-label">Training Name</label>
                                    <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" id="tname" placeholder="Training Name" name="training_name" value="{!! $training->training_name !!}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <label for="TrainingType" class="control-label">Training Type</label>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <label for="inputList" class="col-md-2 control-label"></label>
                                <div class="col-md-10">
                                    <select class="form-control" name="training_type" value="{!! $training->training_type !!}">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <label for="ApplyingInformation" class="control-label">Information How to Apply</label>
                                    <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="content" rows="5" placeholder="Applying Information" name="applying_information" value="{!! $training->applying_information !!}"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <label for="Objectives" class="control-label">Objectives</label>
                                    <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="content" rows="5" placeholder="Objectives" name="objectives" value="{!! $training->objectives !!}"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <label for="CoursesList" class="control-label">List of Courses</label>
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <label for="inputList" class="col-md-2 control-label"></label>
                                <div class="col-md-10">
                                    <select class="form-control" name="courses" value="{!! $training->courses !!}">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5">
                                        <label for="Startdate" class="control-label">Start Date</label>

                                        <input type="date" class="form-control" placeholder="Start Date" name="start_date" value="{!! $training->start_date !!}">

                                    </div>

                                    <div class="col-md-5">
                                        <label for="Enddate" class="control-label">End Date</label>

                                        <input type="date" class="form-control" placeholder="End Date" name="end_date" value="{!! $training->end_date !!}">

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <label for="Resources" class="control-label">Resources Provided by BARD to a Particular Training</label>
                                    <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <textarea class="form-control" id="content" rows="5" placeholder="Resources" name="provided_resources" value="{!! $training->provided_resources !!}"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <label for="LeaveTestimonial" class="control-label">Leave a Testimonial</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <div class="well">
                                            <label>Name</label><input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{!! $training->name !!}"><br>
                                            <label>Testimonial</label><textarea class="form-control" id="content" placeholder="Testimonial" rows="5" name="testimonial" value="{!! $training->testimonial !!}"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <label for="AccommodationInfo" class="control-label">Information about Accommodation</label>
                                    <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="5" id="content" placeholder="Accommodation Information" name="accommodation" value="{!! $training->accommodation !!}"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <label for="DailySchedule" class="control-label">Daily Schedule</label>
                                    <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="5" id="content" placeholder="Daily Schedule" name="daily_schedule" value="{!! $training->daily_schedule !!}"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <label for="FeesStructure" class="control-label">Fees Structure</label>
                                    <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="5" id="content" placeholder="Fees Structure" name="fees_structure" value="{!! $training->fees_structure !!}"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <label for="ResponsiblePerson" class="control-label">Responsible Person for Trainees</label>
                                    <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <textarea class="form-control" rows="5" id="content" placeholder="Responsible Person" name="responsible_person" value="{!! $training->responsible_person !!}"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
@endsection
