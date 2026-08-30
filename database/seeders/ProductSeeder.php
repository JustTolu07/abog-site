<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $livingRoom = Category::where('slug', 'living-room')->first();
        $office = Category::where('slug', 'executive-offices')->first();
        $dining = Category::where('slug', 'dining-hospitality')->first();

        $products = [
            [
                'category_id' => $livingRoom ? $livingRoom->id : 1,
                'name' => 'The Umaiha Modular Sofa',
                'slug' => 'umaiha-modular-sofa',
                'description' => 'A deeply comfortable low-profile modular seating system upholstered in rich tactile boucle with solid mahogany sub-framing.',
                'materials' => 'Solid Mahogany, High-Resilience Foam, Italian Boucle',
                'finish' => 'Matte Walnut Oil Finish',
                'dimensions' => '320cm W x 105cm D x 72cm H',
                'colour' => 'Earthy Sand',
                'usage' => 'Indoor Living & Hospitality',
                'customisation' => 'Custom configurations and fabric selections available.',
                'lead_time' => '4-6 weeks',
                'featured' => true,
                'published' => true,
                'display_order' => 1,
                'images' => [
                    'assets/collections/living-room-main.png',
                    'assets/collections/living-room-sub1.png',
                ],
            ],
            [
                'category_id' => $office ? $office->id : 2,
                'name' => 'Kore Executive Desk',
                'slug' => 'kore-executive-desk',
                'description' => 'Statement executive desk featuring integrated wire management, hand-carved solid oak legs, and leather inlay writing surface.',
                'materials' => 'Solid Nigerian Oak, Full-Grain Leather, Brushed Brass Accent',
                'finish' => 'Charcoal Stained Oak',
                'dimensions' => '240cm W x 100cm D x 75cm H',
                'colour' => 'Deep Onyx / Saddle Brown Leather',
                'usage' => 'Executive Office Suites',
                'customisation' => 'Power drawer integration & custom dimensions.',
                'lead_time' => '6-8 weeks',
                'featured' => true,
                'published' => true,
                'display_order' => 2,
                'images' => [
                    'assets/collections/executive-office.png',
                ],
            ],
            [
                'category_id' => $dining ? $dining->id : 3,
                'name' => 'Obi Dining Table',
                'slug' => 'obi-dining-table',
                'description' => 'A 10-seater monolith dining table cut from sustainably sourced West African Teak, featuring angled pedestal legs.',
                'materials' => 'Solid Teak Wood',
                'finish' => 'Natural Hand-Rubbed Wax',
                'dimensions' => '280cm W x 110cm D x 76cm H',
                'colour' => 'Warm Honey Amber',
                'usage' => 'Dining & Meeting Spaces',
                'customisation' => 'Available in 8-seater, 10-seater, and 12-seater lengths.',
                'lead_time' => '5-7 weeks',
                'featured' => true,
                'published' => true,
                'display_order' => 3,
                'images' => [
                    'assets/collections/dining-hospitality.png',
                ],
            ],
        ];

        foreach ($products as $pData) {
            $images = $pData['images'];
            unset($pData['images']);

            $product = Product::updateOrCreate(['slug' => $pData['slug']], $pData);

            // Clean previous images if any and re-seed
            $product->images()->delete();
            foreach ($images as $index => $imgPath) {
                ProductImage::create([
                    'product_id' => $product->id,
                    'path' => $imgPath,
                    'sort_order' => $index + 1,
                    'is_cover' => $index === 0,
                ]);
            }
        }
    }
}
