<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('firt_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('afm',9);
            $table->enum('status', ['pending', 'approved','diclined']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete("cascade");
            $table->foreign('fee_id')->references('id')->on('fees')->onDelete("cascade");
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
        Schema::dropIfExists('requests');
    }
}
