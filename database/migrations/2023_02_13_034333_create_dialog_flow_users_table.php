<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDialogFlowUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dialog_flow_users', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('address'); 
            $table->string('propertyType');
            $table->string('propertySituation');
            $table->string('solarSituation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dialog_flow_users');
    }
}
