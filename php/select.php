<?php
require_once 'connect.php';
$rubbish_name=$_POST['rubbish_name'];
$conn = connectDb();
if (!$conn) {
    die("连接数据库失败: " . mysqli_connect_error());
}
else {
        $sql="select types from rubbish where name='$rubbish_name'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if($num>=1){
            for ($i=0; $i <$num ; $i++) {
                $row=mysqli_fetch_assoc($result);
                $types=$row['types'];
            }
        }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>垃圾</title>
    <style>
        div.card {
            margin:0px auto;
            width: 250px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            text-align: center;
        }

        div.header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            font-size: 40px;
        }

        div.container {
            padding: 10px;
        }
    </style>
</head>
<body align = "center">
<?php
if($num>=1)
    echo"<h2>{$rubbish_name}是{$types}</h2>";
else{
    echo "<h4>查询失败(｀・ω・´)</h4>";
}
?>

<div class="card">
    <div class="header">
        <?php
        if ($num>=1)
            echo "<h3>{$types}</h3>";

        ?>

    </div>

    <div class="container">
        <a href="../html/query.html"><p>继续查询</p></a>


    </div>
</div>

</body>
</html>