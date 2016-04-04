<?php namespace AramLoosman\Foodcoop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAramloosmanFoodcoopOrders2 extends Migration
{
    public function up()
    {
        Schema::table('aramloosman_foodcoop_orders', function($table)
        {
            $table->integer('collective_order_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('aramloosman_foodcoop_orders', function($table)
        {
            $table->dropColumn('collective_order_id');
        });
    }
}
