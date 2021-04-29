<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIconeToServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('url_fontawesome')->nullable() ;
            $table->string('service_slug')->nullable()->unique() ;
            $table->string('subtitle') ;
            $table->string('image')->nullable() ;
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn('url_fontawesome');
            $table->dropColumn('service_slug');
            $table->dropColumn('subtitle');
            $table->dropColumn('image');
            $table->dropForeign('services_tag_id_foreign');
            $table->dropColumn('tag_id');
        });
    }
}
