<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function enquiry() {
        return $this->hasMany(Enquiry::class,'service_id','id'); // this matches the Eloquent model
    }
}
