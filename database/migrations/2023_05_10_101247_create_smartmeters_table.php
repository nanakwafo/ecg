<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartmetersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartmeters', function (Blueprint $table) {
            $table->id();
            $table->string('unique_identifier');
            $table->string('product_name');
            $table->string('service_name');
            $table->string('service_description');
            $table->string('service_category');
            $table->string('relationship');
            $table->string('service_status');
            $table->string('business_process');
            $table->string('serviceowner');
            $table->string('business_owner');
            $table->string('priority');
            $table->string('sla');
            $table->string('contact_no');
            $table->string('address');
            $table->string('email');
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
        Schema::dropIfExists('smartmeters');
    }
}
