<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept_manager extends Model
{
    protected $fillable = [
        "emp_no",
        "dept_no",
        "from_date",
        "to_date"
    ];

    public $timestamps = false;

    public function employee() {
        return $this->belongsTo(Employee::class);
    }

    public function department() {
        return $this->belongsTo(Department::class);
    }
}
