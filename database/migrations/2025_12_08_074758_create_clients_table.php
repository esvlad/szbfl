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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type_id');
            $table->string('name');
            $table->string('last_name');
            $table->string('second_name');
            $table->string('full_name');
            $table->string('phone');
            $table->string('address');
            $table->string('contract')->uniqunique();
            $table->string('case_number')->uniqunique();
            $table->string('kad_arbitr_link')->uniqunique();
            $table->tinyInteger('financial_manager_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
