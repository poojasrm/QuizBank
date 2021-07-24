<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $guarded = [];  
    
    public function questions()
    {

        return $this->belongsToMany(Question::class);
        
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    
}
