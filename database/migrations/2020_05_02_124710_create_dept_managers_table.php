<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeptManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dept_managers', function (Blueprint $table) {
            $table->bigInteger("emp_no")->unsigned();
            $table->foreign("emp_no")->references("emp_no")->on("employees")->onDelete("cascade")->onUpdate("cascade");
            $table->char("dept_no");
            $table->foreign("dept_no")->references("dept_no")->on("departments")->onDelete("cascade")->onUpdate("cascade");
            $table->date("from_date");
            $table->date("to_date");
            $table->primary(["emp_no", "dept_no"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dept_managers');
    }
}
