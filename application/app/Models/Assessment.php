<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    public function quiz()
    {        
        return $this->hasOne(Quiz::class, 'id', 'quizzes_id');
    }

    public function guestuser()
    {

        return $this->belongsToMany(GuestUser::class,'assessment_guest_users')->withPivot('marks','startdatetime');
        
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
