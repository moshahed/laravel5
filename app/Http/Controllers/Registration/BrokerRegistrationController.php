<?php namespace App\Http\Controllers\Registration;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests\Registration\BrokerRegistrationRequest;
use App\RegistrationModel\Brokers;
use App\CompanyInfo;

class BrokerRegistrationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['broker_list'] = Brokers::all();

		return view('registration/broker_registration/broker_list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('registration/broker_registration/broker_registration_create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(BrokerRegistrationRequest $request)
	{
		return Brokers::create($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Brokers $obj)
	{
		$data['list'] = $obj;
		$data['company_info'] = CompanyInfo::find(1);

		return view('registration/broker_registration/broker_registration_card',$data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Brokers $obj)
	{
		$data['broker_info'] = $obj;

		return view('registration/broker_registration/broker_registration_edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Brokers $obj, BrokerRegistrationRequest $request)
	{
		$obj->update($request->all());

		return redirect("register-broker/$obj->id");
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
