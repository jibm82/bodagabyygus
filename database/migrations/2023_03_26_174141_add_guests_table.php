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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('second_last_name');
            $table->integer('people');
            $table->string('country_code')->nullable(true);
            $table->string('phone')->nullable(true);
            $table->string('category');
            $table->boolean('foreigner')->default(false);
            $table->boolean('icebreaker')->nullable(true);
            $table->boolean('is_attending')->nullable(true);
            $table->boolean('after_wedding')->nullable(true);
            $table->text('message')->nullable(true);
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
        Schema::drop('guests');
    }
};
