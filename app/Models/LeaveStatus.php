<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveStatus extends Model
{
    use HasFactory;
    protected $table = 'leave-status';
    protected $primaryKey = 'leave_status_id';
    public $timestamps = false;

    protected $fillable = [
        'leave_status'
    ];
}
