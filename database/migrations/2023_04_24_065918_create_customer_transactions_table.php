<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('customer_details');
            $table->unsignedBigInteger('transactionable_id');
            $table->string('transactionable_type');
            $table->string('payment')->nullable();
            $table->string('paid')->nullable();
            $table->timestamp('datesold')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('staff_atendee_id')->nullable();

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
        Schema::dropIfExists('customer_transactions');
    }
}
