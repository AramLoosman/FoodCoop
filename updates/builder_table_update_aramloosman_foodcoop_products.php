<?php namespace AramLoosman\Foodcoop\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAramloosmanFoodcoopProducts extends Migration
{
    public function up()
    {
        Schema::table('aramloosman_foodcoop_products', function($table)
        {
            $table->decimal('price', 10, 2)->change();
        });
    }
    
    public function down()
    {
        Schema::table('aramloosman_foodcoop_products', function($table)
        {
            $table->decimal('price', 10, 0)->change();
        });
    }
}
