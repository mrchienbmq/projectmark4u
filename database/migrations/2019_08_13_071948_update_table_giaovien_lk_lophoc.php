<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableGiaovienLkLophoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('giaovien', function (Blueprint $table) {
            $table->foreign("lophoc_id")->references("lophoc_id")->on("lophoc");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('giaovien',function (Blueprint $table){
            $table->dropForeign(["lophoc_id"]);
        });
    }
}
