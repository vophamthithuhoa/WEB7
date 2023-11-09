<?php
$conn = mysqli_connect("localhost", "root", "", "phantrang");
if(isset($_GET['page'])){
$page = $_GET['page'];
}else{
$page = 4;
}
$limit = 3; // 3 title per page
$start = ($page - 1) * $limit; //(4-1)*3=9
$total_title = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tintuc"));
$total_page = $total_title/$limit;
$query = "SELECT * FROM tintuc LIMIT ".$start.", ".$limit; //$query = /... 9,3
$result = mysqli_query($conn, $query);
echo "<div class=\"title\">";
while($row = mysqli_fetch_array($result)){
echo '<a href="#">'.$row['id'].'. '.$row['title'].'</a><br />';
}
echo "</div>";
echo "<div class=\"pagination\">";
for($i = 1; $i <= $total_page; $i++){
echo '<a href="phantrang.php?page='.$i.'">'.$i.'</a> | ';
}
echo "</div>";
?>
<style type="text/css">
body{
 background: #ecf0f1;
}
a:link, a:visited{
 text-decoration: none;
}
a:hover{
 color: #f00;
}
.title, .pagination{
 width: 600px;
 margin: 0 auto;
 margin-bottom: 20px;
}
.title{
 background: #3498db;
 padding: 20px;
 line-height: 1.5;
}
.title a{
 color: #fff;
}
.title a:hover{
 color: #e67e22;
}
</style>
