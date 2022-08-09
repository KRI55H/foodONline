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
            $table->integer('ref_uid')->comment('user id');
            $table->integer('ref_pid')->comment('product id');
            $table->integer('quantity');
            $table->integer('total_amount');
            $table->enum('status',[0,1,2])->comment('0 = in progress, 1 = success, 2 = canceled');
            $table->enum('delivery_type',[0,1])->comment('0 = home delivery, 1 = take away');
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
