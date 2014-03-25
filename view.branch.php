<h1>Active Branch: <?=$active_branch?></h1>

<table class="table table-striped">
<thead><tr><th>Branch</th></tr></thead>
<tbody>
<? foreach ($branches as $branch) { ?>
<tr>
<td><?=$branch?></td>
<td><button class="btn btn-success checkout" rel="<?=$branch?>" >Checkout</button></td>
</tr>
<? } ?>
</tbody>
</table>
<form method=post action="index.php" id="form1">
<input type="hidden" name="view" value="branch">
<input type="hidden" name="checkout" value="" id="checkout">
</form>
<script>
$(".checkout").click(function(){
	var branch = $(this).attr('rel');
	$("#checkout").val(branch);
	$("#form1").submit();	
});
</script>

