<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIdToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->after('slug');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null'); //prima opzione per fare in modo che se elimino una categoria cui è legato un post, esso continui ad esistere e deve essere vuoto. Con cascade si cancellano tutti i post legati alla cateogira, a cascata. Se uso set null questa cateogoria verrà settata come null
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign('posts_category_id_foreign');
            $table->dropColumn('category_id');
        });
    }
}
