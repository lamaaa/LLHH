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
       'description' => '<p>已知抛物线<i><span>C</span></i>的方程为<i><span>x</span></i><sup><span>2</span></sup>＝<span><i>y</i></span>，过点<i><span>A</span></i><span>(0</span>，－<span>1)</span>和点<i><span>B</span></i><span>(<i>t,</i>3)</span>的直线与抛物线<i><span>C</span></i>没有公共点，则实数<i><span>t</span></i>的取值范围是<span>(</span>　　<span>)</span></p>    <p><span>A</span>．<span>(</span>－<span>∞</span>，－<span>1)</span>∪<span>(1</span>，＋<span>∞)</span></p>    <p><span>B.</span><span> <img width=185 height=49  src=\'http://gzsx.cooco.net.cn/files/down/test/2017/03/15/23/2017031523111295864637.files/image006.jpg\'></span></p>    <p><span>C</span>．<span>(</span>－<span>∞</span>，－<span>2</span><span><img width=21 height=27  src=\'http://gzsx.cooco.net.cn/files/down/test/2017/03/15/23/2017031523111295864637.files/image007.jpg\'></span><span>)</span>∪<span>(2</span><span><img width=21 height=27  src=\'http://gzsx.cooco.net.cn/files/down/test/2017/03/15/23/2017031523111295864637.files/image008.jpg\'></span>，＋<span>∞)</span></p>    <p><span>D</span>．<span>(</span>－<span>∞</span>，－<span><img width=21  height=27 src=\'http://gzsx.cooco.net.cn/files/down/test/2017/03/15/23/2017031523111295864637.files/image009.jpg\'></span><span>)</span>∪<span>(</span><span><img width=21  height=27 src=\'http://gzsx.cooco.net.cn/files/down/test/2017/03/15/23/2017031523111295864637.files/image010.jpg\'></span>，＋<span>∞)</span></p>',
       'difficulty' =>  '3',
       'topic' => '圆锥曲线与方程',
       'answer' => 'A',
       'source' => '江西省新余市第四中学2017届高三数学上学期第二次段考试题 理试卷及答案',
       'is_old' => false,
       'mistake_times' => 0,
       'type' => 1,
       'created_at' => $date_time,
       'updated_at' => $date_time,
   ];
});

$factory->defineAs(App\Models\Question::class, 'completion', function (Faker\Generator $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'description' => '<p>点<i><span>P</span></i><span>(8,1)</span>平分双曲线<i><span>x</span></i><sup><span>2</span></sup>－<span>4<i>y</i><sup>2</sup></span>＝<span>4</span>的一条弦，则这条弦所在直线的方程是<span>_ _____________</span>．</p>',
        'difficulty' =>  '3',
        'topic' => '圆锥曲线与方程',
        'answer' => '<p><sub><span><img width="171" height="24" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image104.gif"></span></sub></p>',
        'source' => '吉林省油田实验中学 高二数学上学期期末考试试题 理试卷及答案',
        'is_old' => false,
        'mistake_times' => 0,
        'type' => 2,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});

$factory->defineAs(App\Models\Question::class, 'calculation', function (Faker\Generator $faker) {
    $date_time = $faker->date . ' ' . $faker->time;

    return [
        'description' => '<p><span>已知命题<sub><span><img width="116" height="25" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1315" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image062.gif"></span></sub>有两个不等的实根，命题<sub><span><img width="145" height="27" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image063.gif"><img width="25" height="19" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image064.gif"></span></sub>无实根，若<span>“<sub><img width="38" height="18" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1317" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image065.gif"></sub>”</span>为假命题，<span>“<sub><img width="38" height="18" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1318" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image066.gif"></sub>”</span>为真命题，求实数<sub><span><img width="18" height="15" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1319" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image067.gif"></span></sub>的取值范围．</span></p>',
        'difficulty' =>  '3',
        'topic' => '1.1常用逻辑用语',
        'answer' => '<div id="daan-465943" class="daan"><p><sub><span><img width="49" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1320" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image113.gif"></span></sub><span>或<sub><span><img width="40" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1321" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image114.gif"></span></sub>或<sub><span><img width="61" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1322" src="/files/down/test/2017/02/25/23/2017022523263959928775.files/image115.gif"></span></sub></span></p>    <p><span>【解析】当<sub><span><img width="16" height="18" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1330" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image116.gif"></span></sub>为真时，<sub><span><img width="96" height="21" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1331" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image117.gif"></span></sub>，</span><span>∴</span><sub><span><img width="41" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1332" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image118.gif"></span></sub><span>或<sub><span><img width="49" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1333" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image113.gif"></span></sub>，</span></p>    <p><span>当<sub><span><img width="16" height="18" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1334" src="/files/down/test/2017/02/25/23/2017022523263959928775.files/image116.gif"></span></sub>为假时，<sub><span><img width="73" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1335" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image119.gif"></span></sub><span>.</span>当<sub><span><img width="13" height="18" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1336" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image120.gif"></span></sub>为真时，<sub><span><img width="152" height="29" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1337" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image121.gif"></span></sub>，解得<sub><span><img width="60" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1338" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image122.gif"></span></sub>，</span></p>    <p><span>当<span><img width="2" height="1" src="/files/down/test/2017/02/25/23/2017022523263959928775.files/image123.gif"><sub><img width="13" height="18" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1339" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image120.gif"></sub></span>为假时，<sub><span><img width="37" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1340" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image124.gif"></span></sub>或<sub><span><img width="40" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1341" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image114.gif"></span></sub><span>.</span>依题意得<sub><span><img width="29" height="18" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1342" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image125.gif"></span></sub>一真一假．</span></p>    <p><span>若<sub><span><img width="16" height="18" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1343" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image116.gif"></span></sub>真<sub><span><img width="13" height="18" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1344" src="/files/down/test/2017/02/25/23/2017022523263959928775.files/image120.gif"></span></sub>假，则<sub><span><img width="49" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1345" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image113.gif"></span></sub>或<sub><span><img width="40" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1346" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image114.gif"></span></sub>．若<sub><span><img width="13" height="18" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1347" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image120.gif"></span></sub>真<sub><span><img width="16" height="18" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1348" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image116.gif"></span></sub>假，则<sub><span><img width="61" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1349" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image115.gif"></span></sub>．</span></p>    <p><span>综上，实数<sub><span><img width="18" height="15" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1350" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image067.gif"></span></sub>的取值范围是<sub><span><img width="49" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1351" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image113.gif"></span></sub>或<sub><span><img width="40" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1352" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image114.gif"></span></sub>或<sub><span><img width="61" height="19" id="_x0000a8315776-0f4b-4039-86bc-c762de1bbdbd_i1353" src="http://gzsx.cooco.net.cn/files/down/test/2017/02/25/23/2017022523263959928775.files/image115.gif"></span></sub><span>.</span></span></p>    <p></p></div>',
        'source' => '吉林省油田实验中学 高二数学上学期期末考试试题 理试卷及答案',
        'is_old' => false,
        'type' => 3,
        'mistake_times' => 0,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});