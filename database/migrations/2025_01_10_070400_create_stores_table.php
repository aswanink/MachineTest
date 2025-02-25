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
        Schema::create('stores', function (Blueprint $table) {
      
            $table->id();
            $table->string('name');
            $table->decimal('latitude', 10, 7)->nullable();;
            $table->decimal('longitude', 10, 7)->nullable();;
            $table->string('address')->nullable();
          
            $table->timestamps();
            $table->index(['latitude', 'longitude']);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
};
