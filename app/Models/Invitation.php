<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $primaryKey="invitation_id";

    protected $fillable = [
        'appeared',
        'event_id',
        'user_id',
    ];

    public function event(){
        return $this->belongsTo("App\Models\Event");   
    }

    public function user(){
        return $this->belongsTo("App\Models\User");   
    }
}
