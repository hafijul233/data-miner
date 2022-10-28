<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccines', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vaers_id')->nullable()->default(null);
            $table->string('vax_type')->nullable()->default(null);
            $table->string('vax_manu')->nullable()->default(null);
            $table->string('vax_lot')->nullable()->default(null);
            $table->string('vax_dose_series')->nullable()->default(null);
            $table->string('vax_route')->nullable()->default(null);
            $table->string('vax_site')->nullable()->default(null);
            $table->string('vax_name')->nullable()->default(null);
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
        Schema::dropIfExists('vaccines');
    }
};
