<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/guests.csv"), "r");
        $records = 0;

        while (($data = fgetcsv($csvFile, null, ",")) !== FALSE) {
            $records++;

            if ($records > 1) {
                Guest::create([
                    'first_name' => $data['0'],
                    'last_name' => $data['1'],
                    'second_last_name' => $data['2'],
                    'people' => $data['3'],
                    'country_code' => $data['4'],
                    'phone' => $data['5'],
                    'category' => $data['6'],
                    'foreigner' => $data['7'] == 'TRUE',
                ]);
            }

            if ($records > 500) {
                $this->command->info("$records created");
            }
        }

        fclose($csvFile);
    }
}
