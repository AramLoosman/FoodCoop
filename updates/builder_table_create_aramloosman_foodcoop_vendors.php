<?php namespace AramLoosman\Foodcoop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAramloosmanFoodcoopVendors extends Migration
{
    public function up()
    {
        Schema::create('aramloosman_foodcoop_vendors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255)->nullable();
            $table->text('adress')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aramloosman_foodcoop_vendors');
    }
}
