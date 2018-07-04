<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentConfirmationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_confirmation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jamaah_pnr', 10);
            $table->string('user_code', 10);
            $table->string('nominal', 20);
            $table->string('type', 20);
            $table->string('remarks', 100);
            $table->string('from_bank_account_number', 100);
            $table->string('from_bank_account_name', 100);
            $table->string('from_bank_name', 100);
            $table->string('to_bank_account', 100);
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
        Schema::table('payment_confirmation', function (Blueprint $table) {
            Schema::dropIfExists('payment_confirmation');
        });
    }
}
