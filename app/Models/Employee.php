<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'department_id',
        'name',
        'phone',
        'designation',
        'salary',
        'date',
        'gender',
        'image',
        'address',
    ];
    public function Department()
    {
     return $this->belongsTo(Department::class, 'department_id', 'id');
    }
}
