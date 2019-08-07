<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSinhvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("sinhvien", function (Blueprint $table) {
            $table->bigIncrements("sinhvien_id");
            $table->string("masv")->unique();
            $table->string("ten");
            $table->string("ho");
            $table->boolean("gioitinh");
            $table->string("diachi");
            $table->string("email");
            $table->date("ngaysinh");
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
        Schema::dropIfExists('sinhvien');
    }
}
