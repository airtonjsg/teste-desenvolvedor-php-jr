<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderproduct', function (Blueprint $table) {

            $table->unsignedInteger('clients_id');
            $table->foreign('clients_id')->reference('id')->on('clients');
            
            $table->unsignedSmallInteger('products_id');
            $table->foreign('products_id')->reference('id')->on('products');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderproduct');
    }
}
