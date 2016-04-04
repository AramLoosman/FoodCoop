<?php namespace AramLoosman\Foodcoop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAramloosmanFoodcoopOrderProducts extends Migration
{
    public function up()
    {
        Schema::create('aramloosman_foodcoop_order_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->smallInteger('amount');
            $table->primary(['order_id','product_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('aramloosman_foodcoop_order_products');
    }
}
