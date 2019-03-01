<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Item;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * http://simple-training.com/basics-of-laravel5/laravel5-seeds/
     *
     * php artisan migrate:refresh --seed
     *
     *
     * https://cleverman.org/post/laravel-5-5-i-slug-chto-takoe-slagi-i-zachem-oni-nuzhny
     *      slugs
     *
     * http://cccp-blog.com/laravel/laravel-middleware
     * breadcrumbs

     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(BrandsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(ItemSeeder::class);
        $this->call(ProductsSeeder::class);
	        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	    $this->call(RoleSeeder::class);
	    // $this->call(UsersTableSeeder::class);
    }
}

class BrandsSeeder extends Seeder {

    public function run()
    {
        DB::table('Brands')->truncate();
        Brand::create([
            'name' => 'Yato',
	        'slug' => 'yato',
        ]);

        Brand::create([
            'name' => 'Vorel',
	        'slug' => 'vorel',
        ]);

        Brand::create([
            'name' => 'S&R',
	        'slug' => 's-r',
        ]);

        Brand::create([
            'name' => 'MAKITA',
	        'slug' => 'makita',
        ]);

    }
}

class CategoriesSeeder extends Seeder {

    public function run()
    {
        DB::table('Categories')->truncate();
        Category::create([
            'name' => 'Молотки',
	        'slug' => 'molotki',
        ]);

        Category::create([
            'name' => 'Сверла',
	        'slug' => 'sverla',
        ]);

        Category::create([
            'name' => 'Отвертки',
	        'slug' => 'otvertki',
        ]);

        Category::create([
            'name' => 'Лебедки',
	        'slug' => 'lebedki',
        ]);

    }
}

class ItemSeeder extends Seeder {

    public function run()
    {
        DB::table('Item')->truncate();
        Item::create([
            'name' => 'Молоток жестянщика мет.ручка 600г',
	        'slug' => 'molotok-zhestyanshchika-met-ruchka-600g',
            'category_id' => '1',
            'brand_id' => '3',
        ]);
        Item::create([
            'name' => 'Молоток слесарный 0,3 кг',
	        'slug' => 'molotok-slesarnyj-0-3-kg',
            'category_id' => '1',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Молоток слесарный DIN1041 TUV/GS 0,2 кг',
	        'slug' => 'molotok-slesarnyj-din1041-tuv-gs-0-2-kg',
            'category_id' => '1',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Молоток резиновый рихтовочный 30 мм',
	        'slug' => 'molotok-rezinovyj-rihtovochnyj-30-mm',
            'category_id' => '1',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Молоток слесарный DIN1041 TUV/GS 0,5 кг',
	        'slug' => 'molotok-slesarnyj-din1041-tuv-gs-0-5-kg',
            'category_id' => '1',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Сверло спиральное по дереву 8х400мм',
	        'slug' => 'sverlo-spiralnoe-po-derevu-8h400mm',
            'category_id' => '2',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Сверло по бетону SDS PLUS S4 8х600 мм YATO',
	        'slug' => 'sverlo-po-betonu-sds-plus-s4-8h600-mm-yato',
            'category_id' => '2',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Сверло по керамике 6мм',
	        'slug' => 'sverlo-po-keramike-6mm',
            'category_id' => '2',
            'brand_id' => '3',
        ]);
        Item::create([
            'name' => 'Сверло по металлу HSS 4,5х47х80мм (Кобальт)',
	        'slug' => 'sverlo-po-metallu-hss-4-5h47h80mm-kobalt',
            'category_id' => '2',
            'brand_id' => '3',
        ]);
        Item::create([
            'name' => 'Сверло по стеклу и керамике 8х68мм',
	        'slug' => 'sverlo-po-steklu-i-keramike-8h68mm',
            'category_id' => '2',
            'brand_id' => '3',
        ]);
        Item::create([
            'name' => 'Сверло по бетону SDS PLUS 12х260 мм MAKITA',
	        'slug' => 'sverlo-po-betonu-sds-plus-12h260-mm-makita',
            'category_id' => '2',
            'brand_id' => '4',
        ]);
        Item::create([
            'name' => 'Сверло по бетону SDS PLUS 10х100мм',
	        'slug' => 'sverlo-po-betonu-sds-plus-10h100mm',
            'category_id' => '2',
            'brand_id' => '4',
        ]);
        Item::create([
            'name' => 'Сверло по бетону SDS PLUS 16х310мм',
	        'slug' => 'sverlo-po-betonu-sds-plus-16h310mm',
            'category_id' => '2',
            'brand_id' => '4',
        ]);
        Item::create([
            'name' => 'Набор сверл по бетону 4-10мм 5шт.',
	        'slug' => 'nabor-sverl-po-betonu-4-10mm-5sht',
            'category_id' => '2',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Набор сверл по бетону SDS PLUS 5-12мм 5шт.',
	        'slug' => 'nabor-sverl-po-betonu-sds-plus-5-12mm-5sht',
            'category_id' => '2',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Сверло по бетону SDS PLUS 10х300 мм',
	        'slug' => 'sverlo-po-betonu-sds-plus-10h300-mm',
            'category_id' => '2',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Отвертка крестовая Ударная PH3x150mm',
	        'slug' => 'otvertka-krestovaya-udarnaya-ph3x150mm',
            'category_id' => '3',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Отвертка TORX SEQURITY T25х100мм',
	        'slug' => 'otvertka-torx-sequrity-t25h100mm',
            'category_id' => '3',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Набор отверток 12пр. YATO',
	        'slug' => 'nabor-otvertok-12pr-yato',
            'category_id' => '3',
            'brand_id' => '1',
        ]);
        Item::create([
            'name' => 'Отвертка с трещоткой и набором бит 25 пред.',
	        'slug' => 'otvertka-s-treshchotkoj-i-naborom-bit-25-pred',
            'category_id' => '3',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Отвертка цельнометаллическая ударная +4 биты',
	        'slug' => 'otvertka-celnometallicheskaya-udarnaya-4-bity',
            'category_id' => '3',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Отвертка плоская "HI-TEC" 5,0х200мм',
	        'slug' => 'otvertka-ploskaya-hi-tec-5-0h200mm',
            'category_id' => '3',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Отвертка реверсивная с трещоткой и набором бит «7 в 1»',
	        'slug' => 'otvertka-reversivnaya-s-treshchotkoj-i-naborom-bit-7-v-1',
            'category_id' => '3',
            'brand_id' => '3',
        ]);
        Item::create([
            'name' => 'Отвертка крестовая ударная PH2х100мм',
	        'slug' => 'otvertka-krestovaya-udarnaya-ph2h100mm',
            'category_id' => '3',
            'brand_id' => '3',
        ]);
        Item::create([
            'name' => 'Лебедка с троссом 4т 2 звездочки',
	        'slug' => 'lebedka-s-trossom-4t-2-zvezdochki',
            'category_id' => '4',
            'brand_id' => '2',
        ]);
        Item::create([
            'name' => 'Лебедка с цепью 1т 2,5м',
	        'slug' => 'lebedka-s-cepyu-1t-2-5m',
            'category_id' => '4',
            'brand_id' => '2',
        ]);

    }

}

    class ProductsSeeder extends Seeder {

	    public function run()
	    {
		    DB::table('Products')->truncate();
		    Product::create([
			    'name' => 'Молоток жестянщика мет.ручка 600г',
			    'slug' => 'molotok-zhestyanshchika-met-ruchka-600g',
			    'category_id' => '1',
			    'brand_id' => '3',
		    ]);
		    Product::create([
			    'name' => 'Молоток слесарный 0,3 кг',
			    'slug' => 'molotok-slesarnyj-0-3-kg',
			    'category_id' => '1',
			    'brand_id' => '1',
		    ]);
		    Product::create([
			    'name' => 'Молоток слесарный DIN1041 TUV/GS 0,2 кг',
			    'slug' => 'molotok-slesarnyj-din1041-tuv-gs-0-2-kg',
			    'category_id' => '1',
			    'brand_id' => '2',
		    ]);
		    Product::create([
			    'name' => 'Молоток резиновый рихтовочный 30 мм',
			    'slug' => 'molotok-rezinovyj-rihtovochnyj-30-mm',
			    'category_id' => '1',
			    'brand_id' => '2',
		    ]);
		    Product::create([
			    'name' => 'Молоток слесарный DIN1041 TUV/GS 0,5 кг',
			    'slug' => 'molotok-slesarnyj-din1041-tuv-gs-0-5-kg',
			    'category_id' => '1',
			    'brand_id' => '1',
		    ]);
		    Product::create([
			    'name' => 'Сверло спиральное по дереву 8х400мм',
			    'slug' => 'sverlo-spiralnoe-po-derevu-8h400mm',
			    'category_id' => '2',
			    'brand_id' => '1',
		    ]);
		    Product::create([
			    'name' => 'Сверло по бетону SDS PLUS S4 8х600 мм YATO',
			    'slug' => 'sverlo-po-betonu-sds-plus-s4-8h600-mm-yato',
			    'category_id' => '2',
			    'brand_id' => '1',
		    ]);
		    Product::create([
			    'name' => 'Сверло по керамике 6мм',
			    'slug' => 'sverlo-po-keramike-6mm',
			    'category_id' => '2',
			    'brand_id' => '3',
		    ]);
		    Product::create([
			    'name' => 'Сверло по металлу HSS 4,5х47х80мм (Кобальт)',
			    'slug' => 'sverlo-po-metallu-hss-4-5h47h80mm-kobalt',
			    'category_id' => '2',
			    'brand_id' => '3',
		    ]);
		    Product::create([
			    'name' => 'Сверло по стеклу и керамике 8х68мм',
			    'slug' => 'sverlo-po-steklu-i-keramike-8h68mm',
			    'category_id' => '2',
			    'brand_id' => '3',
		    ]);
		    Product::create([
			    'name' => 'Сверло по бетону SDS PLUS 12х260 мм MAKITA',
			    'slug' => 'sverlo-po-betonu-sds-plus-12h260-mm-makita',
			    'category_id' => '2',
			    'brand_id' => '4',
		    ]);
		    Product::create([
			    'name' => 'Сверло по бетону SDS PLUS 10х100мм',
			    'slug' => 'sverlo-po-betonu-sds-plus-10h100mm',
			    'category_id' => '2',
			    'brand_id' => '4',
		    ]);
		    Product::create([
			    'name' => 'Сверло по бетону SDS PLUS 16х310мм',
			    'slug' => 'sverlo-po-betonu-sds-plus-16h310mm',
			    'category_id' => '2',
			    'brand_id' => '4',
		    ]);
		    Product::create([
			    'name' => 'Набор сверл по бетону 4-10мм 5шт.',
			    'slug' => 'nabor-sverl-po-betonu-4-10mm-5sht',
			    'category_id' => '2',
			    'brand_id' => '2',
		    ]);
		    Product::create([
			    'name' => 'Набор сверл по бетону SDS PLUS 5-12мм 5шт.',
			    'slug' => 'nabor-sverl-po-betonu-sds-plus-5-12mm-5sht',
			    'category_id' => '2',
			    'brand_id' => '2',
		    ]);
		    Product::create([
			    'name' => 'Сверло по бетону SDS PLUS 10х300 мм',
			    'slug' => 'sverlo-po-betonu-sds-plus-10h300-mm',
			    'category_id' => '2',
			    'brand_id' => '2',
		    ]);
		    Product::create([
			    'name' => 'Отвертка крестовая Ударная PH3x150mm',
			    'slug' => 'otvertka-krestovaya-udarnaya-ph3x150mm',
			    'category_id' => '3',
			    'brand_id' => '1',
		    ]);
		    Product::create([
			    'name' => 'Отвертка TORX SEQURITY T25х100мм',
			    'slug' => 'otvertka-torx-sequrity-t25h100mm',
			    'category_id' => '3',
			    'brand_id' => '1',
		    ]);
		    Product::create([
			    'name' => 'Набор отверток 12пр. YATO',
			    'slug' => 'nabor-otvertok-12pr-yato',
			    'category_id' => '3',
			    'brand_id' => '1',
		    ]);
		    Product::create([
			    'name' => 'Отвертка с трещоткой и набором бит 25 пред.',
			    'slug' => 'otvertka-s-treshchotkoj-i-naborom-bit-25-pred',
			    'category_id' => '3',
			    'brand_id' => '2',
		    ]);
		    Product::create([
			    'name' => 'Отвертка цельнометаллическая ударная +4 биты',
			    'slug' => 'otvertka-celnometallicheskaya-udarnaya-4-bity',
			    'category_id' => '3',
			    'brand_id' => '2',
		    ]);
		    Product::create([
			    'name' => 'Отвертка плоская "HI-TEC" 5,0х200мм',
			    'slug' => 'otvertka-ploskaya-hi-tec-5-0h200mm',
			    'category_id' => '3',
			    'brand_id' => '2',
		    ]);
		    Product::create([
			    'name' => 'Отвертка реверсивная с трещоткой и набором бит «7 в 1»',
			    'slug' => 'otvertka-reversivnaya-s-treshchotkoj-i-naborom-bit-7-v-1',
			    'category_id' => '3',
			    'brand_id' => '3',
		    ]);
		    Product::create([
			    'name' => 'Отвертка крестовая ударная PH2х100мм',
			    'slug' => 'otvertka-krestovaya-udarnaya-ph2h100mm',
			    'category_id' => '3',
			    'brand_id' => '3',
		    ]);
		    Product::create([
			    'name' => 'Лебедка с троссом 4т 2 звездочки',
			    'slug' => 'lebedka-s-trossom-4t-2-zvezdochki',
			    'category_id' => '4',
			    'brand_id' => '2',
		    ]);
		    Product::create([
			    'name' => 'Лебедка с цепью 1т 2,5м',
			    'slug' => 'lebedka-s-cepyu-1t-2-5m',
			    'category_id' => '4',
			    'brand_id' => '2',
		    ]);
	    }
    }