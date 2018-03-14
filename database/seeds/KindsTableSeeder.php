<?php

use Illuminate\Database\Seeder;

class KindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $items = [
            '주식',   //1
            '채권',   //2
            '원자재', //3
            '혼합자산', //4
            '통화', //5
            '부동산', //6
        ];
        foreach ($items as $item){
            \App\Kind::create(['name'=>$item]);
        }
        $items = [
            ['name'=>'전략', 'parent_id'=>1], //7
            ['name'=>'시장대표', 'parent_id'=>1],   //8
            ['name'=>'업종섹터', 'parent_id'=>1],   //9
            ['name'=>'규모', 'parent_id'=>1], //10
            ['name'=>'코스피', 'parent_id'=>1],    //11
            ['name'=>'코스닥', 'parent_id'=>1],    //12

            ['name'=>'국공채', 'parent_id'=>2],    //13
            ['name'=>'혼합', 'parent_id'=>2], //14
            ['name'=>'회사채', 'parent_id'=>2],    //15

            ['name'=>'금속', 'parent_id'=>3], //16
            ['name'=>'에너지', 'parent_id'=>3],    //17
            ['name'=>'농산물', 'parent_id'=>3],    //18
            ['name'=>'혼합', 'parent_id'=>3], //19

            ['name'=>'주식+채권', 'parent_id'=>4],  //20
            ['name'=>'주식+통화', 'parent_id'=>4],  //21

            ['name'=>'미국달러', 'parent_id'=>5],   //22
            ['name'=>'일본엔', 'parent_id'=>5],    //23
            ['name'=>'유로', 'parent_id'=>5], //24

            ['name'=>'리츠', 'parent_id'=>6], //25
        ];
        foreach ($items as $item){
            \App\Kind::create(['name'=>$item]);
        }

        $items = [
            ['name'=>'전략테마', 'parent_id'=>7],
            ['name'=>'구조화', 'parent_id'=>7],
            ['name'=>'배당', 'parent_id'=>7],
            ['name'=>'변동성', 'parent_id'=>7],
            ['name'=>'혼합/퀀트', 'parent_id'=>7],
            ['name'=>'가치', 'parent_id'=>7],
            ['name'=>'성장', 'parent_id'=>7],
            ['name'=>'기업그룹', 'parent_id'=>7],

            ['name'=>'경기소비재', 'parent_id'=>9],
            ['name'=>'생활소비재', 'parent_id'=>9],
            ['name'=>'산업재', 'parent_id'=>9],
            ['name'=>'건설', 'parent_id'=>9],
            ['name'=>'업종테마', 'parent_id'=>9],
            ['name'=>'에너지화학', 'parent_id'=>9],
            ['name'=>'정보기술', 'parent_id'=>9],
            ['name'=>'중공업', 'parent_id'=>9],
            ['name'=>'철강소재', 'parent_id'=>9],
            ['name'=>'금융', 'parent_id'=>9],
            ['name'=>'헬스케어', 'parent_id'=>9],

            ['name'=>'중형주', 'parent_id'=>10],
            ['name'=>'대형주', 'parent_id'=>10],

            ['name'=>'장기', 'parent_id'=>13],
            ['name'=>'중기', 'parent_id'=>13],
            ['name'=>'단기', 'parent_id'=>13],

            ['name'=>'단기', 'parent_id'=>14],
            ['name'=>'중기', 'parent_id'=>14],

            ['name'=>'중기', 'parent_id'=>15],

            ['name'=>'금', 'parent_id'=>16],
            ['name'=>'은', 'parent_id'=>16],
            ['name'=>'구리', 'parent_id'=>16],
            ['name'=>'혼합', 'parent_id'=>16],

            ['name'=>'천연가스', 'parent_id'=>17],
            ['name'=>'원유', 'parent_id'=>17],

            ['name'=>'혼합', 'parent_id'=>18],
            ['name'=>'콩', 'parent_id'=>18],
            ['name'=>'옥수수', 'parent_id'=>18],
        ];
        foreach ($items as $item){
            \App\Kind::create(['name'=>$item]);
        }
    }
}
