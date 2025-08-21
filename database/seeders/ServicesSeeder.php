<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
          ['service' => 'IT technician'],  
          ['service' => 'Electrician'],  
          ['service' => 'Plumber'],  
          ['service' => 'Nursing staff'],  
          ['service' => 'Mechanic'],  
          ['service' => 'Carpenter'],  
        ]);
    }
}
