<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYorumsTable extends Migration{
    public function up(){
        Schema::create('yorums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("email");
            $table->string("yorum", 300);
            $table->unsignedBigInteger("yazi_id");
            $table->foreign('yazi_id')->references('id')->on('yazis')->onDelete('cascade');
            $table->boolean("onay")->default(false); //1->onaylanmış, 0->onaylanmamış
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('yorums');
    }
}
