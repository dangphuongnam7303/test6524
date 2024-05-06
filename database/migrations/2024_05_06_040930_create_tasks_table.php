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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->integer('project_id');//trong project nào
            $table->string('name');
            $table->dateTime('started_at');
            $table->dateTime('ended_at');
            $table->decimal('estimate');
            $table->integer('status_id');// trạng thái
            $table->double('complete');// hoàn thành bao nhiêu %
            $table->integer('implementer_id');// người thực hiện task
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task');
    }
};
