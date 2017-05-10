<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotifyUserTable extends Migration
{
     public function up()
    {
        Schema::create('notify_user', function (Blueprint $table) {
            $table->increments('id');
            
            $table->timestamps();
        });
    }


    public function down()
    {
          Schema::dropIfExists('notify_user');  
       
    }
}
