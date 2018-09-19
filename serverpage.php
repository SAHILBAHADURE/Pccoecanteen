<?php
echo "hello";
$username=$_POST['email'];
$password=$_POST['password'];
if(!empty($username)||!empty($password))
{
    $host="shareddb-g.hosting.stackcp.net";
    $dbusername="usersdb-3237b73b";
    $dbpass="sahillihas20";
    $dbname="usersdb-3237b73b";
    $conn=new mysqli($host,$dbusername,$dbpass,$dbname);
    if(mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else{
        $SELECT="SELECT email from users where email=? limit=1";
        $INSERT="INSERT INTO  users (email,password) values(?,?)";
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        if($rnum==0)
        {
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ss",$username,$password);

            $stmt->execute();
            echo "New record inserted successfully";
        }
        else{
            echo "Not available";
        }
        $stmt->close();
        $conn->close();

    }



}
else{
    echo "All details are required!";
}

?>
