<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Rap2hpoutre\FastExcel\FastExcel;

class PatientSeeder extends Seeder
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
            ->import(base_path('database/data/1990VAERSDATA.csv'), function ($line) {
                /*0 => "VAERS_ID"
                  1 => "RECVDATE"
                  2 => "STATE"
                  3 => "AGE_YRS"
                  4 => "CAGE_YR"
                  5 => "CAGE_MO"
                  6 => "SEX"
                  7 => "RPT_DATE"
                  8 => "SYMPTOM_TEXT"
                  9 => "DIED"
                  10 => "DATEDIED"
                  11 => "L_THREAT"
                  12 => "ER_VISIT"
                  13 => "HOSPITAL"
                  14 => "HOSPDAYS"
                  15 => "X_STAY"
                  16 => "DISABLE"
                  17 => "RECOVD"
                  18 => "VAX_DATE"
                  19 => "ONSET_DATE"
                  20 => "NUMDAYS"
                  21 => "LAB_DATA"
                  22 => "V_ADMINBY"
                  23 => "V_FUNDBY"
                  24 => "OTHER_MEDS"
                  25 => "CUR_ILL"
                  26 => "HISTORY"
                  27 => "PRIOR_VAX"
                  28 => "SPLTTYPE"
                  29 => "FORM_VERS"
                  30 => "TODAYS_DATE"
                  31 => "BIRTH_DEFECT"
                  32 => "OFC_VISIT"
                  33 => "ER_ED_VISIT"
                  34 => "ALLERGIES"
                */

                if ($line[0] != 'VAERS_ID') {
                    return Patient::create([
                        'vaers_id' => (int)$line[0] ?? null,
                        'recive_date' => $line[1] ?? null,
                        'state' => $line[2] ?? null,
                        'age_yrs' => $line[3] ?? null,
                        'cage_yr' => $line[4] ?? null,
                        'cage_mo' => $line[5] ?? null,
                        'sex' => $line[6] ?? null,
                        'rpt_date' => $line[7] ?? null,
                        'symptom_text' => $line[8] ?? null,
                        'died' => $line[9] ?? null,
                        'datedied' => $line[10] ?? null,
                        'l_threat' => $line[11] ?? null,
                        'er_visit' => $line[12] ?? null,
                        'hospital' => $line[13] ?? null,
                        'hospdays' => $line[14] ?? null,
                        'x_stay' => $line[15] ?? null,
                        'disable' => $line[16] ?? null,
                        'recovd' => $line[17] ?? null,
                        'vax_date' => $line[18] ?? null,
                        'onset_date' => $line[19] ?? null,
                        'numdays' => $line[20] ?? null,
                        'lab_data' => $line[21] ?? null,
                        'v_adminby' => $line[22] ?? null,
                        'v_fundby' => $line[23] ?? null,
                        'other_meds' => $line[24] ?? null,
                        'cur_ill' => $line[25] ?? null,
                        'history' => $line[26] ?? null,
                        'prior_vax' => $line[27] ?? null,
                        'splttype' => $line[28] ?? null,
                        'form_vers' => $line[29] ?? null,
                        'todays_date' => $line[30] ?? null,
                        'birth_defect' => $line[31] ?? null,
                        'ofc_visit' => $line[32] ?? null,
                        'er_ed_visit' => $line[33] ?? null,
                        'allergies' => $line[34] ?? null
                    ]);
                }
                return null;
            });

        Model::reguard();
    }
}
