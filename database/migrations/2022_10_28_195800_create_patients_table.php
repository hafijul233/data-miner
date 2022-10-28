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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vaers_id')->nullable()->default(null);
            $table->string('recive_date')->nullable()->default(null);
            $table->string('state')->nullable()->default(null);
            $table->string('age_yrs')->nullable()->default(null);
            $table->string('cage_yr')->nullable()->default(null);
            $table->string('cage_mo')->nullable()->default(null);
            $table->string('sex')->nullable()->default(null);
            $table->string('rpt_date')->nullable()->default(null);
            $table->string('symptom_text')->nullable()->default(null);
            $table->string('died')->nullable()->default(null);
            $table->string('datedied')->nullable()->default(null);
            $table->string('l_threat')->nullable()->default(null);
            $table->string('er_visit')->nullable()->default(null);
            $table->string('hospital')->nullable()->default(null);
            $table->string('hospdays')->nullable()->default(null);
            $table->string('x_stay')->nullable()->default(null);
            $table->string('disable')->nullable()->default(null);
            $table->string('recovd')->nullable()->default(null);
            $table->string('vax_date')->nullable()->default(null);
            $table->string('onset_date')->nullable()->default(null);
            $table->string('numdays')->nullable()->default(null);
            $table->string('lab_data')->nullable()->default(null);
            $table->string('v_adminby')->nullable()->default(null);
            $table->string('v_fundby')->nullable()->default(null);
            $table->string('other_meds')->nullable()->default(null);
            $table->string('cur_ill')->nullable()->default(null);
            $table->string('history')->nullable()->default(null);
            $table->string('prior_vax')->nullable()->default(null);
            $table->string('splttype')->nullable()->default(null);
            $table->string('form_vers')->nullable()->default(null);
            $table->string('todays_date')->nullable()->default(null);
            $table->string('birth_defect')->nullable()->default(null);
            $table->string('ofc_visit')->nullable()->default(null);
            $table->string('er_ed_visit')->nullable()->default(null);
            $table->string('allergies')->nullable()->default(null);
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
        Schema::dropIfExists('patients');
    }
};
