<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPresentationDuMetierAndObjectifsDeLaFormationAndAptitudesAndProgrammeAndCertificationAndDebouchesAndPasserellesAndEquivalencesAndSuiteDeParcoursPossiblesToFormations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('formations', function (Blueprint $table) {
            $table->text('presentation_du_metier')->nullable()->after('lieux');
            $table->text('objectifs_de_la_formation')->nullable()->after('presentation_du_metier');
            $table->text('aptitudes')->nullable()->after('objectifs_de_la_formation');
            $table->text('programme')->nullable()->after('aptitudes');
            $table->text('certification')->nullable()->after('programme');
            $table->string('debouches', 255)->nullable()->after('certification');
            $table->string('passerelles', 255)->nullable()->after('debouches');
            $table->string('equivalences', 255)->nullable()->after('passerelles');
            $table->string('suite_de_parcours_possibles', 255)->nullable()->after('equivalences');
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