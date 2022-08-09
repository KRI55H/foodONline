<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->unique();
            $table->string('description');
            $table->string('product_img',50);
            $table->string('price',10);
            $table->enum('is_active',[0,1])->comment('0 = inactive, 1 = active')->default(1);
            $table->enum('is_popular',[0,1])->comment('0 = not, 1 = popular')->default(0);
            $table->enum('is_deleted',[0,1])->comment('0 = exist, 1 = not exist')->default(0);
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
        Schema::dropIfExists('product');
    }
}
