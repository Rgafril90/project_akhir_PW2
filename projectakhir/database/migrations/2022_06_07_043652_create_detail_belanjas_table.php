<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_belanjas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('belanja_id') -> constrained()->onDelete('restrict') -> onUpdate('restrict');
            $table->foreignId('roti_id') -> constrained()->onDelete('restrict') -> onUpdate('restrict');
            $table->string('jumlah');
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
        Schema::dropIfExists('detail_belanjas');
    }
};
