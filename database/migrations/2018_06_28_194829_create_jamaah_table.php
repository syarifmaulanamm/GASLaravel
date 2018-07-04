<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJamaahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jamaah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_code', 10);
            $table->string('pnr', 10);
            $table->integer('type');
            $table->string('package_id', 10);
            $table->string('package_price', 10);
            $table->string('name', 100);
            $table->string('passport_number', 10);
            $table->string('passport_place', 20);
            $table->date('passport_date');
            $table->date('passport_validity');
            $table->string('birth_place', 20);
            $table->date('birth_date');
            $table->string('gender', 20);
            $table->string('citizenship', 10);
            $table->string('fathers_name', 100);
            $table->string('mothers_name', 100);
            $table->string('phone', 20);
            $table->string('email', 100);
            $table->text('address');
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
        Schema::table('jamaah', function (Blueprint $table) {
            Schema::dropIfExists('jamaah');
        });
    }
}
