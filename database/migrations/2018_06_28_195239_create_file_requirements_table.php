<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_requirements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jamaah_pnr', 10)->unique();
            $table->text('passport');
            $table->text('ktp');
            $table->text('kk');
            $table->integer('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('file_requirements', function (Blueprint $table) {
            Schema::dropIfExists('file_requirements');
        });
    }
}
