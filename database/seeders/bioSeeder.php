<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\biodata;

class bioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nip' => '123456',
                'name' => 'John Doe',
                'nip' => '12345',
                'Jenis_kelamin' => 'L',
                'status_perkawinan' => 'Single',
                'Tempat_lahir' => 'Example City',
                'Tanggal_lahir' => '1990-01-15',
                'karpeg' => '123456',
                'TMT_KGB_terakhir' => '2020-03-15',
                'pangkat' => 'Example Pangkat',
                'golongan' => 'Example Golongan',
                'TMT' => '2015-07-01',
                'KD' => 'KD123',
                'Jabatan' => 'Example Jabatan',
                'idPendidikan' => '123',
                'KGB_YAD' => '2025-03-15',
                'TMT_pensiun' => '2035-01-01',
                'keterangan' => 'This is an example biodata.',
            ],
            // Add more data records as needed
        ];

        foreach ($data as $record) {
            biodata::create($record);
        }
    }
}
