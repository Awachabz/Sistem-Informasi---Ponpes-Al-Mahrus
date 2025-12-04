<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StructureMember;

class StructureSeeder extends Seeder
{
    public function run(): void
    {
        $divisions = [
            'Pimpinan Pondok',
            'Wakil Pimpinan',
            'Sekretaris',
            'Bendahara',
            'Divisi Pendidikan',
            'Divisi Santri',
            'Divisi Kebersihan',
            'Divisi Keamanan',
        ];

        foreach ($divisions as $division) {
            StructureMember::firstOrCreate(['division' => $division]);
        }
    }
}
