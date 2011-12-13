var price_policy = {
	"bzjz200_0907" :	{ "1y" : 398,	"2y" : 716,		"3y" : 955,		"mbox" : "embox" },
	"bzjz500_0907" :	{ "1y" : 698,	"2y" : 1256,	"3y" : 1675,	"mbox" : "embox" },
	"bzjz800_0907" :	{ "1y" : 998,	"2y" : 1796,	"3y" : 2395,	"mbox" : "embox" },
	"bzjz1000_0907" :	{ "1y" : 1198,	"2y" : 2156,	"3y" : 2875,	"mbox" : "embox" },
	"swjz200_0907" :	{ "1y" : 598,	"2y" : 1076,	"3y" : 1435,	"mbox" : "gmbox" },
	"swjz500_0907" :	{ "1y" : 898,	"2y" : 1616,	"3y" : 2155,	"mbox" : "gmbox" },
	"swjz800_0907" :	{ "1y" : 1198,	"2y" : 2156,	"3y" : 2875,	"mbox" : "gmbox" },
	"swjz1000_0907" :	{ "1y" : 1398,	"2y" : 2516,	"3y" : 3355,	"mbox" : "gmbox" },
	"full" :			{
		"com" :			{ "new" : 68,	"renew" : 68 },
		"cn" :			{ "new" : 28,	"renew" : 58 },
		"embox" :		{ "1" : 100, "10" : 90, "20" : 80, "30" : 70, "50" : 60, "100" : 50 },
		"gmbox" :		{ "1" : 150, "10" : 135, "20" : 120, "30" : 105, "50" : 90, "100" : 75 }
		},
	"com" :				{ "new" : 68,	"renew" : 68 },
	"cn" :				{ "new" : 28,	"renew" : 58 },
	"embox" :			{ "1" : 80, "10" : 72, "20" : 64, "30" : 56, "50" : 48, "100" : 40 },
	"gmbox" :			{ "1" : 90, "10" : 81, "20" : 72, "30" : 63, "50" : 54, "100" : 45 }
};

var updprc = function(prdcode) {
	var prdform = document.forms[prdcode];
	var prdprcfield = document.getElementById(prdcode + "_ttlprc");
	var prdprcsaving = document.getElementById(prdcode + "_saving");
	var prcidx = 0;
	
	var domain = "";
	for (var i = 0; i < prdform.elements["domain"].length; i++) {
		if (prdform.elements["domain"][i].checked) {
			domain = prdform.elements["domain"][i].value;
			break;
		}
	}
	//var mboxnum = prdform.elements["emailcnt"].value;
	var mboxnum=0;
	var nodomain = prdform.elements["nodomain"].checked;
	//var noemail = prdform.elements["noemail"].checked;
	var yearcnt = prdform.elements["yearcnt"].options[prdform.elements["yearcnt"].selectedIndex].value;
	
	var ttlprc = price_policy[prdcode][yearcnt + "y"];
	var full_ttlprc = ttlprc;
	if (!nodomain && !/^\s*$/.test(domain)) {
		ttlprc += price_policy[domain]["new"] + price_policy[domain]["renew"] * parseInt(yearcnt - 1);
		full_ttlprc += price_policy["full"][domain]["new"] + price_policy["full"][domain]["renew"] * parseInt(yearcnt - 1);
	}
	//if (!noemail && /^[0-9]+$/.test(mboxnum)) {
		//prcidx = parseInt(parseInt(mboxnum) / 10) * 10;
		//if (prcidx == 0) {
		//	prcidx = 1;
		//}
		//ttlprc += price_policy[price_policy[prdcode]["mbox"]][prcidx.toString()] * parseInt(mboxnum) * parseInt(yearcnt);
		//full_ttlprc += price_policy["full"][price_policy[prdcode]["mbox"]][prcidx.toString()] * parseInt(mboxnum) * parseInt(yearcnt);
	//}
	//prdprcfield.innerHTML = ttlprc;
	//prdprcsaving.innerHTML = full_ttlprc - ttlprc;
	prdprcfield.innerHTML = full_ttlprc;
}

var submitform = function(formname) {
	document.forms[formname].submit();
}
