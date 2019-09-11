<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableLophoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lophoc', function (Blueprint $table) {
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
        Schema::table('lophoc', function (Blueprint $table) {
            $table->dropForeign(["giaovien_id"]);
        });
    }
}
