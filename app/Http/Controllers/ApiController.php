<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ApiRepository;

class ApiController extends Controller
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
 	* Get data based on the search text provided by User.
 	*
 	* @param  Request  $request
 	* @return Response
 	*/
	public function index(Request $request,$method)
	{	
		switch ($method) {
			case 'users':
				$items = $this->apirepo->searchUsers($request->q);
				break;
			case 'services':
				$items = $this->apirepo->searchService($request->q);
				break;
			case 'subjectarea':
				$items = $this->apirepo->searchSubjectArea($request->q);
				break;
		}
		$total = count($items);
		echo json_encode(array("total"=>$total,"items"=>$items,"type"=>$method));
	}
}
