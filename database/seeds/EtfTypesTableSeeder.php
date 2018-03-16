<?php

use Illuminate\Database\Seeder;

class EtfTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ['레버리지', '인버스'];
        foreach ($items as $item){
            \App\EtfType::create(['name'=>$item]);
        }
    }
}
