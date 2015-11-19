<?php

namespace App;

use App\User;
use App\Service;
use App\SubjectArea;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
	protected $table = 'enquiry';
	 /**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
    protected $fillable = ['user_id','sa_id','service_id'];
	/**
     * Defining Relationship to Service Table
     */
    public function service()
    {
        return $this->belongsTo(Service::class,'service_id');
    }

    /**
     * Defining Relationship to Subject Area Table
     */
    public function subjectarea()
    {
        return $this->belongsTo(SubjectArea::class,'sa_id');
    }

    /**
     * Defining Relationship to Subject Area Table.
     */
    public function userid()
    {
        return $this->belongsTo(User::class,'user_id');
    }

}
