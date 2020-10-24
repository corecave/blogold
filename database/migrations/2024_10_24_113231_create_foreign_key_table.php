<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('articles', function (Blueprint $table) {
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->foreignId('parent_id')
                ->constrained('categories')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_key');
    }
}
