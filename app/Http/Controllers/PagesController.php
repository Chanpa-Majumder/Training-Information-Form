<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\TrainingFormRequest;

class PagesController extends Controller {

    public function home()
    {
        return view('home');
    }
	
	public function training_info()
   {
        return view('training.training_info');
   }
   
   public function store(TrainingFormRequest $request)
   {
      return $request->all();
   }

	public function show()
	{
		return view('show');
	}
	
	/*public function contact()
	{
		return view('tickets.create');
	}*/

}