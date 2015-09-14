<?php namespace App\Http\Controllers\Registration;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\RegistrationModel\PatientRegistration;

use App\Http\Requests\Registration\PatientRegistrationRequest;

use App\CompanyInfo;

use Illuminate\Support\Facades\Redirect;

use App\RegistrationModel\BloodGroup;


class RegisterPatientController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$data['patient_list'] = PatientRegistration::all();

		return view('registration/patient_registration/patient_list',$data);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data['blood_group'] = BloodGroup::lists('group_name','id');

		$data['gender'] = [ 'Male' => 'Male', 'Female' => 'Female'];

		return view('registration/patient_registration/patient_registration_create',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PatientRegistrationRequest $request)
	{

		return PatientRegistration::create($request->all());

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(PatientRegistration $obj)
	{
		$data['patient_info'] = $obj;
		$data['company_info'] = CompanyInfo::find(1);

		return view('registration/patient_registration/patient_registration_card',$data);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(PatientRegistration $obj)
	{
		$data['patient_info'] = $obj;
		$data['blood_group'] = BloodGroup::lists('group_name','id');

		return view('registration/patient_registration/patient_registration_edit',$data);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(PatientRegistration $obj, PatientRegistrationRequest $request)
	{

		$obj->update($request->all());

		return redirect("register-patient/$obj->id");

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(PatientRegistration $obj)
	{
		//
	}


}
