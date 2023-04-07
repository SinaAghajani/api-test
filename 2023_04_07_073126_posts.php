<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
        $table->increments('id');
        $table->string('title')->unique();
        $table->string('category')->nullable();
        $table->string('author');
        $table->string('cover');
        $table->longText('content');
        $table->text('caption');
        $table->text('keywords');
        $table->boolean('isCommentOn')->default(true);
        $table->timestamp('created_at')->useCurrent();
        $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
    });
    }
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
