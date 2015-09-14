<?php namespace App\RegistrationModel;

use Illuminate\Database\Eloquent\Model;

class Investigation extends Model {

	protected $table = "investigations";

    protected $fillable = ['name','group_id','amount','rf_amount','heading_name'];


    public function InvestigationGroup(){
        return $this->belongsTo('App\RegistrationModel\InvestigationGroup','group_id');
    }

}/* end class */
