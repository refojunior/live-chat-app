
<?php 
include "../connection.php";

//PENGIRIM
$time = date('Y-m-d H:i:s');
$text = $_POST['message'];
$sender = $_SESSION['username'];

$query = "INSERT INTO chats VALUES ('', '$time', '$text', '$sender', '1')";

$db->query($query);
//PENERIMA
$receives = $_POST['receives'];
$penerima = $db->query("SELECT * FROM users WHERE name = '$receives'")->fetch();
$last_id = $db->query("SELECT count(id) as pesan_id from chats ")->fetch();

//insert penerima
$db->query("INSERT INTO receives VALUES (' ". $last_id['pesan_id'] ." ', '".$penerima['username']."' )");



?>


<!-- Message. Default to the left -->
 <!-- Message to the right -->
 <div class="direct-chat-msg right">
    <div class="direct-chat-info clearfix">
        <span class="direct-chat-name float-right"><?= $_SESSION['name']; ?></span>
        <span class="direct-chat-timestamp float-left"><?= $time ?></span>
    </div>
    <!-- /.direct-chat-info -->
    <img class="direct-chat-img" src="picture/user3-128x128.jpg" alt="message user image">
    <!-- /.direct-chat-img -->
    <div class="direct-chat-text">
        <?= $_POST['message']; ?>
    </div>
    <!-- /.direct-chat-text -->
</div>

