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
        Schema::table('users', function (Blueprint $table) {
            $table->string('web_site');
            $table->text('presentation');
            $table->boolean('status')->default(0);
            $table->string('nick_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('web_site');
            $table->dropColumn('presentation');
            $table->dropColumn('status')->default(0);
            $table->dropColumn('nick_name');
        });
    }
};
