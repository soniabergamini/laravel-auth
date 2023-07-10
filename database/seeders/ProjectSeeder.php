<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use GuzzleHttp\Handler\Proxy;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $stacksData = config('store');

        for ($i=0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->name = $faker->word();
            $newProject->description = $faker->paragraphs(4, true);
            $newProject->image = "https://picsum.photos/id/" . rand(0, 1084) . "/200";
            $newProject->link = $faker->url();

            $stacks = '';
            for ($c = 0; $c < 4; $c++) {
                $num = rand(0, count($stacksData)-1);
                if (!str_contains($stacks, $stacksData[$num])) {
                    $stacks .= $stacksData[$num] . ' ';
                }
            }

            $newProject->stack = $stacks;
            // $newProject->stack = $faker->randomElements(['HTML', 'CSS', 'JS', 'PHP', 'LARAVEL', 'VITE', 'VUEJS'], 4);
            $newProject->save();
        }
    }
}
