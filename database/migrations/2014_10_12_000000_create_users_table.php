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
            $table->string('mobile')->nullable();
            $table->string('password');
            $table->string('apikey_read')->nullable();
            $table->timestamp('lastlogin')->nullable();
            $table->string('last_entity')->nullable();
            $table->string('gravatar')->nullable();
            $table->string('full_frontal')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->string('job_title')->nullable();
            $table->string('telephone')->nullable();
            $table->string('timezone')->default('Africa/Johannesburg');
            $table->string('language')->default('en_EN');
            $table->text('bio')->nullable();
            $table->longText('preferences')->nullable();
            $table->tinyInteger('key_account')->default(0);
            $table->timestamp('last_password_reset')->nullable();
            $table->char('password_forgot_hash')->nullable();
            $table->string('status_email')->nullable();
            $table->smallInteger('auth_calib')->default(0);
            $table->string('cognito_id')->nullable();
            $table->foreignId('current_team_id')->unique();
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
