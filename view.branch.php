<h1>Active Branch: <?=$active_branch?></h1>
<pre><?=$out?></pre>

<table class="table table-striped">
<thead><tr><th>Branch</th></tr></thead>
<tbody>
<? foreach ($branches as $branch) { ?>
<tr>
<td><?=$branch?></td>
<td><button class="btn btn-success checkout" rel="<?=$branch?>" >Checkout</button>
<? if ($branch == $active_branch) { ?>
<button class="btn btn-success pull" rel="<?=$branch?>" >Pull</button>
<button class="btn btn-success push" rel="<?=$branch?>" >Push</button>
<? } ?>
</td>
</tr>
<? } ?>
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

