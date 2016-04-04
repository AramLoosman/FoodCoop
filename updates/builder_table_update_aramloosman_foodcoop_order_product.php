<?php namespace AramLoosman\Foodcoop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAramloosmanFoodcoopOrderProduct extends Migration
{
    public function up()
    {
        Schema::rename('aramloosman_foodcoop_order_products', 'aramloosman_foodcoop_order_product');
        Schema::table('aramloosman_foodcoop_order_product', function($table)
        {
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('total', 10, 2)->nullable();
        });
    }
    
    public function down()
    {
        Schema::rename('aramloosman_foodcoop_order_product', 'aramloosman_foodcoop_order_products');
        Schema::table('aramloosman_foodcoop_order_products', function($table)
        {
            $table->dropColumn('price');
            $table->dropColumn('total');
        });
    }
}
