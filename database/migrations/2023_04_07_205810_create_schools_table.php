<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('summary');
            $table->longText('description');
            $table->string('photo');
            $table->integer('number_click')->default(0);
            $table->enum('condition', ['top school', 'top choice', 'best school', 'new'])->default('new');
            $table->boolean('is_featured')->default(0)->nullable();
            $table->unsignedBigInteger('tag_id');

            $table->foreign('tag_id')->references('id')->on('school_tags')->onDelete('cascade');
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
        Schema::dropIfExists('schools');
    }
}
