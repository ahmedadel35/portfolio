<?php

use App\Project;
use App\Tag;
use Illuminate\Database\Seeder;
use App\Enum\ProjectEnum;

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

        // $tags = Tag::all();
        // $projects = factory(Project::class, 12)->create();
        // $projects->each(fn (Project $p) => $p->tags()->sync(
        //     Arr::random((array) $tags->pluck('id')->toArray(), 3)
        // ));

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

        $this->createProject(
            ProjectEnum::Laravel,
            'eshop',
            'http://eshopt.rf.gd/en/',
            'tester',
            ['0AMWK1vu66EDMPmoCj7jMDddVFVY8Fs1Qp5bVrIL.jpeg', '3.jpg', '6.jpg'],
            'an e-commerce website build with laravel 7',
            [2, 3, 4, 11, 12, 13, 10]
        );

        $this->createProject(
            ProjectEnum::Laravel,
            'Oauth 2 API',
            'http://eshopt.rf.gd/en/console',
            'tester',
            ['0AMWK1vu66EDMPmoCj7jMDddVFVY8Fs1Qp5bVrIL.jpeg', '3.jpg', '6.jpg'],
            'an oauth 2 api for my e-commerce project eshop',
            [8, 9, 11, 13, 3]
        );

        $this->createProject(
            ProjectEnum::Laravel,
            'blog test',
            'http://aboadeltestblog.epizy.com/',
            'tester',
            ['0AMWK1vu66EDMPmoCj7jMDddVFVY8Fs1Qp5bVrIL.jpeg', '3.jpg', '6.jpg'],
            'an laravel blog',
            [2, 13, 3, 4, 10]
        );

        $this->createProject(
            ProjectEnum::Spa,
            'Cashier',
            'http://cashier.rf.gd/',
            'tester',
            ['0AMWK1vu66EDMPmoCj7jMDddVFVY8Fs1Qp5bVrIL.jpeg', '3.jpg', '6.jpg'],
            'An Cashier SPA for a food shop powered by angular 9 and lumen for backend',
            [8, 9, 13, 5, 3]
        );

        $this->createProject(
            ProjectEnum::Mobile,
            'Volunteers Data',
            'https://github.com/abo3adel/volunteers-data',
            'tester',
            [
                'twrKEngJGelVvp0XT2rmbzB37cYDVkFNvnAtjVhO.png',
                'whlAbhADSalDXZTlXwjSTnBkfL9oEKcfK4rfLRhC.jpg',
                'oZbA9nmfrIHcaRAPI3IqEQdDKyzbyjh1te8ic95R.jpg'
            ],
            'an ionic 3 application for nonprofit organization to group their volunteers data',
            [6, 3],
            'https://github.com/abo3adel/volunteers-data/raw/master/VolunteersData.apk'
        );

        DB::commit();

        // tags will be attached at TagSeeder class
    }

    private function createProject(
        string $type,
        string $title,
        string $link,
        string $client,
        array $img,
        string $info,
        array $tags,
        string $download_url = ''
    ): Project {
        $project = factory(Project::class)->create(compact(
            'title',
            'link',
            'client',
            'img',
            'info',
            'download_url',
            'type'
        ));

        $project->tags()->sync($tags);

        return $project;
    }
}
