<?php

use Illuminate\Database\Seeder;

class TradeTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ['매수', '매도'];
        foreach ($items as $item){
            \App\TradeType::create(['name'=>$item]);
        }
    }
}
