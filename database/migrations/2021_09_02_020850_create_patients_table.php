<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');

            $table->string('document', 20);
            $table->string('name', 90);
            $table->string('last_name', 90);
            $table->string('gender', 30);
            $table->date('born_date');
            $table->string('eps', 50);
            $table->string('address', 70);
            $table->string('phone');
            $table->string('email', 70);
            $table->string('city', 50);
            $table->string('kinship', 50)->nullable();
            $table->integer('status')->default(1);

            $table->unsignedInteger('doctor_id')->nullable();
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');

            $table->unsignedInteger('nurse_id')->nullable();
            $table->foreign('nurse_id')->references('id')->on('nurses')->onDelete('cascade');

            $table->unsignedInteger('medical_history_id')->nullable();
            $table->foreign('medical_history_id')->references('id')->on('medical_histories')->onDelete('cascade');

            $table->unsignedInteger('diagnostic_id')->nullable();
            $table->foreign('diagnostic_id')->references('id')->on('diagnostics')->onDelete('cascade');

            $table->unsignedInteger('relative_id')->nullable();
            $table->foreign('relative_id')->references('id')->on('relatives')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
