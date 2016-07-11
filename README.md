# margin-tree
##用途
```
1.方便大家对数状结构数据,存入数据库

2.高效的查询效率

3.树状结构数据修改频率超级高的不建议使用
```
![index](http://a1.qpic.cn/psb?/V11BOt0S3iPkBE/AyWIH7QS85GlDZlPBXNIzmdzPRs4pq4O9kvH1DRpPHw!/b/dAsBAAAAAAAA&amp;bo=rASAAgAAAAADBwg!&amp;rf=viewer_4)

## 安装:
**要求:**
- php >=5.6
- 安装好composer
- laravel/framework: 5.2.*
- 数据表必须拥有数字类型字段:parent_id,level,left_margin,right_margin

**步骤**
```shell
# 安装
composer require zsping1989/margin-tree

```

```php
// 在config\app.php 文件的providers数组中加入, 注入容器
MarginTree\Providers\MarginTreeServiceProvider::class,

// 在对应的模型中加入
use \MarginTree\TreeModel;
```