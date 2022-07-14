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
        Schema::create('enterprises', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable()->unique();
            $table->text('description')->nullable();
            $table->string('type')->nullable();
            $table->string('email')->unique();
            $table->string('address')->nullable();

            //--------Creation of hte foreignKey
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreignId('user_id')
                ->constrained()
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enterprises');
    }
};
