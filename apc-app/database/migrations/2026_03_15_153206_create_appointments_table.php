<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {

            $table->id();

            $table->string('reference')->unique();
            $table->string('aanvraag_type')->default('afspraak');

            $table->string('naam');
            $table->string('email');
            $table->string('telefoon')->nullable();

            $table->string('kenteken')->nullable();
            $table->string('merk')->nullable();
            $table->string('model')->nullable();
            $table->string('voertuigsoort')->nullable();
            $table->string('rdw_label')->nullable();

            $table->string('pakket')->nullable();
            $table->text('extras')->nullable();
            $table->text('bericht')->nullable();
            $table->string('vervuiling')->nullable();

            $table->date('afspraak_datum')->nullable();
            $table->string('afspraak_tijd')->nullable();

            $table->decimal('deposit_amount', 10, 2)->default(50);
            $table->string('currency')->default('EUR');

            $table->string('payment_id')->nullable();
            $table->string('payment_status')->default('open');
            $table->string('appointment_status')->default('pending_payment');

            $table->timestamp('paid_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};