<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableLophoclkgiaovien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lophoc', function (Blueprint $table) {
            $table->foreign("lop_id")->references("lop_id")->on("lop");
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
