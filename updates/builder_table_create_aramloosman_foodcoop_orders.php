<?php namespace AramLoosman\Foodcoop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAramloosmanFoodcoopOrders extends Migration
{
    public function up()
    {
        Schema::create('aramloosman_foodcoop_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->string('status', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aramloosman_foodcoop_orders');
    }
}
