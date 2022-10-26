<div style="text-align:left;">
<span>页面加载时长：{number_format((microtime(true) - $_SERVER['_start_time']), 3)} 秒</span>
<span>数据库查询：{$_SERVER['_query_count']} 次</span>
<span>占用内存：{round((memory_get_usage() - $_SERVER['_memory_usage'])/1024/1024,2)} MB</span>
</div>
