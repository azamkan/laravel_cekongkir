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
    public function up(): void
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }
    // public function up()
    // {
    //     //if (!Schema::hasTable('provinces')) {
    //         Schema::create('provinces', function (Blueprint $table) {
    //             $table->id();
    //             $table->bigInteger('code')->unsigned();
    //             $table->string('title');
    //             $table->timestamps();
    //         });
    //     //}
        
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
};