<html><body>
<form name="bx_popup_form_manao_feedback" method="post" enctype="multipart/form-data">
	<div>
		<input type="text" name="key_name-1">
		<input type="text" name="value_name-1">
		<input type="checkbox" name="checkbox-1">
	</div>
	<div>
		<input type="text" name="key_name-2">
		<input type="text" name="value_name-2">
		<input type="checkbox" name="checkbox-2">
	</div>
	<br>
	<input type="button" onClick="thisSend();" value="Отправить" />
</form>
<script src="99script.js"></script>
</body></html>
<?
echo '<pre>'.print_r($_POST, true).'</pre>';
?>