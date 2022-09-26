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
            'bobot_dimensi' => '0.33'
        ]);
        M_dimention::create([
            'dimensi' => 'Social',
            'bobot_dimensi' => '0.33'
        ]);
        M_dimention::create([
            'dimensi' => 'Governance',
            'bobot_dimensi' => '0.34'
        ]);
    }
}
