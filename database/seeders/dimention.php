<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\M_dimention;

class dimention extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        M_dimention::create([
            'dimensi' => 'Environment',
            'bobot_dimensi' => '0.33',
            'color' => '9BBB59'
        ]);
        M_dimention::create([
            'dimensi' => 'Social',
            'bobot_dimensi' => '0.33',
            'color' => 'C4BD97'
        ]);
        M_dimention::create([
            'dimensi' => 'Governance',
            'bobot_dimensi' => '0.34',
            'color' => 'FABF8F'
        ]);
    }
}
