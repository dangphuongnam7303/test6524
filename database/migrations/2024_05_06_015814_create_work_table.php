<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('work', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->time('start');
            $table->time('end');
            $table->foreignId('project_id')->constrained('project');
            $table->string('person_in_charge');
            $table->time('expected');
            $table->boolean('status');
            $table->double('complete');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('work');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
};
