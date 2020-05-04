<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        "dept_no",
        "dept_name"
    ];

    public $timestamps = false;

    public function employees() {
        return $this->belongsToMany(Employee::class);
    }

    public function dept_emps() {
        return $this->hasMany(Dept_emp::class);
    }

    public function dept_managers() {
        return $this->hasMany(Dept_manager::class);
    }
}
