<?php namespace AramLoosman\Foodcoop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAramloosmanFoodcoopOrders extends Migration
{
    public function up()
    {
        Schema::table('aramloosman_foodcoop_orders', function($table)
        {
            $table->decimal('total', 10, 2)->nullable();
            $table->string('status', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('aramloosman_foodcoop_orders', function($table)
        {
            $table->dropColumn('total');
            $table->string('status', 255)->nullable(false)->change();
        });
    }
}
