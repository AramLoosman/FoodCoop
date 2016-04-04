<?php namespace AramLoosman\Foodcoop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAramloosmanFoodcoopProducts3 extends Migration
{
    public function up()
    {
        Schema::table('aramloosman_foodcoop_products', function($table)
        {
            $table->integer('sort_order')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('aramloosman_foodcoop_products', function($table)
        {
            $table->integer('sort_order')->nullable(false)->change();
        });
    }
}
