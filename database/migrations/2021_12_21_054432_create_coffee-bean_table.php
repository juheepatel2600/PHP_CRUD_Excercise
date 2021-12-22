<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeeBeanTable extends Migration
{

    public function up()
    {
        Schema::create('coffeeBeanTable', function (Blueprint $table) {
            $table->id('id');
            $table->string('Name', 30);
            $table->enum('Caffeine_Level', ['decaf', 'low', 'medium', 'high']);
            $table->double('Cost_lb')->default(0.0);
            $table->string('Bean_Type', ['Arabica', 'Robusta', 'Liberca', 'Excelsa', 'Other']);
            $table->enum('Roast', ['dark', 'medium', 'light', 'french']);
            $table->enum('Grind', ['whole-bean', 'fine', 'medium', 'coarse']);
            $table->text('Country_of_Origin', 50);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coffee_bean');
    }
}
