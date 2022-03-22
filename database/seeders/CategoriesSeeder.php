<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Catigory;
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
            $model = new Catigory();
            $model->name = $items['name'];
            $model->save();
        }

        //
    }
}
