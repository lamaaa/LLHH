URL: /questions

控制器：QuestionController

动作：index

返回页面：`resources/views/questions/list.blade.php`

返回数据：
```php
$modules[]{ // 所有的模块
    $module{
        "id" : int,
        "name" : string, // 模块名称，如“高中数学”
        "created_at": timestamp, // 模块创建时间
        "updated_at": timestamp, // 模块更新时间
        parts[]{ // 该模块拥有的系列，如“选修1系列”
            $part{
                "id" : int,
                "name" : string, // 系列名称，如“选修1系列”
                "module_id" : int, // 该系列所在的模块id，如“1”
                "created_at" : timestamp, // 系列创建时间
                "updated_at" : timestamp, // 系列更新时间
                chapters[]{ // 该系列拥有的章节，如“第一章 集合与函数的概念”
                     $chapter{
                         "id" : int,
                         "name" : string, // 章节名称，如“第一章 集合与函数的概念”
                         "part_id" : int // 该章节所在的系列id，如“1”
                         "created_at" : timestamp, // 章节创建时间
                         "updated_at" : timestamp, // 章节更新时间
                         questions[]{ // 该章节拥有的问题
                             $question{
                                 "id" : int,
                                 "description" : text, // 问题描述，包含html标签，使用需用{!!!!}
                                 "difficulty" : int， // 问题难度，取值1-5
                                 "chapter_id" : int， // 该问题所在章节id，如“1”
                                 "source" : string， // 问题来源
                                 "answer" : text， // 问题答案
                                 "type" : int， // 问题类型 1为选择题，2为填空题，3为计算题
                                 "is_old" : boolean， // 是否为真题
                                 "mistake_times" : int, // 该问题错过的次数
                                 "created_at" : timestamp, // 问题创建时间
                                 "updated_at" : timestamp, // 问题更新时间
                             } 
                         }
                     } 
                }
            }
        } 
    }   
}

questions[]{ // 所有的问题
    $question{
        "id" : int,
        "description" : text, // 问题描述，包含html标签，使用需用{!!!!}
        "difficulty" : int， // 问题难度，取值1-5
        "chapter_id" : int， // 该问题所在章节id，如“1”
        "source" : string， // 问题来源
        "answer" : text， // 问题答案
        "type" : int， // 问题类型 1为选择题，2为填空题，3为计算题
        "is_old" : boolean， // 是否为真题
        "mistake_times" : int, // 该问题错过的次数
        "created_at" : timestamp, // 问题创建时间
        "updated_at" : timestamp, // 问题更新时间
    } 
}
```