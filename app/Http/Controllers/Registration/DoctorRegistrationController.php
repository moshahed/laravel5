<?php namespace App\Http\Controllers\Registration;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\RegistrationModel\BloodGroup;

use App\Http\Requests\Registration\DoctorRegistrationRequest;

use App\RegistrationModel\Doctors;

class DoctorRegistrationController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['doctor_list'] = Doctors::all();

		return view('registration/doctor_registration/doctor_list',$data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		$data['title'] = [ 'Dr.' => 'Dr.', 'Prof.' => 'Prof.'];
		$data['chamber'] = [ 'No' => 'No', 'Yes' => 'Yes'];

		$data['gender'] = [ 'Male' => 'Male', 'Female' => 'Female'];

		return view('registration/doctor_registration/doctor_registration_create',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(DoctorRegistrationRequest $request)
	{
		return Doctors::create($request->all());
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
	public function edit(Doctors $obj)
	{
		$data['doctor_info'] = $obj;
		$data['title'] = [ 'Dr.' => 'Dr.', 'Prof.' => 'Prof.'];
		$data['chamber'] = [ 'No' => 'No', 'Yes' => 'Yes'];

		$data['gender'] = [ 'Male' => 'Male', 'Female' => 'Female'];

		return view('registration/doctor_registration/doctor_registration_edit',$data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Doctors $obj, DoctorRegistrationRequest $request)
	{
		$obj->update($request->all());

		return redirect("register-doctor/$obj->id");
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
