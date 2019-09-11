<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableGiaovienLophoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('giaovien', function (Blueprint $table) {
            $table->unsignedBigInteger('lophoc_id')->nullable()->after("lop_id");

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
            $table->dropColumn(["lophoc_id"]);
        });
    }
}
