<?php namespace AramLoosman\Foodcoop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAramloosmanFoodcoopProducts extends Migration
{
    public function up()
    {
        Schema::create('aramloosman_foodcoop_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->text('description')->nullable();
            $table->string('unit')->nullable();
            $table->decimal('price', 10, 0)->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aramloosman_foodcoop_products');
    }
}
