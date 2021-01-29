<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenlightService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penlight_service', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('yogo');
            $table->text('yogo_yomi');
            $table->longText('release_date');
            $table->longText('explanation');
            $table->longText('created_at');
            $table->timestamp('update_at');
            $table->longText('del_flg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
