<?
include dirname(__FILE__)."/config.php";
include dirname(__FILE__)."/Git.php";

$repo = Git::open(REPO);
$repo->pull();
