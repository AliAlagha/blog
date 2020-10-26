<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('officeCode');
            $table->integer('reportsTo');
            $table->string('lastName');
            $table->string('firstName');
            $table->string('extension');
            $table->string('email');
            $table->string('jobTitle',100);
            $table->timestamps();

            $table->foreign('officeCode')->references('code')
                ->on('offices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
