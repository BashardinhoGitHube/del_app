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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('start_address');
            $table->string('start_late');
            $table->string('start_longe');
            $table->string('end_address');
            $table->string('end_late');
            $table->string('end_longe');
            $table->string('fee');
            $table->string('car_type');
            $table->string('distance');
            $table->string('status');
            $table->string('provider_id')->nullable();
            $table->string('canceled_at')->nullable();
            $table->string('end_at')->nullable();
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
};
