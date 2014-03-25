<h1>Deploy</h1>
<p>Select a branch you'd like to deploy to the live site.</p>

<form action="index.php" method="post">
<input type="hidden" name="view" value="deploy">


<div class="row">
<div class="col-lg-6">
<select class="form-control" name="deploy">
<? foreach ($branches as $branch) { ?>
<option value="<?=$branch?>"><?=$branch?></option>
<? } ?>
</select>
</div>
<div class="col-lg-3">
<input type="submit" class="btn btn-success" value="Deploy Branch">
</div>
</div>
</form>

<br><br>
<p>* deploying to the live site will overwrite all files tracked in git. Files will NOT be removed from the live site if they have been added outside of git - or if the git repository no longer contains those files.</p>


