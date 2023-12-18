<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeType extends Model
{
    use HasFactory;
    protected $table = 'employee_type';
    protected $primaryKey = 'employee_type_id';
    public $timestamps = false;

    protected $fillable = [
        'emp_type_id'
    ];
}
