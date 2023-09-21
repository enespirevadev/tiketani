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
        Schema::table('events', function (Blueprint $table) {
            $table->unsignedBigInteger('venue_id');
            $table->unsignedBigInteger('teamA_id');
            $table->unsignedBigInteger('teamB_id');

            $table->foreign('venue_id')->references('id')->on('venues');
            $table->foreign('teamA_id')->references('id')->on('teams');
            $table->foreign('teamB_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign('events_venue_id_foreign');
            $table->dropForeign('events_teama_id_foreign');
            $table->dropForeign('events_teamb_id_foreign');

            $table->dropColumn('venue_id');
            $table->dropColumn('teamA_id');
            $table->dropColumn('teamB_id');
        });
    }
};
