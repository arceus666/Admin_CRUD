<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;
    protected $table = 'leave';
    protected $primaryKey = 'leave_id';
    public $timestamps = false;

    protected $fillable = [
        'leave_subject'
    ];
    // Leave model
    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }

}
