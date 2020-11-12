### 基于TP5的 经典 RBAC demo
思路：基控制器的initialize方法中根据登录成功存储到session中的userId判断权限，没有权限则禁止访问

- 权限管理精确到控制器下的方法
- rbac.sql 用到的五张表
>注：   
>1. PHP7.4下，TP5的Query类第400行左右，需要把花括号改为中括号   

