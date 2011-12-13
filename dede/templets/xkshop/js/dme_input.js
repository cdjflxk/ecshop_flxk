function chkdme1input(){
	var thesuffixselected=false;
	var theinput=document.InternationalDomain.searchedDomainName;
	var pattern = /^([a-zA-Z0-9\-]){2,64}$/;
	if(theinput.value == ''){
		alert('请输入你要查询的域名！');
		theinput.focus();
		return false;
	}
	if(pattern.test(theinput.value) == false){
		alert('英文域名只能使用字母数字和中横线，请检查你输入的字符串！');
		theinput.focus();
		return false;
	}
	for(i=0;i<=document.InternationalDomain.suffix2.length-1;i++){
		
		
		//alert(document.InternationalDomain.suffix2[i].value);
		if(document.InternationalDomain.suffix2[i].checked==true) { thesuffixselected=true; }
	}
	if(thesuffixselected==false){
		alert('你选择查询的域名后缀列表为空,请选择你要查询的域名后缀列表！');
		return false;
	}
	return true;
}
function chkdmcinput(){
	var thesuffixselected=false;
	var theinput=document.ChineseDomain.searchedDomainName;
	var pattern = /([a-zA-Z0-9\u0391-\uFFE5\-])*([\u0391-\uFFE5])+([a-zA-Z0-9\u0391-\uFFE5\-])*/;
	if(theinput.value == ''){
		alert('请输入你要查询的域名！');
		theinput.focus();
		return false;
	}
	//if(pattern.test(theinput.value) == false){
	//	alert('中文域名只能使用中文字符字母数字和中横线，且必须包含中文字符，请检查你输入的字符串！');
	//	theinput.focus();
	//	return false;
	//}
	for(i=0;i<=document.ChineseDomain.suffix2.length-1;i++){
		if(document.ChineseDomain.suffix2[i].checked==true) { thesuffixselected=true; }
	}
	if(thesuffixselected==false){
		alert('你选择查询的域名后缀列表为空,请选择你要查询的域名后缀列表！');
		return false;
	}
	return true;
}
function chkdme2input(){
	var thesuffixselected=false;
	var theinput=document.ChinaZoneDomain.searchedDomainName;
	var pattern = /^([a-zA-Z0-9\-]){2,64}$/;
	if(theinput.value == ''){
		alert('请输入你要查询的域名！');
		theinput.focus();
		return false;
	}
	if(pattern.test(theinput.value) == false){
		alert('英文行政区域域名只能使用字母数字和中横线，请检查你输入的字符串！');
		theinput.focus();
		return false;
	}
	for(i=0;i<=document.ChinaZoneDomain.suffix2.length-1;i++){
		if(document.ChinaZoneDomain.suffix2[i].checked==true) { thesuffixselected=true; }
	}
	if(thesuffixselected==false){
		alert('你选择查询的域名后缀列表为空,请选择你要查询的域名后缀列表！');
		return false;
	}
	return true;
}

function chkdomaininput(){
	var thesuffixselected=false;
	var theinput=document.Domain.searchedDomainName;	
	var pattern = /^[a-zA-Z0-9\u0391-\uFFE5\-]*$/;
	if(theinput.value == ''){
		alert('请输入你要查询的域名！');
		theinput.focus();
		return false;
	}
	if( pattern.test(theinput.value) == false){
		alert('输入的域名包含非法字符,请重新输入！');
		theinput.focus();
		return false;
	}
	for(i=0;i<=document.Domain.suffix2.length-1;i++){
		if(document.Domain.suffix2[i].checked==true) { thesuffixselected=true; }
	}
	if(thesuffixselected==false){
		alert('你选择查询的域名后缀列表为空,请选择你要查询的域名后缀列表！');
		return false;
	}
}