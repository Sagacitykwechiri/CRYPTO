<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->enum('type', ['deposit', 'withdrawal', 'referral']);
            $table->timestamps();
        });
        

        Schema::table('users', function (Blueprint $table) {
            $table->decimal('earnings_balance', 10, 2)->default(0);
            $table->decimal('total_deposit', 10, 2)->default(0);
            $table->decimal('total_withdrawal', 10, 2)->default(0);
            $table->decimal('referral_earnings', 10, 2)->default(0);
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
