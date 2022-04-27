<?php

namespace Database\Seeders;

use App\Models\Category_item;
use Illuminate\Database\Seeder;

class CategoryItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'=>"1 xonali",
                'category_id' =>'1',

            ],
            [
                'name'=>"2 xonali",
                'category_id' =>'1',

            ],
            [
                'name'=>"3 xonali",
                'category_id' =>'1',

            ],
            [
                'name'=>"1 ta yotoq",
                'category_id' =>'2',

            ],
            [
                'name'=>"2 ta yotoq",
                'category_id' =>'2',

            ],
            [
                'name'=>"3 ta yotoq",
                'category_id' =>'2',

            ]

            ];
        foreach($data as $items ){
            $model = new Category_item();
            $model->name = $items['name'];
            $model->category_id = $items['category_id'];
            $model->save();
        }
    }
}
