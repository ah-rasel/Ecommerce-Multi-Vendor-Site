<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('address_id')->references('id')->on('delivery_addresses');
            $table->foreignId('number_id')->references('id')->on('delivery_numbers');
            $table->foreignId('schedule_id')->references('id')->on('delivery_schedules');
            $table->tinyInteger('status')->default(0);
            $table->string('notes')->nullable();
            $table->timestamp('required_date')->nullable();
            $table->timestamp('completion_date')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
