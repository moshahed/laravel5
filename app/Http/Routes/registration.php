<?php

Route::resource('register-patient', 'RegisterPatientController');

Route::resource('register-doctor', 'DoctorRegistrationController');

Route::resource('register-broker', 'BrokerRegistrationController');

Route::resource('register-investigation-group', 'InvestigationGroupController');

Route::resource('register-investigation', 'InvestigationController');


