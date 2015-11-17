<?php
include dirname(__FILE__)."/config.php";



// set up the environment
session_start();
$view = "default";
$views = array('commit','pull','push','status','branch','checkout','add','deploy');
if (in_array($_REQUEST['view'],$views)) $view = $_REQUEST['view'];
include dirname(__FILE__)."/Git.php";

if ($view != 'default')
{
	$repo = Git::open(REPO);
        $repo->setenv('user.name',GIT_NAME); 
        $repo->setenv('user.email',GIT_EMAIL); 
}


switch ($view) {
	case "status":	
		$out = $repo->status();
	
	break;
	
	case "add":
		$out = $repo->add(".");
		
	case "commit";
		$message = ($_REQUEST['message'])?$_REQUEST['message']:'No Commit message supplied';
		$active_branch = $repo->active_branch();
		$out .= $repo->commit($message);
		if ($_REQUEST['pushit'])
		{
			$out .= $repo->push('origin',$active_branch);
		}
		$view = "commit";
	break;
	
	case "branch":
		// do stuff if needed
		if ($_POST['checkout'])
		{
			$out = $repo->checkout($_POST['checkout']);	
			$out .= $repo->status();
		}		
		if ($_POST['pull'])
		{
			$out = $repo->pull('origin',$_POST['pull']);	
			$out .= $repo->status();
		}		
		if ($_POST['push'])
		{
			$out = $repo->push('origin',$_POST['push']);	
			$out .= $repo->status();
		}		
		$branches = $repo->list_branches();
		$active_branch = $repo->active_branch();

	break;
	
	case "deploy":

		$branches = $repo->list_branches();		
		if (in_array($_POST['deploy'],$branches))
		{
			$branch = $_POST['deploy'];
			$cmd =  'echo "/home/robert/web/deploy/deploy.sh ' . $branch . '" | at now';
			exec($cmd);					
			$message = "Deploy Script launched for " . $branch . " branch - this may take a little bit";
		}


	break;
		
	
	

}


