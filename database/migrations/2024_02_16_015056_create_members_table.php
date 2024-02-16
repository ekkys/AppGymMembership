<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id('member_id');
            $table->string('member_id_no', 15);
            $table->string('member_name', 50);
            $table->string('address', 100);
            $table->string('contact', 11);
            $table->string('email', 30);
            $table->integer('age');
            $table->integer('gender');
            $table->date('joining_date');
            $table->date('end_of_membership_date');
            $table->unsignedBigInteger('membership_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('membership_id')->references('type_id')->on('member_types')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
