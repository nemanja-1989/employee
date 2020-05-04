<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titles', function (Blueprint $table) {
            $table->bigInteger("emp_no")->unsigned();
            $table->foreign("emp_no")->references("emp_no")->on("employees")->onDelete("cascade")->onUpdate("cascade");
            $table->string("title", "50");
            $table->date("from_date");
            $table->date("to_date")->nullable();
            $table->primary(["emp_no", "title", "from_date"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('titles');
    }
}
