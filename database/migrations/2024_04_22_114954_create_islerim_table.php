<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIslerimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('islerim', function (Blueprint $table) {
            $table->bigIncrements('is_id'); // Otomatik artan big integer primary key sütunu
            $table->string('user_name', 60);
            $table->string('is_name', 60);
            $table->date('is_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('islerim');
    }
}
