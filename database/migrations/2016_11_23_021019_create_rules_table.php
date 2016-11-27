<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {

            $table->increments('id');

            $table->String('ruleName');

            $table->String('min_sonar');
            $table->String('max_sonar');

            $table->String('min_ir_left');
            $table->String('max_ir_left');

            $table->String('min_ir_right');
            $table->String('max_ir_right');

            $table->String('min_load_cell1');
            $table->String('max_load_cell1');

            $table->String('min_load_cell2');
            $table->String('max_load_cell2');

            $table->String('min_load_cell3');
            $table->String('max_load_cell3');

            $table->String('min_load_cell4');
            $table->String('max_load_cell4');

            $table->String('min_load_cell5');
            $table->String('max_load_cell5');

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
        Schema::dropIfExists('rules');
    }
}
