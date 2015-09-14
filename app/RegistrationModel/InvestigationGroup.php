<?php namespace App\RegistrationModel;

use Illuminate\Database\Eloquent\Model;

class InvestigationGroup extends Model {

	protected $table = 'investigation_group';

    protected $fillable = ['group_name','heading_name'];


} /* end class */
