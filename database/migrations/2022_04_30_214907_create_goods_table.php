<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('name')
                ->comment('название');
            $table->integer('catalog_id')
                // ->nullable()
                ->comment('каталог');
            $table->integer('user_id')
                // ->nullable()
                ->comment('пользователь');
            $table->enum('type', ['buy', 'sell', 'rent', 'need_rent'])
                // ->default('on')
                ->comment('тип сделки, что автор хочет');
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
        Schema::dropIfExists('goods');
    }
}
