<html>
<head>
<title>Php Count visitor</title>
</head>
<body>
    <center><h1>Visitor counter</h1></center>
    <?php
    $ip=$_SERVER['REMOTE_ADDR'];
    echo "Your Ip is : " .$ip;
    $conn = mysqli_connect('localhost', 'root', '', 'count_url');
    $query = "UPDATE visitors SET nb_click = nb_click + 1 where ip='$ip'";
    mysqli_query($conn, $query);
    ?>
</body>
</html>