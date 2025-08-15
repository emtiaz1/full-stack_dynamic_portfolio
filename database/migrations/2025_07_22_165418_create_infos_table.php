<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('infos', function (Blueprint $table) {
        $table->id();
                $table->unsignedBigInteger('user_id');
        $table->string('portfolio')->nullable();
        $table->string('address')->nullable();
        $table->text('description')->nullable();
        $table->string('designation')->nullable();
        $table->timestamps();
    });
        Schema::table('infos', function (Blueprint $table){
        $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
