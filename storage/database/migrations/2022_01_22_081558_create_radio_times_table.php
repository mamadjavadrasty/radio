<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadioTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radio_times', function (Blueprint $table) {
            $table->id();
            $table->timestamp('last_change_time')->nullable();
            $table->timestamp('last_change_time_iso8601')->nullable();
            $table->bigInteger('bitrate')->nullable();
            $table->bigInteger('hls')->nullable();
            $table->tinyInteger('last_checkok')->nullable();
            $table->timestamp('last_check_time')->nullable();
            $table->timestamp('last_check_time_iso8601')->nullable();
            $table->timestamp('last_checkok_time')->nullable();
            $table->timestamp('last_checkok_time_iso8601')->nullable();
            $table->timestamp('last_local_check_time')->nullable();
            $table->timestamp('last_local_check_time_iso8601')->nullable();
            $table->timestamp('click_timestamp')->nullable();
            $table->timestamp('click_timestamp_iso8601')->nullable();
            $table->tinyInteger('ssl_error')->nullable();
            $table->string('geo_lat')->nullable();
            $table->string('geo_long')->nullable();
            $table->boolean('has_extended_info')->nullable();
            $table->foreignId('radio_id')->constrained('radios')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('radio_times');
    }
}
