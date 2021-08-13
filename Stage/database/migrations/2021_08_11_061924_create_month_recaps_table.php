<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthRecapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('month_recaps', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->double('revenue');
            $table->double('cost');
            $table->double('profit');
            $table->double('completions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('month_recaps');
    }
}
