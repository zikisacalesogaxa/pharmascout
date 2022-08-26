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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('password');
            $table->string('apikey_read')->nullable();
            $table->timestamp('lastlogin')->nullable();
            $table->string('last_entity')->nullable();
            $table->foreignId('user_type_id');
            $table->string('gravatar')->nullable();
            $table->string('full_frontal')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('job_title')->nullable();
            $table->string('telephone')->nullable();
            $table->string('timezone');
            $table->string('language');
            $table->text('bio');
            $table->longText('preferences');
            $table->tinyInteger('key_account');
            $table->timestamp('last_password_reset')->nullable();
            $table->char('password_forgot_hash');
            $table->string('status_email')->nullable();
            $table->smallInteger('auth_calib')->nullable();
            $table->string('cognito_id')->nullable();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
