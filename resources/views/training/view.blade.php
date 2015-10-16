@extends('master')
@section('title', 'View Information')
<style>
    label{
        color: green;
        font-size: larger;
    }

    b{
        font-family: Arial;
        font-size: larger;
    }

    hr{
        background-color: purple;
    }
</style>

@section('content')
    <div class="container">
        <div class="well well bs-component">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <div class="well" style="background-color: darkseagreen;">
                        <header align="center">
                            <b>Bangladesh Academy For Rural Development(BARD)</b><br>
                            <b>Kotbari,Comilla,Bangladesh</b><br>
                            <b>{!! $training->training_name !!}</b>
                        </header>
                    </div>
                </div>
            </div>

            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--6-col">
                    <div class="well well bs-component">
                        <div>
                            <label>Training Type</label>
                            <p>{!! $training->training_type  !!}</p>
                        </div><hr>

                        <div>
                            <label>List of Courses</label>
                            <br>
                            <ul>
                                <li><b><a href="">{!! $training->courses !!}</a></b></li>
                                <li><b><a href="">{!! $training->courses !!}</a></b></li>
                                <li><b><a href="">{!! $training->courses !!}</a></b></li>
                                <li><b><a href="">{!! $training->courses !!}</a></b></li>
                            </ul>
                        </div><hr>

                        <div>
                            <label>Duration:</label>&nbsp;{!! $training->start_date !!}&nbsp;to&nbsp;{!! $training->end_date !!}

                        </div><hr style="background-color: green;">

                        <div>
                            <label>Information How to Apply</label>
                            <p>
                                {!! $training->applying_information !!}
                            </p>
                        </div><hr>


                        <div>
                            <label>Resources Provided by to a Particular Training</label>
                            <p>
                                {!! $training->provided_resources !!}
                            </p>
                        </div><hr>

                        <div>
                            <label>Information About Accommodation</label>
                            <p>
                                {!! $training->accommodation !!}
                            </p>
                        </div>


                    </div>
                </div>

                <div class="mdl-cell mdl-cell--6-col">
                    <div class="well well bs-component">
                        <div>
                            <label>Objectives</label>
                            <p>
                                {!! $training->objectives !!}
                            </p>
                        </div><hr>


                        <div>
                            <label>Testimonial</label>
                            <p>
                                {!! $training->testimonial ? $training->testimonial : 'No testimonial'!!}
                            </p>
                        </div><hr>


                        <div>
                            <label>Daily Schedule</label>
                            <p>
                                {!! $training->daily_schedule !!}
                            </p>
                        </div><hr>

                        <div>
                            <label>Fees Structure</label>
                            <p>
                                {!! $training->fees_structure !!}
                            </p>
                        </div><hr>

                        <div>
                            <label>Responsible person for Trainees</label>
                            <p>
                                {!! $training->responsible_person !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{!! action('TrainingController@edit', $training->training_slug) !!}" class="btn btn-info">Edit</a>
            <form method="post" action="{!! action('TrainingController@destroy', $training->training_slug) !!}" class="pull-left">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-warning">Delete</button>
                    </div>
                </div>
            </form>
            <div class="clearfix"></div>

        </div>
    </div>
@endsection
