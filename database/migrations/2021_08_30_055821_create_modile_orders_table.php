<?php

use Illuminate\Auth\Events\Failed;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModileOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modile_orders', function (Blueprint $table) {
            $table->id();
            $table->string('number')->uniqid();
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('billing_firstname');
            $table->string('billing_lastname');
            $table->string('billing_email');
            $table->string('billing_number');
            $table->string('billing_cite')  ;   
            $table->string('billing_postalode');
            $table->string('shapping_firstname');
            $table->string('shapping_lastname');
            $table->string('shapping_email');
            $table->string('shapping_number');
            $table->string('shapping_cite')  ;   
            $table->string('shapping_postalcode');

            $table->unsignedFloat('tax')->default(0);
            $table->unsignedFloat('discount')->default(0);
            $table->unsignedFloat('total')->default(0);

            $table->enum('status',['pending','processing','cancelled','shipped','delivered']);
            $table->enum('payment_status',['pending','paid','Failed']);
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
        Schema::dropIfExists('modile_orders');
    }
}
