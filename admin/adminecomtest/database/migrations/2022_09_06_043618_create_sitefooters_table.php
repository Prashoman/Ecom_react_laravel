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
        Schema::create('sitefooters', function (Blueprint $table) {
            $table->id();
            $table->text('about',50000);
            $table->text('purchase',50000);
            $table->text('privacy',50000);
            $table->text('refund_grud',50000);
            $table->text('address',50000);

            $table->string('andraid_link');
            $table->string('ios_link');
            $table->string('facebook_link');
            $table->string('instragam_link');
            $table->string('twitter_link');
            $table->string('copy_right');

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
        Schema::dropIfExists('sitefooters');
    }
};
