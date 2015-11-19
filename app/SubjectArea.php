<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectArea extends Model
{
    public function enquiry() {
        return $this->hasMany(Enquiry::class,'sa_id','id'); // this matches the Eloquent model
    }
}
