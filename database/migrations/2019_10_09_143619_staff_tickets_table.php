<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StaffTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stafftickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ticket_id');
            $table->bigInteger('staff_id');
            $table->tinyInteger('categories')->default(0);
            $table->text('comment');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('stafftickets');
    }
}
