<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePostsTable
 */
class CreatePostsTable extends Migration {

    protected $tableName = 'cms_posts';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            $this->tableName,
            function ($table) {
                $table
                    ->increments('id');
                $table
                    ->integer('parent_id')
                    ->unsigned();
                $table
                    ->string('headline');
                $table
                    ->text('teaser');
                $table
                    ->text('body');
                $table
                    ->string('slug');
                $table
                    ->string('meta_title');
                $table
                    ->string('meta_description');
                $table
                    ->string('meta_keywords');
                $table
                    ->integer('revision')
                    ->unsigned()
                    ->default('0');
                $table
                    ->timestamp('published_at')
                    ->nullable();
                $table
                    ->timestamps();

            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }

}
