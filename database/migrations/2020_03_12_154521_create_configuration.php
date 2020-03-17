<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /* landing */
        Schema::create('slider_landings', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->nullable();
            $table->string('title_es');
            $table->string('title_eng')->nullable();
            $table->string('subtitle_es')->nullable();
            $table->string('subtitle_eng')->nullable();
            $table->string('button_es')->nullable();
            $table->string('button_en')->nullable();
            $table->string('button_url')->nullable();
            $table->bigInteger('order')->default(0)->nullable();
            $table->timestamps();
        });

        Schema::create('section_landings', function (Blueprint $table) {
            $table->id();
            $table->string('title_es');
            $table->string('title_eng')->nullable();
            $table->string('subtitle_es');
            $table->string('subtitle_eng')->nullable();
            $table->bigInteger('order')->default(0)->nullable();
            $table->timestamps();
        });
        Schema::create('landing_pictures', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->nullable();
            $table->string('title_es');
            $table->string('title_eng')->nullable();

            $table->bigInteger('order')->default(0)->nullable();
            $table->timestamps();


        });
        /* landing */

        /* genres */
        Schema::create('section_genres', function (Blueprint $table) {
            $table->id();
            $table->string('title_es');
            $table->string('title_eng')->nullable();
            $table->string('subtitle_es');
            $table->string('subtitle_eng')->nullable();
            $table->bigInteger('order')->default(0)->nullable();
            $table->timestamps();
        });
        Schema::create('genres_contents', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->nullable();
            $table->string('title_es');
            $table->string('title_eng')->nullable();
            $table->string('music');

            $table->bigInteger('order')->default(0)->nullable();
            $table->timestamps();


        });

        /* genres */

        /* packages */
        Schema::create('section_packages', function (Blueprint $table) {
            $table->id();
            $table->string('title_es');
            $table->string('title_eng')->nullable();
            $table->string('subtitle_es');
            $table->string('subtitle_eng')->nullable();
            $table->bigInteger('order')->default(0)->nullable();
            $table->timestamps();
        });
        Schema::create('package_contents', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->nullable();
            $table->string('title_es');
            $table->string('title_eng')->nullable();
            $table->double('price', 18,4);
            $table->string('content_es');
            $table->string('content_eng')->nullable();

            $table->bigInteger('order')->default(0)->nullable();
            $table->timestamps();


        });
        /* packages */
        /* events */
        Schema::create('section_events', function (Blueprint $table) {
            $table->id();
            $table->string('title_es');
            $table->string('title_eng')->nullable();
            $table->string('subtitle_es');
            $table->string('subtitle_eng')->nullable();
            $table->bigInteger('order')->default(0)->nullable();
            $table->timestamps();
        });

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title_es');
            $table->string('title_eng')->nullable();

            $table->date('date');
            $table->string('content_es');
            $table->string('content_eng')->nullable();

            $table->string('address');
            $table->timestamps();


        });
        Schema::create('event_pictures', function (Blueprint $table) {
            $table->bigInteger('event_id')->unsigned();
            $table->string('picture')->nullable();


            $table->bigInteger('order')->default(0)->nullable();
            $table->timestamps();

            $table->foreign('event_id')->references('id')->on('events')
                ->onUpdate('cascade')->onDelete('cascade');
        });
        /* events */
        /* about */
        Schema::create('section_abouts', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->nullable();
            $table->string('title_es');
            $table->string('title_eng')->nullable();
            $table->string('subtitle_es')->nullable();
            $table->string('subtitle_eng')->nullable();
            $table->string('content_es')->nullable();
            $table->string('content_eng')->nullable();
            $table->string('music')->nullable();

            $table->timestamps();
        });
        /* about */
        /* albums */
        Schema::create('section_albums', function (Blueprint $table) {
            $table->id();
            $table->string('title_es');
            $table->string('title_eng')->nullable();
            $table->string('subtitle_es');
            $table->string('subtitle_eng')->nullable();
            $table->bigInteger('order')->default(0)->nullable();
            $table->timestamps();
        });
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->string('picture')->nullable();
            $table->timestamps();


        });
        Schema::create('album_pictures', function (Blueprint $table) {
            $table->bigInteger('album_id')->unsigned();
            $table->string('picture')->nullable();


            $table->bigInteger('order')->default(0)->nullable();
            $table->timestamps();

            $table->foreign('album_id')->references('id')->on('albums')
                ->onUpdate('cascade')->onDelete('cascade');
        });
        /* albums */

        /* contacto */
        Schema::create('section_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('title_es');
            $table->string('title_eng')->nullable();
            $table->string('subtitle_es');
            $table->string('subtitle_eng')->nullable();
            $table->bigInteger('order')->default(0)->nullable();
            $table->timestamps();
        });
        /* contacto */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider_landings');
        Schema::dropIfExists('section_landings');
        Schema::dropIfExists('landing_pictures');
        Schema::dropIfExists('section_genres');
        Schema::dropIfExists('genres_contents');
        Schema::dropIfExists('section_packages');
        Schema::dropIfExists('package_contents');
        Schema::dropIfExists('section_events');
        Schema::dropIfExists('event_pictures');
        Schema::dropIfExists('events');
        Schema::dropIfExists('section_abouts');
        Schema::dropIfExists('album_pictures');
        Schema::dropIfExists('albums');
        Schema::dropIfExists('section_contacts');

    }
}
