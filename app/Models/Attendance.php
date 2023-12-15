<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $table = 'attendance';
    protected $primaryKey = 'attendance_id';
    public $timestamps = false;

    protected $fillable = [
        'attendance_time_in'
    ];
}
