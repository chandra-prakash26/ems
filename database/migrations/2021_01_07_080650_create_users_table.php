<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('emp_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile');
            $table->date('dob');
            $table->string('gender');
            $table->text('address');
            $table->string('city');
            $table->string('user_type')->default("normal");
            $table->string('password');
            // $table->integer('manager_id');
            $table->string('qn1');
            $table->string('qn2');
            $table->string('qn3');
            $table->string('ans1');
            $table->string('ans2');
            $table->string('ans3');
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->foreign('manager_id')->references('emp_id')
                ->on('users');


            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            // $table->timestamps();
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
}
