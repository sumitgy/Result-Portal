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
        Schema::create('userresult', function (Blueprint $table) {
            $table->id();
            $table->integer('faculty_id');
            $table->string('name');
            $table->string('father_name');
            $table->string('college_name');
            $table->string('medium');
            $table->integer('roll_no');
            $table->string('branch');
            $table->integer('year');
            $table->longText('subjects_marks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userresult');
    }
};
