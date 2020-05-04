<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $fillable = [
        "emp_no",
        "salary",
        "from_date",
        "to_date"
    ];

    public $timestamps = false;

    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
