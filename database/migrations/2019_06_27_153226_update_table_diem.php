<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableDiem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('diem', function (Blueprint $table) {
            $table->foreign("sinhvien_id")->references("sinhvien_id")->on("sinhvien");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diem',function (Blueprint $table){
            $table ->dropForeign(["sinhvien_id"]);
        });
    }
}
