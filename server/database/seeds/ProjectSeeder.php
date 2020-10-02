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
            [
                'AMUhi6Agyct9VUPdeHqOkLdSaGMbG33qskX7fejO.png',
                'pCq4217bQ1DizDOtsa4uCYeS6RTvMwqhWSK0SFu.png',
                'vYrJhLv8rgSWSqqYuAbeEaxMJNbSn6x8yrfmjIB.png',
                'ajDNUchd5EFBCCMNg3uoXaHENO1LGUJyTHwfwp6.png',
                'jVFt9IUMNEQHsGgjbteeVLJ2vvZrtfiGdQPE6Us.png',
                'Pd0eamlx6RO7gZS36HJe7OmMl43UDOMSW444IK9Y.png',
                'XiKdGkGrphdOFExBys7MOQmPF21ZfnSufreeyGv.png',
            ],
            'an e-commerce website build with laravel 7',
            [2, 3, 4, 11, 12, 13, 10]
        );

        $this->createProject(
            ProjectEnum::Laravel,
            'Oauth 2 API',
            'http://eshopt.rf.gd/en/console',
            'tester',
            [
                'Oqx0BU7hNTy340f6HEikmvS8qK9yU2hHQKpmqwh.png',
                'spxkX66BoR5G9dSqbbbwydSjQeGDhtCjhhqlW.png',
                'wNsGeSqvjxQiPxhuxjneoQVLNr9owaT3RmHGPl58.png',
                'cQ6495zWPDrPFRQJsIO4rQQb8ebzCtB6c9jZLpF.png',
            ],
            'an oauth 2 api for my e-commerce project eshop',
            [8, 9, 11, 13, 3]
        );

        $this->createProject(
            ProjectEnum::Laravel,
            'blog test',
            'http://aboadeltestblog.epizy.com/',
            'tester',
            [
                'GXDWntTb8sTaTqSNwwruYdqPQbOVC6xYc15Gqu8.png',
                'EuIvgR0U9trFkI8mP5vuy5K6xSgzLRROw9yLhrA.png',
                'TZsiuOPmeeadifYUimeERCw81EXJRoKBWUUEn0.png',
                'qG5t9I8EPatm5oSdTwnOYNfC70OsFNQTYJDxd2Yj.png',
            ],
            'an laravel blog',
            [2, 13, 3, 4, 10]
        );

        $this->createProject(
            ProjectEnum::Spa,
            'Cashier',
            'http://cashier.rf.gd/',
            'tester',
            [
                'l94KXZyT9phQGGUCWleUmDa4GdqjojDko6PYghM4.png',
                'DqqfrreKdCD7UzmQWzVetacALCy1Kgv6eRVzVeT4.png',
                'M6ObbOK9hepS0M3jLMzunkhMQ9jkDSo9RSJ9dfWH.png',
                'pnBqhIa4rpbfq2ysbKeHugHcJtRudfGJoLpMEB4.png'
            ],
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
