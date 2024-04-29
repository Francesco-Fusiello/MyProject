<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageCleanupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cancella le immagini dallo storage
        Storage::deleteDirectory('public/announcements');
        Storage::deleteDirectory('public/images');
        
        // Ricrea la directory se necessario
        Storage::makeDirectory('public/announcements');
        Storage::makeDirectory('public/images');
    }
}
