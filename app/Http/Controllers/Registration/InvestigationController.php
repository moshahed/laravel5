<?php namespace App\Http\Controllers\Registration;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\RegistrationModel\InvestigationGroup;
use Illuminate\Http\Request;

use App\Http\Requests\Registration\InvestigationRequest;

use App\RegistrationModel\Investigation;

class InvestigationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['investigation_list'] = Investigation::all();

		return view('registration/investigation_registration/investigation_list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data['investigation_group_list'] = InvestigationGroup::lists('group_name','id');
		return view('registration/investigation_registration/investigation_registration_create',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(InvestigationRequest $request)
	{
		return Investigation::create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Investigation $obj)
	{
		$data['investigation_info'] = $obj;
		$data['investigation_group_list'] = InvestigationGroup::lists('group_name','id');

		return view('registration/investigation_registration/investigation_registration_edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Investigation $obj, InvestigationRequest $request)
	{
		$obj->update($request->all());

		return redirect("register-investigation/$obj->id");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
