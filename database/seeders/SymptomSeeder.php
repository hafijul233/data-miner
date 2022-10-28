<?php

namespace Database\Seeders;

use App\Models\Symptom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Rap2hpoutre\FastExcel\FastExcel;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        (new FastExcel)
            ->withoutHeaders()
            ->import(base_path('database/data/1990VAERSSYMPTOMS.csv'), function ($line) {
                /*0 => "VAERS_ID"
                  1 => "SYMPTOM1"
                  2 => "SYMPTOMVERSION1"
                  3 => "SYMPTOM2"
                  4 => "SYMPTOMVERSION2"
                  5 => "SYMPTOM3"
                  6 => "SYMPTOMVERSION3"
                  7 => "SYMPTOM4"
                  8 => "SYMPTOMVERSION4"
                  9 => "SYMPTOM5"
                  10 => "SYMPTOMVERSION5"
                */

                if ($line[0] != 'VAERS_ID') {
                    return Symptom::create([
                        'vaers_id' => $line[0] ?? null,
                        'symptom1' => $line[1] ?? null,
                        'symptomversion1' => $line[2] ?? null,
                        'symptom2' => $line[3] ?? null,
                        'symptomversion2' => $line[4] ?? null,
                        'symptom3' => $line[5] ?? null,
                        'symptomversion3' => $line[6] ?? null,
                        'symptom4' => $line[7] ?? null,
                        'symptomversion4' => $line[8] ?? null,
                        'symptom5' => $line[9] ?? null,
                        'symptomversion5' => $line[10] ?? null,
                    ]);
                }
                return null;
            });

        Model::reguard();
    }
}
