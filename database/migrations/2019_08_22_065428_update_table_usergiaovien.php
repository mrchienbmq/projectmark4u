<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableUsergiaovien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usergiaovien', function (Blueprint $table) {
            $table->foreign("giaovien_id")->references("giaovien_id")->on("giaovien");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usergiaovien',function (Blueprint $table){
            $table->dropForeign(["giaovien_id"]);

        });
    }
}
