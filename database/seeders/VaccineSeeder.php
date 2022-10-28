<?php

namespace Database\Seeders;

use App\Models\Vaccine;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Rap2hpoutre\FastExcel\FastExcel;

class VaccineSeeder extends Seeder
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
            ->import(base_path('database/data/1990VAERSVAX.csv'), function ($line) {
                /**
                 * 0 => "VAERS_ID", 1 => "VAX_TYPE", 2 => "VAX_MANU", 3 => "VAX_LOT"
                 * 4 => "VAX_DOSE_SERIES", 5 => "VAX_ROUTE", 6 => "VAX_SITE", 7 => "VAX_NAME"
                 */
                if ($line[0] != 'VAERS_ID') {
                    return Vaccine::create([
                        'vaers_id' => (int)$line[0],
                        'vax_type' => $line[1],
                        'vax_manu' => $line[2],
                        'vax_lot' => $line[3],
                        'vax_dose_series' => $line[4],
                        'vax_route' => $line[5],
                        'vax_site' => $line[6],
                        'vax_name' => $line[7],
                    ]);
                }
                return null;
            });

        Model::reguard();
    }
}
