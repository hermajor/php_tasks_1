function thisSend() {
	var xmlhttp = new XMLHttpRequest();
	var formData = new FormData(document.querySelector('[name=bx_popup_form_manao_feedback]'));
	//formData.set('qweqwe', 'ewqewq');
	//var formData = new FormData(document.forms.bx_popup_form_manao_feedback);
	/*formData.set('qweqwe', 'ewqewq');
			console.log(formData);
			var i = {qwe: 'ewq'};
			console.log(i);*/
	xmlhttp.open('POST', '99index.php', true);
	//xmlhttp.responseType = 'json';//приводим к типу json
	xmlhttp.setRequestHeader('X-REQUESTED-WITH', 'XMLHttpRequest'); // пишет в SERVER
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			//formData.append('file', 'sec');
			//console.log(document.getElementsByName('bx_popup_form_manao_feedback'));
			//console.log(document.getElementsByName('key_name'));
			console.log(document.querySelector('form[name=bx_popup_form_manao_feedback]'));
			console.log(document.querySelector('[name=key_name-1]').value);
			console.log(formData);
		}
	}
	xmlhttp.send(formData);
}