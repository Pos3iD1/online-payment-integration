<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Color;
use App\Models\Image;
use App\Models\Product;
use App\Models\Size;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use function Illuminate\Events\queueable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::factory(10)->create();

        Tag::factory(10)->create();

        Color::factory(10)->create();

        Size::factory(5)->create();

        $products = Product::factory(30)
            ->hasImages(3)
            ->hasReviews(2)
            ->create();

        foreach ($products as $product) {
            foreach (Category::inRandomOrder()->limit(4)->get() as $category) {
                $product->categories()->attach($category->id);
            }

            foreach (Tag::inRandomOrder()->limit(4)->get() as $tag) {
                $product->tags()->attach($tag->id);
            }

            foreach (Color::inRandomOrder()->limit(3)->get() as $color) {
                $product->colors()->attach($color->id);
            }

            foreach (Size::inRandomOrder()->limit(3)->get() as $size) {
                $product->sizes()->attach($size->id);
            }
        }

         $user = User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
         ]);

        foreach (Product::inRandomOrder()->limit(10)->get() as $product)
        {
            $user->wishes()->attach($product->id);
        }
    }
}
