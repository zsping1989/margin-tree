# margin-tree
##用途
1.方便大家对数据结构数据,存入数据库
2.高效的查询效率
3.树状结构数据修改频率超级高的不建议使用

## 安装:
**要求:**

一. php >=5.6

二. 安装好composer

三. laravel/framework: 5.2.*

四. 数据表必须拥有数字类型字段:parent_id,level,left_margin,right_margin

**步骤**
$ 1 composer require zsping1989/margin-tree

`` 2 在对应的模型中添加代码 use \MarginTree\TreeModel;
