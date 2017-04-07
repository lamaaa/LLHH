<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'is_admin' => false,//
        'activated' => true,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->defineAs(App\Models\Question::class, 'choice', function (Faker\Generator $faker) {
   $date_time = $faker->date . ' ' . $faker->time;

   return [
       'description' => '<p>已知抛物线<i><span>C</span></i>的方fdkas fkdas flkdas fljdas fkldas fkl dasfj dkasfjkldas fkldas fkldas fdfaadsf adsf das fdas fdasfdas程为<i><span>x</span></i><sup><span>2</span></sup>＝<span><i>y</i></span>，过点<i><span>A</span></i><span>(0</span>，－<span>1)</span>和点<i><span>B</span></i><span>(<i>t,</i>3)</span>的直线与抛物线<i><span>C</span></i>没有公共点，则实数<i><span>t</span></i>的取值范围是<span>(</span>　　<span>)</span></p>    <p><span>A</span>．<span>(</span>－<span>∞</span>，－<span>1)</span>∪<span>(1</span>，＋<span>∞)</span></p>    <p><span>B.</span><span> <img width=185 height=49  src=\'http://gzsx.cooco.net.cn/files/down/test/2017/03/15/23/2017031523111295864637.files/image006.jpg\'></span></p>    <p><span>C</span>．<span>(</span>－<span>∞</span>，－<span>2</span><span><img width=21 height=27  src=\'http://gzsx.cooco.net.cn/files/down/test/2017/03/15/23/2017031523111295864637.files/image007.jpg\'></span><span>)</span>∪<span>(2</span><span><img width=21 height=27  src=\'http://gzsx.cooco.net.cn/files/down/test/2017/03/15/23/2017031523111295864637.files/image008.jpg\'></span>，＋<span>∞)</span></p>    <p><span>D</span>．<span>(</span>－<span>∞</span>，－<span><img width=21  height=27 src=\'http://gzsx.cooco.net.cn/files/down/test/2017/03/15/23/2017031523111295864637.files/image009.jpg\'></span><span>)</span>∪<span>(</span><span><img width=21  height=27 src=\'http://gzsx.cooco.net.cn/files/down/test/2017/03/15/23/2017031523111295864637.files/image010.jpg\'></span>，＋<span>∞)</span></p>',
       'difficulty' =>  rand(1, 5),
       'chapter_id' => rand(1, 50),
       'answer' => 'A',
       'source' => '江西省新余市第四中学2017届高三数学上学期第二次段考试题 理试卷及答案',
       'collected_times' => rand(1, 200),
       'mistake_times' => rand(1, 2000),
       'type' => 1,
       'created_at' => $date_time,
       'updated_at' => $date_time,
   ];
});

$factory->defineAs(App\Models\Question::class, 'completion', function (Faker\Generator $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'description' => "<p><span>.</span><span>对实数<sub><span><img width='13' height='15' id='对象 83' src='http://gzsx.cooco.net.cn/files/down/test/2017/04/02/03/2017040203222313874494.files/image053.gif'></span></sub>和<sub><span><img width='13' height='19' id='对象 84' src='http://gzsx.cooco.net.cn/files/down/test/2017/04/02/03/2017040203222313874494.files/image109.gif'></span></sub>，定义运算<sub><span><img width='167' height='48' id='对象 85' src='http://gzsx.cooco.net.cn/files/down/test/2017/04/02/03/2017040203222313874494.files/image110.gif'></span></sub></span></p><p><span>设函数<sub><span><img width='169' height='24' id='对象 86' src='http://gzsx.cooco.net.cn/files/down/test/2017/04/02/03/2017040203222313874494.files/image111.gif'></span></sub><span> <sub><img width='39' height='19' id='对象 40' src='http://gzsx.cooco.net.cn/files/down/test/2017/04/02/03/2017040203222313874494.files/image112.gif'></sub>.</span>若函数<sub><span><img width='88' height='21' id='对象 41' src='http://gzsx.cooco.net.cn/files/down/test/2017/04/02/03/2017040203222313874494.files/image113.gif'></span></sub>的图象与<sub><span><img width='13' height='15' id='对象 42' src='http://gzsx.cooco.net.cn/files/down/test/2017/04/02/03/2017040203222313874494.files/image114.gif'></span></sub>轴恰有三个公共点，则实数<sub><span><img width='17' height='18' src='http://gzsx.cooco.net.cn/files/down/test/2017/04/02/03/2017040203222313874494.files/image115.gif'></span></sub>的取值范围是<u><span>__ ___</span></u>．<span> </span></span></p>",
        'difficulty' =>  rand(1, 5),
        'chapter_id' => rand(1, 120),
        'answer' => '<p><u><span>__<i><span>(-2</span></i></span></u><i><u><span>，<span>-1]</span></span></u></i><u><span>___</span></u><span>．<span> </span></span></p>',
        'source' => '吉林省油田实验中学 高二数学上学期期末考试试题 理试卷及答案',
        'collected_times' => rand(1, 200),
        'mistake_times' => 1,
        'type' => 2,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->defineAs(App\Models\Question::class, 'calculation', function (Faker\Generator $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'description' => '<p><span>已知集合<span>A={x|1≤x</span>＜<span>4}</span>，<span>B={x|x</span>﹣<span>a</span>＜<span>0}</span>，</span></p><p><span>（<span>1</span>）当<span>a=3</span>时，求<span>A∪B</span>；<sub><span><img width=\'75\' height=\'23\' src=\'http://gzsx.cooco.net.cn/files/down/test/2017/04/02/03/2017040203222313874494.files/image116.gif\'></span></sub></span></p><p><span>（<span>2</span>）若<span>A</span></span><span>⊆</span><span>B</span><span>，求实数<span>a</span>的取值范围．<span><img width=\'2\' height=\'3\' src=\'http://gzsx.cooco.net.cn/files/down/test/2017/04/02/03/2017040203222313874494.files/image041.gif\'></span></span></p>',
        'difficulty' =>  rand(1, 5),
        'chapter_id' => rand(1, 120),
        'answer' => '<p><i><span>解析：<span>&nbsp; </span>（<span>1</span>）<span>&nbsp;&nbsp; <sub><img width=\'117\' height=\'27\' src=\'http://gzsx.cooco.net.cn/files/down/test/2017/04/02/03/2017040203222313874494.files/image127.gif\'></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>……<span>3</span>分</span></i></p><p><i><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <sub><img width=\'168\' height=\'27\' src=\'http://gzsx.cooco.net.cn/files/down/test/2017/04/02/03/2017040203222313874494.files/image128.gif\'></sub>&nbsp;&nbsp;&nbsp; </span></i><i><span>……<span>3</span>分</span></i></p><p><i><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></i><i><span>（<span>2</span>）<span>&nbsp;&nbsp; <sub><img width=\'39\' height=\'19\' src=\'http://gzsx.cooco.net.cn/files/down/test/2017/04/02/03/2017040203222313874494.files/image129.gif\'></sub>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>……<span>4</span>分</span></i></p>',
        'source' => '吉林省油田实验中学 高二数学上学期期末考试试题 理试卷及答案',
        'collected_times' => rand(1, 200),
        'type' => 3,
        'mistake_times' => 0,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(\App\Models\Chapter::class, function (Faker\Generator $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'name' => '2.1常用逻辑用语',
        'Part_id' => rand(1, 5),
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(\App\Models\Part::class, function (Faker\Generator $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'name' => '选修1系列',
        'Module_id' => 1,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->define(\App\Models\Module::class, function (Faker\Generator $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'name' => '高中数学',
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});