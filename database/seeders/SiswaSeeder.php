<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'Ajie'],
            ['nama' => 'Arya'],
            ['nama' => 'Aldi'],
            ['nama' => 'Ajpa'],
            ['nama' => 'Ajam'],
        ];

        foreach ($data as $item) {
            Siswa::create($item);
        }
    }
}
