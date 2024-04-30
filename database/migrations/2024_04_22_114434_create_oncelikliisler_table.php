<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOncelikliislerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oncelikliisler', function (Blueprint $table) {
            $table->bigIncrements('is_id'); // Otomatik artan big integer primary key sütunu
            $table->string('user_mail', 60);
            $table->string('work_name', 60);
            $table->integer('siralama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oncelikliisler');
    }
}
