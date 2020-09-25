<?php

return [
<<<'EOD'
    <p>
    Laravel is a powerful MVC PHP framework, designed for developers who need a
    simple and elegant toolkit to create full-featured web applications. Laravel
    was created by Taylor Otwell.
    </p>
    <p>
    Since its initial release in 2011, Laravel has experienced exponential
    growth. In 2015, it became the most starred PHP framework on GitHub and rose
    to the go-to framework for people all over the world.
    </p>
    <hr />
    <p>This Tutorial is divided into parts:</p>
    <ol>
    <li>
        <strong
            ><span class="text-secondary" data-tomark-pass=""
                >Part 1</span
            ></strong
        >
    </li>
    <li>
        <a
            href="/blog/laravel-tutorial-building-your-first-laravel-application-part-2"
            >Part 2</a
        >
    </li>
    <li>
        <a
            href="/blog/laravel-tutorial-building-your-first-laravel-application-part-3"
            >part 3</a
        >
    </li>
    <li>
        <a
            href="/blog/laravel-tutorial-building-your-first-laravel-application-part-4"
            >Part 4</a
        >
    </li>
    <li>
        <a
            href="/blog/laravel-tutorial-building-your-first-laravel-application-part-5"
            >part 5</a
        >
    </li>
    </ol>
    <hr />
    <p>
    <strong>Note</strong> The complete, finished source code for this project is
    <a
        target="_blank"
        href="https://github.com/abo3adel/laravel-tutorialyour-first-app"
        >available on GitHub</a
    >.
    </p>
    <h2>Prerequisites</h2>
    <ul>
    <li>
        A local PHP environment (<a
            target="_blank"
            href="https://laravel.com/docs/6.x/homestead"
            >Homestead</a
        >,
        <a target="_blank" href="https://laravel.com/docs/6.x/valet">Valet</a>,
        <a target="_blank" href="http://www.wampserver.com/en/">WAMP</a>,
        <a target="_blank" href="https://www.apachefriends.org/index.html"
            >XAMPP</a
        >, <em>etc</em>).
    </li>
    <li>
        A database. I’ll be using MySQL
        <span class="text-muted" data-tomark-pass=""
            >(installed in wamp or xampp)</span
        >.
    </li>
    <li>
        <a target="_blank" href="https://getcomposer.org">Composer</a>
        installed.
    </li>
    <li>
        <a target="_blank" href="https://phpunit.de/">PHPUnit</a> installed.
    </li>
    <li>
        <a target="_blank" href="https://nodejs.org/en/">Node</a> installed.
    </li>
    </ul>
    <blockquote>
    <p>
        <strong>Note:</strong> For the local PHP environment I am using windows
        so <em>Homestead</em> or <em>WAMP</em> is good for me.
    </p>
    </blockquote>
    <hr />
    <h2>Installation</h2>
    <p>
    For managing dependencies, Laravel uses composer. Make sure you have a
    Composer installed on your system before you install Laravel or follow
    below.
    </p>
    <ol>
    <li>
        <p><strong>First download and install composer</strong></p>
        <blockquote>
            <p>
                make sure composer is working, open powershell or cmd or
                terminal and write
            </p>
        </blockquote>
        <pre class="lang-bash"><code data-language="bash"> composer -v
    </code></pre>
    </li>
    <li>
        <p><strong>Download the Laravel installer</strong></p>
        <pre
            class="lang-bash"
        ><code data-language="bash">composer global require laravel/installer
    </code></pre>
        <blockquote>
            <p>
                Make sure to place Composer's system-wide vendor bin directory
                in your $PATH so the laravel executable can be located by your
                system.
            </p>
        </blockquote>
        <ul>
            <li>
                <strong>macOS and GNU / Linux Distributions:</strong>
                <span class="text-primary" data-tomark-pass="">$HOME</span
                >/.composer/vendor/bin
            </li>
            <li>
                <strong>Windows:</strong>
                <span class="text-primary" data-tomark-pass=""
                    >%USERPROFILE%</span
                >\AppData\Roaming\Composer\vendor\bin
            </li>
        </ul>
    </li>
    <li>
        <p>
            Go to your server root directory or localhost folder. if you
            installed
            <strong
                ><a
                    target="_blank"
                    href="https://www.apachefriends.org/index.html"
                    >XAMPP</a
                ></strong
            >
            &nbsp;<code data-backticks="3">C:\xampp\htdocs</code> or
            <strong>WAMP</strong> &nbsp;<code data-backticks="3"
                >C:\wamp\www</code
            >
        </p>
    </li>
    <li>
        <p><strong>Create new laravel project</strong></p>
        <pre class="lang-bash"><code data-language="bash">
    laravel new [project-name]

    laravel new tasks
    </code></pre>
        <blockquote>
            <p>
                This will create a new directory called tasks at server root
                directory and install an stock Laravel project.
            </p>
        </blockquote>
        <p>
            <strong>Note:</strong> if you are using
            <a target="_blank" href="https://www.apachefriends.org/index.html"
                >XAMPP</a
            >
            then you need to create a virtual host for your project, you can use
            this tool
            <strong
                ><a target="_blank" href="https://github.com/abo3adel/vhost"
                    >vhost</a
                ></strong
            >.
        </p>
    </li>
    <li>
        <p>
            <strong
                >now visit your created virtual host name and you should see the
                default Laravel welcome page</strong
            >
        </p>
        <p>
            <img
                src="/img/posts/laravel-landing.png"
                alt="laravel-landing"
            />
        </p>
    </li>
    <li>
        <p><strong>Configuration</strong></p>
        <p>
            open <code data-backticks="3">.env</code> file and cofigure your
            app.
        </p>
        <pre
            class="lang-bash"
        ><code data-language="bash">
    APP_NAME=tasks (or any other name)
    DB_CONNECTION=mysql (or your installed db.. [PostgreSQL, SQLite, SQL Server])
    DB_DATABASE=(database name)
    DB_USERNAME=(your db user name)
    DB_PASSWORD=(your db password)
    </code></pre>
    </li>
    <li>
        <p>
            <strong
                >Now scaffold out the authentication system by running</strong
            >
        </p>
        <pre
            class="lang-bash"
        ><code data-language="bash">
    composer require laravel/ui --dev

    php artisan ui vue --auth
    </code></pre>
        <blockquote>
            <p>
                Even though this tutorial will not dive into authentication,
                <br data-tomark-pass="" />
                <strong>By running this command</strong> it will modify our
                views and routes and create a &nbsp;<span
                    class="text-primary"
                    data-tomark-pass=""
                    >resources/views/layouts</span
                >
                directory containing a base layout for your application.
                <br data-tomark-pass="" />
                All of these views use the
                <strong>Bootstrap CSS framework</strong>, but you are free to
                customize them however you wish.
            </p>
        </blockquote>
        <p>
            <strong>Note</strong> In order to compile our css &amp; javascript
            files you should run:
        </p>
        <pre class="lang-bash"><code data-language="bash">
    npm install

    npm run dev
    </code></pre>
    </li>
    </ol>
    <p>
    Now you can see <strong>Login|Register</strong> links on laravel default
    landing page.
    </p>
    <hr />
    <h3>And that`s it for this part, please tell me your opinion in comments.</h3>
EOD,
<<<'EOD'
    <p>
        In the previous post part 1 we learned how to install laravel and get it to
        work.
    </p>
    <p>now we will continue in our tasks application.</p>
    <p>
        I am attempting to go through the process of creating a new application just
        as I would in a real-world environment.
    </p>
    <hr />
    <p>This Tutorial is divided into parts:</p>
    <ol>
        <li>
            <a
                href="/blog/laravel-tutorial-building-your-first-laravel-application-part-1"
                >part 1</a
            >
        </li>
        <li>
            <strong
                ><span class="text-secondary" data-tomark-pass=""
                    >Part 2</span
                ></strong
            >
        </li>
        <li>
            <a
                href="/blog/laravel-tutorial-building-your-first-laravel-application-part-3"
                >part 3</a
            >
        </li>
        <li>
            <a
                href="/blog/laravel-tutorial-building-your-first-laravel-application-part-4"
                >Part 4</a
            >
        </li>
        <li>
            <a
                href="/blog/laravel-tutorial-building-your-first-laravel-application-part-5"
                >part 5</a
            >
        </li>
    </ol>
    <hr />
    <p>
        <strong>Note</strong> The complete, finished source code for this project is
        <a
            target="_blank"
            href="https://github.com/abo3adel/laravel-tutorialyour-first-app"
            >available on GitHub</a
        >.
    </p>
    <h2>Planning</h2>
    <p>
        <strong
            >For this guide, we are going to be building a to-do-list
            application.<br data-tomark-pass="" />
            Here is a list of fundamental goals for this to-do-list app:</strong
        >
    </p>
    <ol>
        <li>Display a simple list of tasks.</li>
        <li>Create a form where people can submit new tasks.</li>
        <li>Validate the form.</li>
        <li>Insert the data into the database.</li>
        <li>Add the ability manage tasks (complete task or delete it).</li>
    </ol>
    <h2>The First Steps</h2>
    <p>
        Navigate to our project folder that we created the
        <a
            target="_blank"
            href="/blog/posts/Laravel-Tutorial:-Building-Your-First-Laravel-Application"
            >previous post</a
        >
    </p>
    <blockquote>
        <p>
            Even though showing a list of tasks sounds like a small task it still
            requires a database, a database table, data in the table, a database
            query, and a view file.
        </p>
    </blockquote>
    <h2>Building the App</h2>
    <p>
        Creating a migration will be the first step.<br data-tomark-pass="" /><br />
        open your terminal and cd into your project folder, then use laravel artisan
        to create our migration:
    </p>
    <pre
        class="lang-bash"
    ><code data-language="bash"> php artisan make:migration create_tasks_table --create=tasks
    </code></pre>
    <p>
        then go and open
        <code data-backticks="3"
            >database/migrations/{{datetime}}_create_tasks_table.php</code
        >
        and let`s create out tasks table.<br data-tomark-pass="" />
    </p>
    <h3>What do we need for a task</h3>
    <ol>
        <li>task has body.</li>
        <li>
            task can be completed.<br data-tomark-pass="" /><br />
            So our table will be like
        </li>
    </ol>
    <pre
        class="lang-php"
    ><code data-language="php">
    Schema::create('tasks', function (Blueprint $table) {
        $table-&gt;bigIncrements('id');
        $table-&gt;string('body');
        $table-&gt;boolean('completed')-&gt;default(false);
        $table-&gt;timestamps();
    });
    </code></pre>
    <p>and type on terminal</p>
    <pre class="lang-bash"><code data-language="bash">php artisan migrate
    </code></pre>
    <p>
        <strong>Note</strong> if you have seen an error like
        <code data-backticks="3">Specified key was too long;</code>,
        <br data-tomark-pass="" />then you can fix it by adding this line into
        <code data-backticks="3">app/providers/AppServiceProvider.php</code>
    </p>
    <pre
        class="lang-php"
    ><code data-language="php">
    use Illuminate\Support\Facades\Schema;

    public function boot()
    {
        // -----
        Schema::defaultStringLength(169); // add this line
    }
    </code></pre>
    <p>now run</p>
    <pre class="lang-php"><code data-language="php">
    php artisan migrate:fresh
    php artisan migrate
    </code></pre>
    <p>and you table should be created correctly.</p>
    <p>
        Next, we need some data and a model to work with our database table.<br
            data-tomark-pass=""
        />Laravel provides two features which help with this:<br
            data-tomark-pass=""
        />
        <strong>the first</strong> is a
        <span class="text-info" data-tomark-pass="">database seeder</span>, which
        populates the database with data,<br data-tomark-pass="" />
        <strong>The second</strong>, the
        <span class="text-info" data-tomark-pass="">model factory files</span> that
        allow us to generate fake model data that we can
        <strong>use to fill our development database and tests</strong>:
    </p>
    <pre
        class="lang-bash"
    ><code data-language="bash"> php artisan make:model -f Task
    </code></pre>
    <p>
        The --f flag will generate a new factory file in the &nbsp;<code
            data-backticks="3"
            >database/factories</code
        >
        path, in our case a new TaskFactory file will include an empty factory
        definition for our Task model.
    </p>
    <pre
        class="lang-php"
    ><code data-language="php">
    /** @var \Illuminate\Database\Eloquent\Factory $factory */

    use App\Task;
    use Faker\Generator as Faker;

    $factory-&gt;define(Task::class, function (Faker $faker) {
        return [
            'body' =&gt; $faker-&gt;sentence,
            'completed' =&gt; false // true || false
        ];
    });

    </code></pre>
    <p>
        We use the &nbsp;<code data-backticks="3">$faker-&gt;sentence</code> to
        create random task body.<br data-tomark-pass="" /><br />
        Then we will need an database seeder to run our factory
    </p>
    <pre
        class="lang-bash"
    ><code data-language="bash">php artisan make:seeder TaskTableSeeder
    </code></pre>
    <p>
        now go to &nbsp;<code data-backticks="3">database/seeds</code> and open
        &nbsp;<code data-backticks="3">TaskTableSeeder.php</code>
    </p>
    <pre
        class="lang-php"
    ><code data-language="php">factory(Task::class, 7)-&gt;create(); // will create 7 tasks
    </code></pre>
    <p>
        In order to "activate" the TaskTableSeeder, we need to call it from the main
        &nbsp;<code data-backticks="3">database/seeds/DatabaseSeeder.php</code> run
        method:
    </p>
    <pre class="lang-php"><code data-language="php">
    public function run()
    {
        $this-&gt;call(TaskTableSeeder::class);
    }
    </code></pre>
    <p><strong>Now</strong> run seeder from terminal</p>
    <pre class="lang-bash"><code data-language="bash">
    php artisan db:seed
    </code></pre>
    <p>
        To check data you can use
        <strong
            ><a target="_blank" href="https://laravel.com/docs/6.x/artisan#tinker"
                >Laravel Tinker shell</a
            ></strong
        >
    </p>
    <pre class="lang-php"><code data-language="php">
    php artisan tinker

    Psy Shell v0.9.12 (PHP 7.3.3 — cli) by Justin Hileman

    --- App\Task::first()

    = App\Task {#3033
    id: 1,
    body: "Perferendis eligendi magnam explicabo minus deserunt.",
    completed: 1,
    created_at: "2020-01-01 02:55:21",
    updated_at: "2020-01-01 02:55:21",
    }
    </code></pre>
    <p>
        <strong
            >We now have the data and a model to interact with the database.<br
                data-tomark-pass=""
            />
            We are now ready to start building the UI to add new tasks to the
            application.</strong
        >
    </p>
    <p>feel free to comment.</p>
EOD,
<<<'EOD'
    <p>
    In the previous post part 2 we learned how to create database table for
    tasks and created a model to control the database<br
        data-tomark-pass=""
    /><br />
    and a (<span class="text-info" data-tomark-pass=""
        >model factory files</span
    >
    - <span class="text-info" data-tomark-pass="">database seeder</span>) that
    allow us to generate fake model data that we can use to fill our development
    database and tests.
    </p>
    <p>now we can continue in our to-do-list application.</p>
    <p>now we ready to start building the UI.</p>
    <hr />
    <p>This Tutorial is divided into parts:</p>
    <ol>
    <li>
        <a
            href="/blog/laravel-tutorial-building-your-first-laravel-application-part-1"
            >part 1</a
        >
    </li>
    <li>
        <a
            href="/blog/laravel-tutorial-building-your-first-laravel-application-part-2"
            >part 2</a
        >
    </li>
    <li>
        <strong
            ><span class="text-secondary" data-tomark-pass=""
                >Part 3</span
            ></strong
        >
    </li>
    <li>
        <a
            href="/blog/laravel-tutorial-building-your-first-laravel-application-part-4"
            >Part 4</a
        >
    </li>
    <li>
        <a
            href="/blog/laravel-tutorial-building-your-first-laravel-application-part-5"
            >part 5</a
        >
    </li>
    </ol>
    <hr />
    <p>
    <strong>Note</strong> The complete, finished source code for this project is
    <a href="https://github.com/abo3adel/laravel-tutorialyour-first-app"
        >available on GitHub</a
    >.
    </p>
    <h2>Routing</h2>
    <p>
    To build out a view showing the list of links, we need to update the main
    project route and also define a new route that will display our submission
    form. <br data-tomark-pass="" />We can add new routes to our application in
    the <code data-backticks="3">routes/web.php</code> file.
    </p>
    <p>In the web routes file you should see the default route below:</p>
    <pre class="lang-php"><code data-language="php">
    Route::get('/', function () {
    return view('welcome');
    });
    </code></pre>
    <blockquote>
    <p>
        <strong>Note</strong> To create a new route we can either use a
        <strong>route closure</strong> or a
        <strong>dedicated controller class</strong>. In this tutorial, we will
        use closures for our submission and index routes.
    </p>
    </blockquote>
    <p>
    First, let’s update the home route by getting a collection of tasks from the
    database and passing them to the view:
    </p>
    <pre class="lang-php"><code data-language="php">
    Route::get('/', function () {
    // load all tasks from database
    $tasks = App\Task::all();

    // inject data into the view
    return view('task.index', ['tasks' =&gt; $tasks]);
    });
    </code></pre>
    <p>Then create a blade view file</p>
    <blockquote>
    <p>
        <strong>Note</strong> Laravel uses a Template System called
        <a href="https://laravel.com/docs/6.x/blade">Blade</a>,
        <br data-tomark-pass="" />it has very useful features like (Template
        Inheritance - displaying data).
    </p>
    </blockquote>
    <p>
    <strong>Now</strong> open
    <code data-backticks="3">resources/views</code> and create new directory
    <code data-backticks="3">task</code> then inside it create new file and call
    it <code data-backticks="3">index.blade.php</code
    ><br data-tomark-pass="" />we will show the task list in this view file.
    </p>
    <p>open <code data-backticks="3">task/index.blade.php</code>:</p>
    <pre
    class="lang-php"
    ><code data-language="php">{{-- inherit from app layout --}}
    @extends('layouts/app')


    @section('content')
        &lt;table class="table table-striped table-horizontal mx-auto w-75 table-responsive text-white"&gt;
            &lt;tbody&gt;
                @foreach($tasks as $task)
                    &lt;tr class="p-3"&gt;
                        &lt;td class="py-3 w-75 align-middle bg-primary "&gt;{{$task-&gt;body}}&lt;/td&gt;
                        &lt;td class="bg-primary"&gt;&lt;/td&gt;
                        &lt;td class="py-3 bg-dark align-middle"&gt;
                            &lt;a href="#" class='btn btn-success m-'&gt;Complete&lt;/a&gt;
                            &lt;button class="btn btn-danger m-"&gt;Delete&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                @endforeach
            &lt;/tbody&gt;
        &lt;/table&gt;
    @endsection
    </code></pre>
    <p>
    the app layout file is located at
    <code data-backticks="3">resources/views/layouts</code>.
    </p>
    <p>
    <strong>Now</strong> if you visis your app name in browser you should see a
    list of tasks and buttons to modify it.
    </p>
    <h2>Completing a task</h2>
    <p>
    add new route to update the task complete column<br data-tomark-pass="" />
    </p>
    <pre class="lang-php"><code data-language="php">
    /**
     * complete a task
    */
    Route::patch('{task}', function (App\Task $task) {
        // now task will be loaded in this variable ($task)
        
        $task-&gt;completed = true; // set completed column to true

        $task-&gt;update();

        return back(); // return to all tasks page
    });
    </code></pre>
    <p>open <code data-backticks="3">task/index.blade.php</code>:</p>
    <p><strong>Replace this</strong></p>
    <pre
    class="lang-html"
    ><code data-language="html">&lt;a href="#" class='btn btn-success m-'&gt;Complete&lt;/a&gt;
    </code></pre>
    <p><strong>with</strong></p>
    <pre class="lang-php"><code data-language="php">
    @unless ($task-&gt;completed)
    &lt;!-- show this only if task not completed --&gt;
    &lt;form action="{{$task-&gt;id}}" method="post" class="d-inline"&gt;
        &lt;!-- HTML does not has patch or delete method,
        so we use laravel special function --&gt;
        @method('PATCH')
        &lt;!-- add csrf token into our form --&gt;
        @csrf

        &lt;button type='submit' class="btn btn-success mr-2"&gt;
            Complete
        &lt;/button&gt;
    &lt;/form&gt;
    @endunless
    </code></pre>
    <p>
    In the next part we will create route to delete task and a form to create a
    new one.
    </p>
EOD,
<<<'EOD'
    <p>
    In the previous post part 3, We created the to-do-list and showed it in our
    homepage.
    </p>
    <p>then we builded a form to complete any task.</p>
    <p>
    now we will build the delete task route and a form to create new task with
    validation in mind to keep form safe
    </p>
    <p>now we can finish this project.</p>
    <hr />
    <p>This Tutorial is divided into parts:</p>
    <ol>
    <li>
        <a
            href="/blog/laravel-tutorial-building-your-first-laravel-application-part-1"
            >part 1</a
        >
    </li>
    <li>
        <a
            href="/blog/laravel-tutorial-building-your-first-laravel-application-part-2"
            >part 2</a
        >
    </li>
    <li>
        <a
            href="/blog/laravel-tutorial-building-your-first-laravel-application-part-3"
            >part 3</a
        >
    </li>
    <li>
        <strong
            ><span class="text-secondary" data-tomark-pass=""
                >Part 4</span
            ></strong
        >
    </li>
    <li>
        <a
            href="/blog/laravel-tutorial-building-your-first-laravel-application-part-5"
            >part 5</a
        >
    </li>
    </ol>
    <hr />
    <p>
    <strong>Note</strong> The complete, finished source code for this project is
    <a
        target="_blank"
        href="https://github.com/abo3adel/laravel-tutorialyour-first-app"
        >available on GitHub</a
    >.
    </p>
    <h2>Deleting a task</h2>
    <p>create a route for delete:</p>
    <pre class="lang-php"><code data-language="php">
    /**
    * Delete a task
    */
    Route::delete('{task}', function (App\Task $task) {
    $task-&gt;delete();

    return back();
    });
    </code></pre>
    <p>
    and let`s create our form in
    <code data-backticks="3">task/index.blade.php</code>
    </p>
    <p><strong>Replace</strong> this line</p>
    <pre
    class="lang-php"
    ><code data-language="php">&lt;button class="btn btn-danger m-"&gt;Delete&lt;/button&gt;
    </code></pre>
    <p><strong>With this</strong></p>
    <pre
    class="lang-php"
    ><code data-language="php">
    &lt;form action="{{$task-&gt;id}}" method="post" class="d-inline"&gt;
    @method('DELETE')
    @csrf
    &lt;button type="submit" class="btn btn-danger"&gt;Delete&lt;/button&gt;
    &lt;/form&gt;
    </code></pre>
    <p>
    <strong>Now</strong> try to complete or delete a task and see if every thing
    is working correctly.
    </p>
    <h2>Adding new task</h2>
    <p>to add a new task we will add a route with post method</p>
    <pre class="lang-php"><code data-language="php">
    /**
    * Add new Task
    */
    Route::post('/', function () {
    // validate task body

    // save task
    App\Task::create([
        'body' =&gt; request('body')
    ]);

    // return to home page
    return back();
    });
    </code></pre>
    <p>
    and create new task form will be in
    <code data-backticks="3">task/index.blade.php</code>
    </p>
    <pre class="lang-php"><code data-language="php">
    @section('content')

    &lt;!-- add this --&gt;
    &lt;div class="card w-75 mx-auto mb-4"&gt;
    &lt;div class="card-header bg-primary text-light"&gt;
        Add Task
    &lt;/div&gt;
    &lt;div class="card-body"&gt;
        &lt;form action="/" method="post" 
        class="form-inline mx-auto w-75"&gt;

            @csrf

            &lt;div class="form-group w-75"&gt;
                &lt;input type="text" name="body" 
                class="form-control w-100" 
                placeholder="Task Body" /&gt;
            &lt;/div&gt;

            &lt;div class="form-group"&gt;
                &lt;button type="submit" 
                class="btn btn-primary mx-3"&gt;
                    Save
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/form&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    </code></pre>
    <h3>First validate our task</h3>
    <p>
    if you submitted new task form you will see an
    <strong
        ><a
            target="_blank"
            href="https://laravel.com/docs/6.x/eloquent#mass-assignment"
            >Mass Assignment</a
        ></strong
    >
    error like:
    </p>
    <pre
    class="lang-bash"
    ><code data-language="bash">  Add [body] to fillable property to allow mass assignment on [App\Task].
    </code></pre>
    <blockquote>
    <p>
        A
        <strong
            ><a
                target="_blank"
                href="https://laravel.com/docs/6.x/eloquent#mass-assignment"
                >Mass Assignment</a
            ></strong
        >
        error occures when we try to change a column in database after
        submitting a form.
    </p>
    </blockquote>
    <p>
    so to <strong>fix</strong> our error, open
    <code data-backticks="3">app/Task.php</code> and add this inside the class:
    </p>
    <pre
    class="lang-php"
    ><code data-language="php">  protected $fillable = ['body'];
    </code></pre>
    <p><strong>Now again</strong> try to create new task and it should work</p>
    <blockquote>
    <p>
        <strong>Note</strong> if tried to submit the form without writing any
        text it will still pass and give you an error like
        <code data-backticks="3">Column 'body' cannot be null</code
        ><br data-tomark-pass="" /><strong>So</strong> we need to validate our
        data before saving it.
    </p>
    </blockquote>
    <p>
    <strong>Read</strong> more about validation at
    <a target="_blank" href="https://laravel.com/docs/6.x/validation"
        >Laravel Validation</a
    >
    </p>
    <p>in <code data-backticks="3">routes/web.php</code></p>
    <pre class="lang-php"><code data-language="php">
    // validate task body
    $body = request()-&gt;validate([
    'body' =&gt; 'required|string|max:255'
    ])['body'];

    // save task
    App\Task::create([
    'body' =&gt; $body
    ]);
    </code></pre>
    <p>
    if you tried to resubmit the form without any data it will just return to
    homepage,<br data-tomark-pass="" /><strong>But</strong> How to show the
    errors
    </p>
    <p>
    in <code data-backticks="3">task/index.blade.php</code> add this before our
    form
    </p>
    <pre class="lang-php"><code data-language="php">
    @if ($errors-&gt;any())
    &lt;div class="alert alert-danger w-75 mx-auto font-weight-bold"&gt;
        Please fix the following errors:&lt;br /&gt;
        @foreach ($errors-&gt;all() as $err)
            &lt;span class='ml-3'&gt;* {{$err}}&lt;/span&gt;&lt;br /&gt;
        @endforeach
    &lt;/div&gt;
    @endif
    </code></pre>
    <p>and <strong>Replace</strong> this line</p>
    <pre
    class="lang-html"
    ><code data-language="html">&lt;input type="text" name="body" class="form-control w-100" placeholder="Task Body" /&gt;
    </code></pre>
    <p>with this</p>
    <pre
    class="lang-php"
    ><code data-language="php">&lt;input type="text" name="body" class="form-control w-100 {{$errors-&gt;has('body') ? 'is-invalid' : ''}}" placeholder="Task Body" /&gt;
    </code></pre>
    <p>
    <strong>Now</strong> our application should be working successfully as we
    planned,<br data-tomark-pass="" />
    In the next part i will show you how you can test this form.<br
        data-tomark-pass=""
    />
    </p>
EOD,
<<<'EOD'
    <p>
        In the previous post part 4, we created route the task deleteing route<br
            data-tomark-pass=""
        />
        and a form to create new tasks with validation in mind.
    </p>
    <p>
        but now what if after some time you wanted to add new input to the task
        form, will you test all form conditions every time you add some new
        feature.<br data-tomark-pass="" />
    </p>
    <p>Well That`s why we need to create tests.</p>
    <hr />
    <p>This Tutorial is divided into parts:</p>
    <ol>
        <li>
            <a
                href="/blog/laravel-tutorial-building-your-first-laravel-application-part-1"
                >part 1</a
            >
        </li>
        <li>
            <a
                href="/blog/laravel-tutorial-building-your-first-laravel-application-part-2"
                >part 2</a
            >
        </li>
        <li>
            <a
                href="/blog/laravel-tutorial-building-your-first-laravel-application-part-3"
                >part 3</a
            >
        </li>
        <li>
            <a
                href="/blog/laravel-tutorial-building-your-first-laravel-application-part-4"
                >part 4</a
            >
        </li>
        <li>
            <strong
                ><span class="text-secondary" data-tomark-pass=""
                    >Part 5 (Last)</span
                ></strong
            >
        </li>
    </ol>
    <hr />
    <p>
        <strong>Note</strong> The complete, finished source code for this project is
        <a
            target="_blank"
            href="https://github.com/abo3adel/laravel-tutorialyour-first-app"
            >available on GitHub</a
        >.
    </p>
    <h2>Testing the Form Submission</h2>
    <p>
        Laravel makes HTTP testing a breeze for performing integration tests against
        routes and middleware, so let’s write a few feature tests to verify our code
        works as expected.
    </p>
    <p>
        <strong>First</strong>, delete this file
        <code data-backticks="3">tests/Feature/ExampleTest.php</code>
    </p>
    <p>
        <strong>Then</strong> create our task test file<br
            data-tomark-pass=""
        /><br />
        run this command
    </p>
    <pre
        class="lang-bash"
    ><code data-language="bash">  php artisan make:test AddingNewTaskTest
    </code></pre>
    <h2>Writing our tests</h2>
    <p>
        open our created file
        <code data-backticks="3">tests/Feature/AddingNewTaskTest.php</code>, and
        remove any thing inside the class.
    </p>
    <h3>our tests</h3>
    <ul>
        <li>any one can add new task.</li>
        <li>saving fails if no task body provided.</li>
        <li>saving fails if task body exceeded max length (255 character).</li>
        <li>task is created if validation passed.</li>
    </ul>
    <p><strong>Firstly</strong> let`s start writing our first test</p>
    <pre
        class="lang-php"
    ><code data-language="php">
    use RefreshDatabase; // empty database after every task
    use WithFaker; // use faker to produce fake data

    public function testAnyOneCanCreateTask()
    {
        // create fake task body
        $task = [
            'body' =&gt; $this-&gt;faker-&gt;sentence
        ];

        // submit the new task form
        $this-&gt;post('/', $task)
            -&gt;assertRedirect('/');

        // check if new task was saved into database
        $this-&gt;assertDatabaseHas('tasks', $task);

        // visit homepage and see if this task was shown
        $this-&gt;get('/')
            -&gt;assertSee($task['body']);
    }
    </code></pre>
    <p>
        <strong>Then</strong> to see our test results, we run this command after
        every test
    </p>
    <pre class="lang-bash"><code data-language="bash">vendor\bin\phpunit
    </code></pre>
    <p>you should see now that all tests passed.</p>
    <p>
        <strong>Secondly</strong> we will test that task should not be added if no
        body provided to the form.
    </p>
    <pre
        class="lang-php"
    ><code data-language="php">
        public function testSavingFailsIfNoTaskBodyProvided()
        {
            $this-&gt;post('/', [])-&gt;assertSessionHasErrors('body');
        }
    </code></pre>
    <p>
        <strong>Thirdly</strong> we will test that task should not be added if task
        body length exceeded 255 characters.
    </p>
    <pre
        class="lang-php"
    ><code data-language="php">
        public function testSavingFailsIfTaskBodyLengthExceededMaxLength()
        {
            // create a task body with length more than 255 characters
            $task = [
                'body' =&gt; $this-&gt;faker-&gt;words(150, true)
            ];

            $this-&gt;post('/', $task)-&gt;assertSessionHasErrors('body');

            // check that this task was not saved into database
            $this-&gt;assertDatabaseMissing('tasks', $task);
        }
    </code></pre>
    <p>
        <strong>Lastly</strong> we will test that task should be saved if validation
        passed.
    </p>
    <pre
        class="lang-php"
    ><code data-language="php">
        public function testTaskIsCreatedIfValidationPassed()
        {
            $task = [
                'body' =&gt; $this-&gt;faker-&gt;text(255)
            ];

            $this-&gt;post('/', $task)
                -&gt;assertRedirect('/');

            $this-&gt;assertDatabaseHas('tasks', $task);

            $this-&gt;get('/')
                -&gt;assertSee($task['body']);
        }
    </code></pre>
    <h2>Conclusion</h2>
    <p>
        Congratulations on making it through the tutorial. This guide was designed
        to get you started on building your app, and you can use this as a building
        block to gain the skills you need to develop your application. I know this
        covers a lot of features and can be overwhelming if you are not familiar
        with the framework.
    </p>
    <p><strong>Make sure to visit these Resources</strong></p>
    <ul>
        <li>
            <a target="_blank" href="https://laravel.com/docs/6.x"
                >Laravel Documentation</a
            >
        </li>
        <li>
            <a target="_blank" href="https://laravel.com/docs/5.1/quickstart"
                >Basic Task List</a
            >
            <span class="text-muted text-sm" data-tomark-pass="">laravel 5.1</span>
        </li>
        <li>
            <a
                target="_blank"
                href="https://laravel-news.com/your-first-laravel-application"
                >LaravelNews Tutorial</a
            >
        </li>
    </ul>
EOD,
];