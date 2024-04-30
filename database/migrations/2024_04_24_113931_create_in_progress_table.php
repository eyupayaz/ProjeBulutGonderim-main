<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('in_progress', function (Blueprint $table) {
            $table->id();
            $table->string('user_name', 60);
            $table->string('work_name', 60);
            $table->integer('time');
			$table->boolean('status')->default(0);
            // $table->timestamps(); // Bu satırı kaldırın veya yorum satırı haline getirin
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('in_progress');
    }
}
