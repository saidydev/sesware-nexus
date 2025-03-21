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
        Schema::create('orders', function (Blueprint $table) {
            $table->string('Name',255);
            $table->string('Company',255);
            $table->string('E-mail',255);
            $table->string('Phone',255);
            $table->string('Subject',255);
            $table->string('Budget',255);
            $table->string('Details',255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }

};
