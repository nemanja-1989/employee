<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->bigInteger("emp_no")->unsigned();
            $table->foreign("emp_no")->references("emp_no")->on("employees")->onDelete("cascade")->onUpdate("cascade");
            $table->integer("salary")->unsigned();
            $table->date("from_date");
            $table->date("to_date");
            $table->primary(["emp_no", "from_date"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}
