function chkdme1input(){
	var thesuffixselected=false;
	var theinput=document.InternationalDomain.searchedDomainName;
	var pattern = /^([a-zA-Z0-9\-]){2,64}$/;
	if(theinput.value == ''){
		alert('��������Ҫ��ѯ��������');
		theinput.focus();
		return false;
	}
	if(pattern.test(theinput.value) == false){
		alert('Ӣ������ֻ��ʹ����ĸ���ֺ��к��ߣ�������������ַ�����');
		theinput.focus();
		return false;
	}
	for(i=0;i<=document.InternationalDomain.suffix2.length-1;i++){
		
		
		//alert(document.InternationalDomain.suffix2[i].value);
		if(document.InternationalDomain.suffix2[i].checked==true) { thesuffixselected=true; }
	}
	if(thesuffixselected==false){
		alert('��ѡ���ѯ��������׺�б�Ϊ��,��ѡ����Ҫ��ѯ��������׺�б�');
		return false;
	}
	return true;
}
function chkdmcinput(){
	var thesuffixselected=false;
	var theinput=document.ChineseDomain.searchedDomainName;
	var pattern = /([a-zA-Z0-9\u0391-\uFFE5\-])*([\u0391-\uFFE5])+([a-zA-Z0-9\u0391-\uFFE5\-])*/;
	if(theinput.value == ''){
		alert('��������Ҫ��ѯ��������');
		theinput.focus();
		return false;
	}
	//if(pattern.test(theinput.value) == false){
	//	alert('��������ֻ��ʹ�������ַ���ĸ���ֺ��к��ߣ��ұ�����������ַ���������������ַ�����');
	//	theinput.focus();
	//	return false;
	//}
	for(i=0;i<=document.ChineseDomain.suffix2.length-1;i++){
		if(document.ChineseDomain.suffix2[i].checked==true) { thesuffixselected=true; }
	}
	if(thesuffixselected==false){
		alert('��ѡ���ѯ��������׺�б�Ϊ��,��ѡ����Ҫ��ѯ��������׺�б�');
		return false;
	}
	return true;
}
function chkdme2input(){
	var thesuffixselected=false;
	var theinput=document.ChinaZoneDomain.searchedDomainName;
	var pattern = /^([a-zA-Z0-9\-]){2,64}$/;
	if(theinput.value == ''){
		alert('��������Ҫ��ѯ��������');
		theinput.focus();
		return false;
	}
	if(pattern.test(theinput.value) == false){
		alert('Ӣ��������������ֻ��ʹ����ĸ���ֺ��к��ߣ�������������ַ�����');
		theinput.focus();
		return false;
	}
	for(i=0;i<=document.ChinaZoneDomain.suffix2.length-1;i++){
		if(document.ChinaZoneDomain.suffix2[i].checked==true) { thesuffixselected=true; }
	}
	if(thesuffixselected==false){
		alert('��ѡ���ѯ��������׺�б�Ϊ��,��ѡ����Ҫ��ѯ��������׺�б�');
		return false;
	}
	return true;
}

function chkdomaininput(){
	var thesuffixselected=false;
	var theinput=document.Domain.searchedDomainName;	
	var pattern = /^[a-zA-Z0-9\u0391-\uFFE5\-]*$/;
	if(theinput.value == ''){
		alert('��������Ҫ��ѯ��������');
		theinput.focus();
		return false;
	}
	if( pattern.test(theinput.value) == false){
		alert('��������������Ƿ��ַ�,���������룡');
		theinput.focus();
		return false;
	}
	for(i=0;i<=document.Domain.suffix2.length-1;i++){
		if(document.Domain.suffix2[i].checked==true) { thesuffixselected=true; }
	}
	if(thesuffixselected==false){
		alert('��ѡ���ѯ��������׺�б�Ϊ��,��ѡ����Ҫ��ѯ��������׺�б�');
		return false;
	}
}