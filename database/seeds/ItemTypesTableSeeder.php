<?php

use Illuminate\Database\Seeder;

class ItemTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ['stock', 'etf', 'etn'];
        foreach ($items as $item){
            \App\ItemType::create(['name'=>$item]);
        }
    }
}
