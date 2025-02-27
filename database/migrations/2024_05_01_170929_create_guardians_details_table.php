<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guardians_details', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('fullname');
            $table->string('address');
            $table->string('phone');
            $table->string('teacher_id');
            $table->string('created_by');
            $table->string('edited_by');
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
        Schema::dropIfExists('guardians_details');
    }
};
