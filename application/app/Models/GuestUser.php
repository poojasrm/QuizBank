<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestUser extends Model
{
    use HasFactory;
    protected $guarded = [];  

    public function assessment()
    {

        
        return $this->belongsToMany(Assessment::class, 'assessment_guest_users')->withPivot('marks', 'startdatetime');
        
        
    }

}
