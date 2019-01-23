<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    #content{
        width: 300px;
        height: 100px;
        background: #ccc;
    }
</style>
<body>
<form id="content" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div id="text_words"></div>
    <div>
    <h1> Từ Điển Anh-Việt </h1>
    <input type="text" name="search" placeholder="Nhap tu can tim"><br/>
    <input type="submit" id="submit" value="Search" ><br/>
    </div>
</form>
<?php
$dictionary = array(
    "hello"=>"xin chao",
    "goodbye"=>"tam biet",
    "sorry"=>"xin loi",
    "nothing"=>"khong co gi",
);
if($_SERVER[REQUEST_METHOD]=="POST"){
    $searchword = $_POST["search"];
    $flag=0;
    foreach ($dictionary as $word => $description){
        if($word ==$searchword){
            echo "Tu: ". $word. ".<br/>Nghia cua tu: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    }
    if(flag ==1){
        echo "Khong thay tu can tra";
    }
}
?>
</body>
</html>
