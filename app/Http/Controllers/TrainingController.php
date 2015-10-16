<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrainingFormRequest;
use App\Training;
class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trainings = Training::all();
        return view('training.index',compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		 return view('training.training_info');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrainingFormRequest $request)
    {
        //
        $slug = uniqid();
        $training = new Training(array(
            'training_name' => $request->get('training_name'),
            'training_type'=>$request->get('training_type'),
            'applying_information'=>$request->get('applying_information'),
            'objectives'=>$request->get('objectives'),
            'courses'=>$request->get('courses'),
            'start_date'=>$request->get('start_date'),
            'end_date'=>$request->get('end_date'),
            'provided_resources'=>$request->get('provided_resources'),
            'accommodation'=>$request->get('accommodation'),
            'testimonial'=>$request->get('testimonial'),
            'daily_schedule'=>$request->get('daily_schedule'),
            'fees_structure'=>$request->get('fees_structure'),
            'responsible_person'=>$request->get('responsible_person'),
            'training_slug' => $slug
        ));

        $training->save();

        return redirect('/training_info')->with('status', 'Your Information have been inserted');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($training_slug)
    {
        //
        $training = Training::wheretraining_slug($training_slug)->firstOrFail();
        return view('training.view',compact('training'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($training_slug)
    {
        //
        $training = Training::wheretraining_slug($training_slug)->firstOrFail();
        return view('training.edit',compact('training'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($training_slug, TrainingFormRequest $request)
    {
        //
        $training = Training::where('training_slug',$training_slug)->firstOrFail();
            $training->training_name = $request->get('training_name');
            $training->training_type = $request->get('training_type');
            $training->applying_information = $request->get('applying_information');
            $training->objectives = $request->get('objectives');
            $training->courses = $request->get('courses');
            $training->start_date = $request->get('start_date');
            $training->end_date = $request->get('end_date');
            $training->provided_resources = $request->get('provided_resources');
            $training->accommodation = $request->get('accommodation');
            $training->testimonial = $request->get('testimonial');
            $training->daily_schedule = $request->get('daily_schedule');
            $training->fees_structure = $request->get('fees_structure');
            $training->responsible_person = $request->get('responsible_person');


        Training::where('training_slug',$training_slug)->update($training->toArray());
        return redirect(action('TrainingController@edit', $training->training_slug))->with('status', 'The Training Information has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($training_id)
    {
        //

    }
}
