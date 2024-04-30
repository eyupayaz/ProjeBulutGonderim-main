<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIslerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isler', function (Blueprint $table) {
            $table->bigIncrements('calisan_id'); // Otomatik artan big integer primary key sütunu
            $table->string('user_name', 60);
            $table->string('backlog', 60);
            $table->string('todo', 60);
            $table->string('InProgress', 60);
            $table->string('Done', 60);
            $table->integer('time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('isler');
    }
}
