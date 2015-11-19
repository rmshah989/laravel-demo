<?php

namespace App\Http\Controllers;

use App\Enquiry;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ApiRepository;

class EnquiryController extends Controller
{
	/**
     * The api repository instance.
     *
     * @var ApiRepository
     */
    protected $apirepo;

    /**
     * Create a new controller instance.
     *
     * @param  ApiRepository  $apirepo
     * @return void
     */
	public function __construct(ApiRepository $apirepo)
	{
		$this->middleware('auth');
		$this->apirepo = $apirepo;
	}

	/**
 	* Display a list of all of the user's task.
 	*
 	* @param  Request  $request
 	* @return Response
 	*/
	public function index(Request $request)
	{
    	return view('enquiry.index',[
    		'services' => $this->apirepo->getServices(),
    	]);
	}

	/**
	 * Create a new Enquiry.
	 *
	 * @param  Request  $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$rules = array(
            'user_id'       => 'required|numeric',
            'services'      => 'required|numeric',
            'subjectarea' => 'required|numeric'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/ncf')
                ->withErrors($validator)
                ->withInput();
        } else {
            // store
            $enquiry = new Enquiry;
            $enquiry->userid()->user_id = $request->user_id;
            $enquiry->service_id = $request->services;
            $enquiry->sa_id = $request->subjectarea;
            $enquiry->save();

            // redirect
            return redirect('/ncf');
        }
	}
}
