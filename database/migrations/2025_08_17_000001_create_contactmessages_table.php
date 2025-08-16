<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('contactmessages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mail');
            $table->string('subj')->nullable();
            $table->text('message');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('contactmessages');
    }
};
