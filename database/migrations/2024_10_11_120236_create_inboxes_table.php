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
        Schema::create('inboxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prodi_id')->nullable();
            $table->unsignedBigInteger('unit_id');
            $table->unsignedBigInteger('letter_type_id');
            $table->unsignedBigInteger('letter_classification_id')->nullable();
            $table->unsignedBigInteger('faculty_id')->nullable();
            $table->string('type');
            $table->string('name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('address');
            $table->string('date');
            $table->string('number');
            $table->string('attachment');
            $table->string('subject');
            $table->string('file');
            $table->timestamps();

            // Relasi pada tabel
            $table->foreign('prodi_id')->references('id')->on('prodi')->onDelete('cascade');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade');
            $table->foreign('letter_type_id')->references('id')->on('letter_types')->onDelete('cascade');
            $table->foreign('letter_classification_id')->references('id')->on('letter_classifications')->onDelete('cascade');
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inboxes');
    }
};
