<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeterrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meterrequests', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->string('phone_number_one');
            $table->string('phone_number_two');
            $table->string('email');
            $table->string('residential_address');
            $table->string('ghana_post_gps');
            $table->string('address_Post_Office');
            $table->string('national_id');
            $table->string('meter_type');
            $table->string('ghanacard_copy');
            $table->string('buildingpermit_copy');
            $table->string('energycommission_copy');
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
        Schema::dropIfExists('meterrequests');
    }
}
