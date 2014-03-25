<h1>Status</h1>
<pre><?=$out?></pre>
<? if (!stristr($out,'nothing to commit')) { ?>

<h2>Commit changes</h2>
<p>If you see any files that you don't want to add you should adjust your .gitignore file or remove unwanted files. Try not to check anything huge into the git repo and play nice.</p>
<form method=post action="index.php" id="form1">
<input type="hidden" name="view" value="status" id="stat">
<input type="text" class="form-control" name="message" placeholder="Enter your commit message here"><br>
<button type="button" id="add_and_commit" class="btn btn-primary">Add new files and commit</button>
<button type="button" id="commit" class="btn btn-success">Commit changed files only</button>
</form>
<script>
$(document).ready(function(){
	$("#add_and_commit").click(function(){
			$("#stat").val('add');
			$("#form1").submit();
	});
	$("#commit").click(function(){
			$("#stat").val('commit');
			$("#form1").submit();
	});

});
</script>
<? } ?>