<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Models' . DIRECTORY_SEPARATOR . 'DB.php';

session_start();

$isRetweet = array_key_exists('retweet_id', $_REQUEST);
$user_id = htmlspecialchars($_SESSION['userid'] ?? 107);
$tweet_content = htmlspecialchars($_REQUEST['tweet_content'] ?? '');
$today = date("Y-m-d H:i:s");
$retweetId = $_REQUEST['retweet_id'] ?? 0;
if (isset($user_id, $retweetId) && $isRetweet == true) {
  $dbh = DB::connection();
  $req = $dbh->prepare(
    'INSERT INTO retweet (user_id, tweet_id, content, date_retweet, visibility, accessibility, message)
  VALUES (:user_id, :tweet_id, :content, :date_retweet, DEFAULT, DEFAULT, NULL);
  '
  );
  $req->bindValue(':user_id', $user_id);
  $req->bindValue(':date_retweet', $today);
  $req->bindValue(':tweet_id', $retweetId);
  $req->bindValue(':content', $tweet_content ?? 'Tweet content here');
  $req->execute();
  echo 'Insert retweet seems ok';
}

if (isset($user_id, $tweet_content) && $isRetweet != 1) {
  $dbh = DB::connection();
  $req = $dbh->prepare(
    'INSERT INTO tweet (user_id, tweet_date, content, media, visibility, accessibility, tag)
  VALUES (:user_id, :tweet_date, :content, NULL, DEFAULT, DEFAULT, NULL);
  '
  );
  $req->bindValue(':user_id', $user_id);
  $req->bindValue(':tweet_date', $today);
  $req->bindValue(':content', $tweet_content);
  $req->execute();
  echo 'Insert tweet seems ok';
}