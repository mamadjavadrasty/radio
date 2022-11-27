<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radios', function (Blueprint $table) {
            $table->id();
            $table->uuid('change_uuid')->nullable();
            $table->uuid('station_uuid')->nullable();
            $table->uuid('server_uuid')->nullable();
            $table->string('name')->nullable();
            $table->text('url')->nullable();
            $table->text('url_resolved')->nullable();
            $table->text('homepage')->nullable();
            $table->text('favicon')->nullable();
            $table->text('tags')->nullable();
            $table->string('country')->nullable();
            $table->string('country_code')->nullable();
            $table->string('iso_3166_2')->nullable();
            $table->string('state')->nullable();
            $table->string('language')->nullable();
            $table->string('language_codes')->nullable();
            $table->bigInteger('votes')->nullable();
            $table->bigInteger('click_count')->nullable();
            $table->bigInteger('click_trend')->nullable();
            $table->string('codec')->nullable();
            $table->uuid('uuid')->nullable();
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
        Schema::dropIfExists('radios');
    }
}
