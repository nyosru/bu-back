<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good_photos', function (Blueprint $table) {
            $table->id();

            $table->string('img')
                ->comment('ссылка на фотку');

            $table->integer('good_id')
                // ->nullable()
                ->comment('товар');
            $table->enum('show', ['on', 'off'])
                ->default('on')
                ->comment('видим невидим');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('good_photos');
    }
}
