<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('country', 50);
            $table->string('full_name', 70);
            $table->string('address', 100);
            $table->string('surburb', 50);
            $table->string('city', 30);
            $table->string('province', 50);
            $table->string('postal_code', 20);
            $table->string('phone', 20);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_infos');
    }
}
