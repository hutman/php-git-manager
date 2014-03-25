<?
// do a bunch of stuff
include dirname(__FILE__)."/controller.php";
?>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/simplex/bootstrap.min.css" rel="stylesheet">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<style>
body {
  min-height: 2000px;
  padding-top: 70px;
}
</style>
</head>
<body>


    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Git Control Panel</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Commands <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?view=status">Status</a></li>
                <li><a href="?view=branch">Branch</a></li>
                <? if (defined('DEPLOY_SCRIPT')) { ?><li><a href="?view=deploy">Deploy</a></li><? } ?>         
              </ul>
            </li>
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
      <? if ($message) { ?>
      <div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
<?=$message?>
</div>
     	<? } ?>
      	<? include dirname(__FILE__)."/view." . $view . ".php"; ?>
      </div>

    </div> <!-- /container -->




</body>
</html>