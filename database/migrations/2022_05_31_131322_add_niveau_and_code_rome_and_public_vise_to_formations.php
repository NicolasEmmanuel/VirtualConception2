<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNiveauAndCodeRomeAndPublicViseToFormations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formations', function (Blueprint $table) {
            $table->string('niveau', 100)->nullable()->after('suite_de_parcours_possibles');
            $table->string('code_rome', 255)->nullable()->after('niveau');
            $table->string('public_vise', 150)->nullable()->after('code_rome');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('formations', function (Blueprint $table) {
            //
        });
    }
}