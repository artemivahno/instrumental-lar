<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;

class DatabaseSeeder extends Seeder
{
    /**
     * http://simple-training.com/basics-of-laravel5/laravel5-seeds/
     *
     * php artisan db:seed

     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ItemSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}

class BrandsSeeder extends Seeder {

    public function run()
    {
        DB::table('Brands')->truncate();
        Brand::create([
            'name' => 'Yato',
        ]);

        Brand::create([
            'name' => 'Vorel',
        ]);

        Brand::create([
            'name' => 'S&R',
        ]);

        Brand::create([
            'name' => 'MAKITA',
        ]);

    }
}

class CategoriesSeeder extends Seeder {

    public function run()
    {
        DB::table('Categories')->truncate();
        Category::create([
            'name' => 'Молотки',
        ]);

        Category::create([
            'name' => 'Сверла',
        ]);

        Category::create([
            'name' => 'Отвертки',
        ]);

        Category::create([
            'name' => 'Лебедки',
        ]);

    }
}

class ItemSeeder extends Seeder {

    public function run()
    {
        DB::table('Item')->truncate();
        Item::create([
            'name' => 'Молоток жестянщика мет.ручка 600г',
            'category_id' => '1',
            'brand_id' => '3',
        ]);
        Item::create([
            'name' => 'Молоток слесарный 0,3 кг',
            'category_id' => '1',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Молоток слесарный DIN1041 TUV/GS 0,2 кг',
            'category_id' => '1',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Молоток резиновый рихтовочный 30 мм',
            'category_id' => '1',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Молоток слесарный DIN1041 TUV/GS 0,5 кг',
            'category_id' => '1',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Сверло спиральное по дереву 8х400мм',
            'category_id' => '2',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Сверло по бетону SDS PLUS S4 8х600 мм YATO',
            'category_id' => '2',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Сверло по керамике 6мм',
            'category_id' => '2',
            'brand_id' => '3',
        ]);
        Item::create([
            'name' => 'Сверло по металлу HSS 4,5х47х80мм (Кобальт)',
            'category_id' => '2',
            'brand_id' => '3',
        ]);
        Item::create([
            'name' => 'Сверло по стеклу и керамике 8х68мм',
            'category_id' => '2',
            'brand_id' => '3',
        ]);
        Item::create([
            'name' => 'Сверло по бетону SDS PLUS 12х260 мм MAKITA',
            'category_id' => '2',
            'brand_id' => '4',
        ]);
        Item::create([
            'name' => 'Сверло по бетону SDS PLUS 10х100мм',
            'category_id' => '2',
            'brand_id' => '4',
        ]);
        Item::create([
            'name' => 'Сверло по бетону SDS PLUS 16х310мм',
            'category_id' => '2',
            'brand_id' => '4',
        ]);
        Item::create([
            'name' => 'Набор сверл по бетону 4-10мм 5шт.',
            'category_id' => '2',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Набор сверл по бетону SDS PLUS 5-12мм 5шт.',
            'category_id' => '2',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Сверло по бетону SDS PLUS 10х300 мм',
            'category_id' => '2',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Отвертка крестовая Ударная PH3x150mm',
            'category_id' => '3',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Отвертка TORX SEQURITY T25х100мм',
            'category_id' => '3',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Набор отверток 12пр. YATO',
            'category_id' => '3',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Отвертка с трещоткой и набором бит 25 пред.',
            'category_id' => '3',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Отвертка цельнометаллическая ударная +4 биты',
            'category_id' => '3',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Отвертка плоская "HI-TEC" 5,0х200мм',
            'category_id' => '3',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Отвертка реверсивная с трещоткой и набором бит «7 в 1»',
            'category_id' => '3',
            'brand_id' => '3',
        ]);
        Item::create([
            'name' => 'Отвертка крестовая ударная PH2х100мм',
            'category_id' => '3',
            'brand_id' => '3',
        ]);
        Item::create([
            'name' => 'Лебедка с троссом 4т 2 звездочки',
            'category_id' => '4',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Лебедка с цепью 1т 2,5м',
            'category_id' => '4',
            'brand_id' => '2',
        ]);

    }
}
