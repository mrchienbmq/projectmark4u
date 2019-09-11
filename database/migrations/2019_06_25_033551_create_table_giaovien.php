<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGiaovien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("giaovien", function (Blueprint $table) {
            $table->bigIncrements("giaovien_id");
            $table->string("magv")->unique();
            $table->string("tengv");
            $table->string("hogv");
            $table->boolean("gioitinh");
            $table->string("hocvi");
            $table->unsignedBigInteger("lop_id");
            $table->unsignedTinyInteger("active")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("giaovien");
    }
}
