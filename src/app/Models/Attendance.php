<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'attendance_time',
        'depature_time'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function break()
    {
        return $this->hasMany(Breaktime::class);
    }
}
