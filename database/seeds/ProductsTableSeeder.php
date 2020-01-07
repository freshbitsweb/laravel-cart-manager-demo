<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 10)
            ->create()->each(function ($p) {
                $p->addMediaFromUrl('https://source.unsplash.com/collection/787410/800x487')
                    ->toMediaCollection('products')
                ;
            })
        ;
    }
}
