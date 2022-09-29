<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siteinfos', function (Blueprint $table) {
            $table->id();
            $table->json('office');/// tow office first('mainOffice' => place : value , map : value, ,'SectionOffice' => place :vlaue , map :value)
            $table->json('office_ar');/// tow office first('mainOffice' => place : value , map : value, ,'SectionOffice' => place :vlaue , map :value)
            $table->string('phone');
            $table->string('fax');
            $table->string('email');
            $table->json('links');  /// linksValueFor(facebook ,instagram , youtube )
            $table->longText('about_us');
            $table->longText('about_us_ar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siteinfos');
    }
};
