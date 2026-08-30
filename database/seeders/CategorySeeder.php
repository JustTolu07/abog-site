<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Living Room',
                'slug' => 'living-room',
                'description' => 'Sophisticated lounges, modular sofas, and bespoke coffee tables.',
                'cover_image' => 'assets/collections/living-room-main.png',
                'display_order' => 1,
                'featured' => true,
                'active' => true,
            ],
            [
                'name' => 'Executive Offices',
                'slug' => 'executive-offices',
                'description' => 'Commanding executive desks, ergonomically crafted seating, and minimalist credenzas.',
                'cover_image' => 'assets/collections/executive-office.png',
                'display_order' => 2,
                'featured' => true,
                'active' => true,
            ],
            [
                'name' => 'Dining & Hospitality',
                'slug' => 'dining-hospitality',
                'description' => 'Sculptural solid wood dining tables and tailored chairs engineered for grand gatherings.',
                'cover_image' => 'assets/collections/dining-hospitality.png',
                'display_order' => 3,
                'featured' => true,
                'active' => true,
            ],
            [
                'name' => 'Custom Joinery',
                'slug' => 'custom-joinery',
                'description' => 'Architectural wall paneling, acoustic timber baffles, and custom storage solutions.',
                'cover_image' => 'assets/collections/custom-joinery.png',
                'display_order' => 4,
                'featured' => false,
                'active' => true,
            ],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(['slug' => $cat['slug']], $cat);
        }
    }
}
