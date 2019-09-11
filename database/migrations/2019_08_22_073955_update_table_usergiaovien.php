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
            $table->unsignedBigInteger('role')->nullable()->after("giaovien_id");
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
            $table->dropColumn(["role"]);
        });
    }
}
