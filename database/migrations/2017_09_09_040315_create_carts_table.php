<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id');
        $table->timestamp('created_at')->nullable();
        $table->integer('is_checkout')->nullable(); 
        $table->integer('is_cancelled')->nullable();
        $table->integer('is_abandoned')->nullable();
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
        Schema::dropIfExists('carts');
    }
}
