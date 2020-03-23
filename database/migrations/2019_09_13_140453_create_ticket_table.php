<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user');
            $table->string('name_th');
            $table->string('last_th');
            $table->string('name_en');
            $table->string('last_en');
            $table->string('division');
            $table->string('phone');
            $table->string('subject');
            $table->tinyInteger('type')->default(0);
            $table->text('trouble');
            $table->string('staff')->nullable();
            $table->string('ticket_status');
            $table->boolean('isclose')->default(false);
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
        Schema::dropIfExists('tickets');
    }
}
