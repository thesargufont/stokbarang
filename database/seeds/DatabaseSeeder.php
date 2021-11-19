<?php

use App\masteritem;
use App\masterlokasi;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        masteritem::create([
            'kodebarang' => 'RAW-01001-001',
            'namabarang' => 'Resistor 1K',
            'um' => 'EA'
        ]);

        masteritem::create([
            'kodebarang' => 'RAW-01001-002',
            'namabarang' => 'Transistor',
            'um' => 'EA'
        ]);

        masterlokasi::create([
            'kodelokasi' => 'KRPY',
            'namalokasi' => 'HIT Krapyak'
        ]);

        masterlokasi::create([
            'kodelokasi' => 'SAYG',
            'namalokasi' => 'HIT Sayung'
        ]);

        User::create([
            'name' => 'Thesar Gufont',
            'username' => 'thesargufont',
            'email' => 'thesargufont@gmail.com',
            'password' => '12345678'
        ]);

        User::create([
            'name' => 'Samuel Indra',
            'username' => 'samuel',
            'email' => 'samuelindra@gmail.com',
            'password' => 'qazwsxedc'
        ]);
    
    }
    
}
