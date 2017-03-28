## 主页模块
主页：`/resources/views/home/index.blade.php`

- Output：
    1. 返回10道真题，需提供题目描述。
    2. 返回10道难题，需提供题目描述。

## 认证模块
登录页：`/resources/views/auth/login.blade.php`
- Input:
    1. email
    2. password
    3. remember
- Output：
    1. 错误时返回：错误信息
- Return:
    1. 成功返回：用户个人页
    2. 失败返回：登陆页
    
注册页：`/resources/views/auth/register.blade.php`
- Input:

## 用户模块
用户个人页：`/resources/views/user/show.blade.php`
- Output:
    1. 返回当前登录用户的个人信息
    
    
## 问题模块