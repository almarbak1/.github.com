<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>저장 페이지 처리</title>
</head>
<body>
    <?PHP
      $con = mysqli_connect("localhost""root","apmsetup","test");
      if(mysqli_connect_error(){
        echo "SQL이 재대로 연결되지 않았습니다." ,
        mysqli_connect_error();
      } else {
        mysqli_query($con, "INSERT INTO mem2(name, age) VALUES ('$_POST[name]', '$_POST[age]')");
      }
      mysqli_close($con);
      echo htmlspecialchars($_POST['name'])."씨 안녕하세요~!";
      echo "<br> 당신의 나이는 ".(int)$_POST['age']."세 입니다.";
      )
    ?>
</body>
</html>
