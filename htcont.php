                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    $user = $_SESSION['username'];
}

include 'dbconfigg.php';
$sql = "SELECT msg, name, stime FROM chats";
$res = "";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    
    while($row = mysqli_fetch_assoc($result))
    {
        
        $res = $res . '<div class="containers"><b>';
        $res = $res . $row['name'] ;
        
        $res = $res . "&nbsp : </b><p>" . $row['msg'];
        
        $res = $res . '</p> <span class="time-right">' . $row["stime"] . '</span></div>';
    }
}
echo $res;
?>