## 主页模块
####主页：`/resources/views/home/index.blade.php`

-  Output：
    1. 返回10道真题，需提供题目描述。
    2. 返回10道难题，需提供题目描述。

## 认证模块
####登录页：`/resources/views/auth/login.blade.php`

- Input:
    1. email
    2. password
    3. remember
- Output：
    1. 错误时返回：错误信息
- Return:
    1. 成功返回：用户个人页
    2. 失败返回：登陆页
    
####注册页：`/resources/views/auth/register.blade.php`

- Input:

## 用户模块

用户个人页：`/resources/views/user/show.blade.php`

- Output:
    1. 返回当前登录用户的个人信息
    
    
##问题模块

####测试页：`/resources/views/questions`

- input:
    1. 选修的章节
    2. 选择答案
    3. 点击提交按钮
    4. 把题目添加或删除出收集箱
- Output
    1. 返回十道题，需提供题目描述
     2. 判题，返回错误的题目的编号,标记出错误的题目，返回所有题目的答案


####综合页 ：

- Input：
     1. 选修的章节
     2. 选择排序方式（入库时间，被收集次数，难度系数）
     3. 把题目添加或删除出收集箱
- Output：
    1. 返回通过排序后对应知识的题目及答案

####试题页--真题：

- Output:
     1. 试卷难度，试卷价值，发布时间，发布省份
     2. 所有真题
     3. 下载
- Return:
    1. 点击成功返回：试卷页
    2. 点击失败返回：错误信息

####试卷页--模拟卷

- Output:
     1. 试卷难度，试卷价值，发布时间，发布省份
	2. 所有模拟卷
	3. 提供下载
- Return:
	1. 点击成功返回：试卷页
	2. 点击失败返回：错误信息

####收集箱：

- Input:
	1. 选择题目类型
	2.添加或删除出收集箱
- Output:
	1. 对应类型的题目

