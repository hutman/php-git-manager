<h1>Active Branch: <?php echo $active_branch?></h1>
<pre><?php echo $out?></pre>

<table class="table table-striped">
<thead><tr><th>Branch</th></tr></thead>
<tbody>
<?php foreach ($branches as $branch) { ?>
<tr>
<td><?php echo $branch?></td>
<td><button class="btn btn-success checkout" rel="<?php echo $branch?>" >Checkout</button>
<?php if ($branch == $active_branch) { ?>
<button class="btn btn-success pull" rel="<?php echo $branch?>" >Pull</button>
<button class="btn btn-success push" rel="<?php echo $branch?>" >Push</button>
<?php } ?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<form method=post action="index.php" id="form1">
<input type="hidden" name="view" value="branch">
<input type="hidden" name="checkout" value="" id="checkout">
<input type="hidden" name="pull" value="" id="pull">
<input type="hidden" name="push" value="" id="push">
</form>
<script>
$(".checkout").click(function(){
	var branch = $(this).attr('rel');
	$("#checkout").val(branch);
	$("#form1").submit();	
});
$(".pull").click(function(){
	var branch = $(this).attr('rel');
	$("#pull").val(branch);
	$("#form1").submit();	
});
$(".push").click(function(){
	var branch = $(this).attr('rel');
	$("#push").val(branch);
	$("#form1").submit();	
});
</script>

