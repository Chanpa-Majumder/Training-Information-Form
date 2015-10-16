@extends('master')
@section('title', 'View all trainings')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: darkseagreen;">
                <h2 align="center">Trainings List </h2>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            @if ($trainings->isEmpty())
                <p> There is no training.</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>Training Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($trainings as $training)
                        <tr>
                            <td>{!! $training->training_name !!}</td>
                            <td><a href="{!! action('TrainingController@show', $training->training_slug) !!}">VIEW</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection

