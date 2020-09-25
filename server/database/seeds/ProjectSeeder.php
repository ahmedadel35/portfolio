<?php

use App\Project;
use App\Tag;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        $tags = Tag::all();
        $projects = factory(Project::class, 12)->create();
        $projects->each(fn (Project $p) => $p->tags()->sync(
            Arr::random((array) $tags->pluck('id')->toArray(), 3)
        ));

        // $tags = [
        //     1 => "php"
        //     2 => "laravel"
        //     3 => "typescript"
        //     4 => "vue-js"
        //     5 => "angular"
        //     6 => "ionic"
        //     7 => "react-native"
        //     8 => "lumen"
        //     9 => "api"
        //     10 => "bootstrap"
        //     11 => "multi-language"
        //     12 => "multi-user-access"
        //     13 => "unit-testing"
        // ];
        DB::commit();

        // tags will be attached at TagSeeder class
    }
}
