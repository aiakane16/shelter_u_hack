<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('po_id')->nullable();
            $table->string('no')->nullable();
            $table->integer('invoice_id')->nullable();
            $table->date('date_ordered')->nullable();
            $table->integer('top')->nullable();
            $table->date('warranty')->nullable();
            $table->date('date_needed')->nullable();
            $table->text('delivery_address')->nullable();
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
        Schema::dropIfExists('purchase_orders');
    }
}
