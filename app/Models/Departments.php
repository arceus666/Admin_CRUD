<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    use HasFactory;
    protected $table = 'department-employee';
    protected $primaryKey = 'dep_emp_id';
    public $timestamps = false;

    protected $fillable = [
        'dep_emp_id'
    ];
}
