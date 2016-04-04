<?php namespace AramLoosman\Foodcoop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAramloosmanFoodcoopProducts4 extends Migration
{
    public function up()
    {
        Schema::table('aramloosman_foodcoop_products', function($table)
        {
            $table->integer('vendor_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('aramloosman_foodcoop_products', function($table)
        {
            $table->dropColumn('vendor_id');
        });
    }
}
