<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{

    protected $fillable = [
        "birth_date",
        "first_name",
        "last_name",
        "gender",
        "hire_date"
    ];

    public $timestamps = false;

    public function salaries() {
        return $this->hasMany(Salary::class);
    }

    public function titles() {
        return $this->hasMany(Title::class);
    }

    public function dept_emps() {
        return $this->hasMany(Dept_emp::class);
    }

    public function dept_managers() {
        return $this->hasMany(Dept_manager::class);
    }

    public function departments() {
        return $this->belongsToMany(Department::class);
    }
}
