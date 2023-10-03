<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $primaryKey="event_id";

    protected $fillable = [
        'date',
        'location',
        'org_id',
    ];

    public function org(){
        return $this->belongsTo("App\Models\Organisator");
    }
}
