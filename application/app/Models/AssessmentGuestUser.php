<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentGuestUser extends Model
{
    use HasFactory;

    protected $guarded = [];  
    public function guestuser()
    {
        return $this->hasOne(GuestUser::class, 'id', 'guest_user_id');
    }

    public function assessment()
    {
        return $this->hasOne(Assessment::class, 'id', 'assessment_id');
    }
}
