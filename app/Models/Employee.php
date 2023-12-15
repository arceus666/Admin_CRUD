<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $primaryKey = 'employee_id';
    public $timestamps = false;

    protected $fillable = [
        'emp_user_name'
    ];
    public function leaves() {
        return $this->hasMany(Leave::class, 'employee_id', 'employee_id');
    }

}
