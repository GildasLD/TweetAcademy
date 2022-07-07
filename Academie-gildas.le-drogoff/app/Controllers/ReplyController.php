<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR . 'Reply.php';
if (!isset($_SESSION['userid'])) {
    $_SESSION['userid'] = 107;
}
if ($_REQUEST) {
    $message_content = $_REQUEST['message_content'];
    $recipient = $_REQUEST['recipient'];
    $tweet_id_reply = $_REQUEST['tweet_id_reply'];
    $today = date("Y-m-d H:i:s");
    $reply_date = $today;
    $reply = new Reply;
    $reply->insertReply($_SESSION['userid'], $tweet_id_reply, $message_content);
}
