<?php namespace AramLoosman\Foodcoop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAramloosmanFoodcoopCollectiveOrder extends Migration
{
    public function up()
    {
        Schema::create('aramloosman_foodcoop_collective_order', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('vendor_id')->unsigned();
            $table->string('title', 255)->nullable();
            $table->dateTime('open_from')->nullable();
            $table->dateTime('open_until')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aramloosman_foodcoop_collective_order');
    }
}
