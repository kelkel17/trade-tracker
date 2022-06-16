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
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->date('trade_date')->nullable();
            $table->float('lot_size', 8, 2)->nullable();
            $table->float('commission', 8, 2)->nullable();
            $table->float('entry_price', 8, 5)->nullable();
            $table->float('target_price', 8, 5)->nullable();
            $table->float('actual_price', 8, 5)->nullable();
            $table->float('capital', 8, 2)->nullable();
            $table->float('direction', 8, 2)->nullable();
            $table->time('opening_time', $precision = 0)->nullable();
            $table->time('closing_time', $precision = 0)->nullable();
            $table->boolean('is_normal_trade')->nullable();
            $table->float('target_roi', 8, 2)->nullable();
            $table->float('actual_roi', 8, 2)->nullable();
            $table->float('profit', 8, 2)->nullable();
            $table->float('new_balance', 8, 2)->nullable();
            $table->string('pair');
            $table->string('comments');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->constrained('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trades');
    }
};
