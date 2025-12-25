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
        Schema::create('clients_info', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id')->unique();
            $table->string('case_number')->unique();
            $table->string('kad_arbitr_link')->unique();
            $table->tinyInteger('financial_manager_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients_info');
    }
};
