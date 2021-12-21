<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeeBeanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffeeBeanTable', function (Blueprint $table) {
            $table->integer('id');
            $table->string('Name', 30);
            $table->enum('Caffeine_Level', ['decaf', 'low', 'medium', 'high'])->nullable();
            $table->double('Cost/lb');
            $table->string('Bean_Type');
            $table->enum('Roast', ['dark', 'medium', 'light', 'french']);
            $table->enum('Grind', ['whole-bean', 'fine', 'medium', 'coarse'])->nullable();
            $table->text('Country_of_Origin', 50);
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
        Schema::dropIfExists('coffee_bean');
    }
}
