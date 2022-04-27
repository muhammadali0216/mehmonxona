<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesSeeder extends Seeder
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
                'name'=>"Xonalar turi"
            ],
            [
                'name'=>"Yotoq turi"
            ]
            ];
        foreach($data as $items ){
            $model = new Category();
            $model->name = $items['name'];
            $model->save();
        }

        //
    }
}
