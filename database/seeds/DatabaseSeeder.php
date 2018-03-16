<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(config('database.default') !== 'sqlite'){
            DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }

        \App\TradeType::truncate();
        $this->call(TradeTypesTableSeeder::class);

        \App\Kind::truncate();
        $this->call(KindsTableSeeder::class);

        \App\ItemType::truncate();
        $this->call(ItemTypesTableSeeder::class);

        \App\EtfType::truncate();
        $this->call(EtfTypesTableSeeder::class);



        if(config('database.default') !== 'sqlite'){
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }

    }
}
