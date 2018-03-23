<?php
$con = mysql_connect("localhost","root","root");
/* localhost 是服务器 root 是用户名 abc123 是密码*/
if (!$con)
{
    die("数据库服务器连接失败");
}

/* 这就是一个逻辑非判断，如果错误就输出括号里的字符串 */

@mysql_select_db("phpexam", $con);
/* 选择mysql服务器里的一个数据库,假设你的数据库名为 a*/

$sql = "SELECT * FROM score";
/* 定义变量sql, "SELECT * FROM qq" 是SQL指令，表示选取表qq中的数据 */

$result = mysql_query($sql); //执行SQL语句，获得结果集

/*下面就是选择性的输出打印了，由于不清楚你的具体情况给你个表格打印吧*/

//打印表格
while( $row = mysql_fetch_array($result) )

    /*逐行获取结果集中的记录，得到数组row */

{
    /*数组row的下标对应着数据库中的字段值 */

    $id = $row['user_id'];
    $name = $row['time'];
    $sex = $row['score'];

}
?>