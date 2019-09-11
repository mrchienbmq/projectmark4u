<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableLophocGiaovien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lophoc', function (Blueprint $table) {
            $table->unsignedBigInteger('lop_id')->nullable()->after("title");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lophoc',function (Blueprint $table){
            $table->dropForeign(["lop_id"]);
        });
    }
}
