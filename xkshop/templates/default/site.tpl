{include file="./templates/default/lib/header.tpl"}
{include file="./templates/default/lib/nav.tpl"}
<script type="text/javascript">
var price_policy = {
	"bzjz200_0907" :	{ "1y" : 518,	"2y" : 1036,		"3y" : 1554,		"mbox" : "embox" },
	"bzjz500_0907" :	{ "1y" : 658,	"2y" : 1316,	"3y" : 1974,	"mbox" : "embox" },
	"bzjz800_0907" :	{ "1y" : 798,	"2y" : 1596,	"3y" : 2394,	"mbox" : "embox" },
	"bzjz1000_0907" :	{ "1y" : 938,	"2y" : 1876,	"3y" : 2814,	"mbox" : "embox" },
	"swjz200_0907" :	{ "1y" : 658,	"2y" : 1316,	"3y" : 1974,	"mbox" : "gmbox" },
	"swjz500_0907" :	{ "1y" : 798,	"2y" : 1596,	"3y" : 2394,	"mbox" : "gmbox" },
	"swjz800_0907" :	{ "1y" : 938,	"2y" : 1876,	"3y" : 2814,	"mbox" : "gmbox" },
	"swjz1000_0907" :	{ "1y" : 1078,	"2y" : 2156,	"3y" : 3234,	"mbox" : "gmbox" },
	"full" :			{
		"com" :			{ "new" : 68,	"renew" : 78 },
		"cn" :			{ "new" : 98,	"renew" : 98 },
		"embox" :		{ "1" : 100, "10" : 90, "20" : 80, "30" : 70, "50" : 60, "100" : 50 },
		"gmbox" :		{ "1" : 150, "10" : 135, "20" : 120, "30" : 105, "50" : 90, "100" : 75 }
		},
	"com" :				{ "new" : 68,	"renew" : 78 },
	"cn" :				{ "new" : 98,	"renew" : 98 },
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

</script>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
  <tbody><tr>
	<td valign="top">
		<!-- @main content -->
			



<!---------------------------------------------------------------------------------------------------->


            
<!---------------------------------建站套餐--------------------------------->          
    		<div id="pro">
				<script type="text/javascript"> 
                    function setTab03Syn ( i )
                    {
                        selectTab03Syn(i);
                    }
                    
                    function selectTab03Syn ( i )
                    {
                        switch(i){
                            case 1:
                            document.getElementById("web_left").style.display="block";
                            document.getElementById("web_leftHK").style.display="none";
                            document.getElementById("domestic_hk_01").className="domestic_hk_bg";
                            document.getElementById("domestic_hk_02").className="none";
                            break;
                            case 2:
                            document.getElementById("web_left").style.display="none";
                            document.getElementById("web_leftHK").style.display="block";
                            document.getElementById("domestic_hk_01").className="none";
                            document.getElementById("domestic_hk_02").className="domestic_hk_bg";
                            break;
                        }
                    }
                 
                </script> 

<!--domestic_hk_title-->
<div class="domestic_hk_title">
<div id="domestic_hk_01" class="domestic_hk_bg" onmouseover="setTab03Syn(1);"><span>国内建站</span></div>
<div id="domestic_hk_02" onmouseover="setTab03Syn(2);"><span>香港建站</span></div>
</div>


<!---------------------------------------------------------------------------------------------------->














			<div id="webmain">
				<div id="web_left">
					<div id="s_page">
						<div id="page">
<!-- Block 1-1 -->
<div class="page_pro">
<form name="bzjz200_0907" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp#formview" method="post">
    <h5>标准型建站200(0907)</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
       <tbody><tr>
        	<td width="183">价格：<span>518元</span></td>
        </tr>
   
        <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
        <tr>
        	<td>空间大小:200M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
        </tr>

        <tr>
        	<td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;bzjz200_0907&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_bzmore.asp?prdType=1"></a>  </td>
        </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="bzjz200_0907">
    <input type="hidden" name="emailprd" value="email100_0903">
    <input type="hidden" name="yearcnt" value="1">
</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('bzjz200_0907');
//]]>
</script>
</div>
<!-- // Block 1-1 -->
<!-- Block 1-2 -->
<div class="page_pro">
<form name="bzjz500_0907" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="hh">标准型建站500(0907)</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
       <tbody><tr>
        <td width="183">价格：<span>658元</span></td>
      </tr>
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
      <tr>
        <td>空间大小:500M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
      </tr>

      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;bzjz500_0907&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_bzmore.asp?prdType=1"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="bzjz500_0907">
    <input type="hidden" name="emailprd" value="email100_0903">
    <input type="hidden" name="yearcnt" value="1">
</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('bzjz500_0907');
//]]>
</script>
</div>
<!-- // Block 1-3 -->

<div class="page_pro">
<form name="bzjz800_0907" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="hh">标准型建站800(0907)</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
      
      <tbody><tr>
        <td width="183">价格：<span>798元</span></td>
      </tr>
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
      <tr>
        <td>空间大小:800M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
      </tr>

      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;bzjz800_0907&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_bzmore.asp?prdType=1"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="bzjz800_0907">
    <input type="hidden" name="emailprd" value="email100_0903">
    <input type="hidden" name="yearcnt" value="1">
</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('bzjz500_0907');
//]]>
</script>
</div>

<!-- Block 1-4 -->
<div class="page_pro">
<form name="bzjz1000_0907" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="hh">标准型建站1000(0907)</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
     
     
      <tbody><tr>
        <td width="183">价格：<span>938元</span></td>
      </tr>
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
      <tr>
        <td>空间大小:1000M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
      </tr>

      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;bzjz1000_0907&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_bzmore.asp?prdType=1"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="bzjz1000_0907">
    <input type="hidden" name="emailprd" value="email100_0903">
	    <input type="hidden" name="yearcnt" value="1">

</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('bzjz1000_0907');
////]]>
</script>
</div>
<!-- // Block 1-4 -->
				</div>
            </div>
            <div id="b_page">
            	
            	<div id="page">
<!-- Block 2-1 -->
<div class="page_pro">
<form name="swjz200_0907" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="bb">商务型建站200(0907)</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
     
     
      <tbody><tr>
        <td width="183">价格：<span>658元</span></td>
      </tr>
    
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
      <tr>
        <td>空间大小:200M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
      </tr>

      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;swjz200_0907&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_swmore.asp?prdType=1"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="swjz200_0907">
    <input type="hidden" name="emailprd" value="gmail1000_0903">
	    <input type="hidden" name="yearcnt" value="1">
</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('swjz200_0907');
//]]>
</script>
</div>
<!-- // Block 2-1 -->
<!-- Block 2-2 -->
<div class="page_pro">
<form name="swjz500_0907" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="bb">商务型建站500(0907)</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
      
      <tbody><tr>
        <td width="183">价格：<span>798元</span></td>
      </tr>
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
      <tr>
        <td>空间大小:500M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
      </tr>

      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;swjz500_0907&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_swmore.asp?prdType=1"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="swjz500_0907">
    <input type="hidden" name="emailprd" value="gmail1000_0903">
	    <input type="hidden" name="yearcnt" value="1">

</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('swjz500_0907');
//]]>
</script>
</div>


<div class="page_pro">
<form name="swjz800_0907" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="bb">商务型建站800(0907)</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
      <tbody><tr>
        <td width="183">价格：<span>938元</span></td>
      </tr>
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
      <tr>
        <td>空间大小:800M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
      </tr>

      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;swjz800_0907&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_swmore.asp?prdType=1"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="swjz800_0907">
    <input type="hidden" name="emailprd" value="gmail1000_0903">
	    <input type="hidden" name="yearcnt" value="1">

</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('swjz500_0907');
//]]>
</script>
</div>


<!-- // Block 2-3 -->
<!-- Block 2-4 -->
<div class="page_pro">
<form name="swjz1000_0907" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="bb">商务型建站1000(0907)</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
      <tbody><tr>
        <td width="183">价格：<span>1078元</span></td>
      </tr>
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
      <tr>
        <td>空间大小:1000M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
      </tr>

      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;swjz1000_0907&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_swmore.asp?prdType=1"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="swjz1000_0907">
    <input type="hidden" name="emailprd" value="gmail1000_0903">
	    <input type="hidden" name="yearcnt" value="1">

</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('swjz1000_0907');
////]]>
</script>
</div>
<!-- // Block 2-4 -->						
</div>
</div>    
</div>
<!------------------以下是香港-------------------------------------------------->


<div id="web_leftHK" style="display:none">
					<div id="s_page">
						<div id="page">
<!-- Block 1-1 -->
<div class="page_pro">
<form name="hkbzjz200_1010" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp#formview" method="post">
    <h5>香港标准型建站200(10</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
        <tbody><tr>
        	<td width="183">价格：<span>698元</span></td>
        </tr>
        <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
        <tr>
        	<td>空间大小:200M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
        </tr>

        <tr>
        	<td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;hkbzjz200_1010&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_bzmore.asp?prdType=2"></a>  </td>
        </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="hkbzjz200_1010">
    <input type="hidden" name="emailprd" value="email100_0903">
    <input type="hidden" name="yearcnt" value="1">
</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('bzjz200_0907');
//]]>
</script>
</div>
<!-- // Block 1-1 -->
<!-- Block 1-2 -->
<div class="page_pro">
<form name="hkbzjz500_1010" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="hh">香港标准型建站500(10</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
      <tbody><tr>
        <td width="183">价格：<span>898元</span></td>
      </tr>
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
      <tr>
        <td><div class="package_list_c">空间大小:500M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年! </div><!--package_pice end--><!--buy_detail--></td>
      </tr>

      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;hkbzjz500_1010&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_bzmore.asp?prdType=2"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="hkbzjz500_1010">
    <input type="hidden" name="emailprd" value="email100_0903">
    <input type="hidden" name="yearcnt" value="1">
</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('bzjz500_0907');
//]]>
</script>
</div>
<!-- // Block 1-3 -->

<div class="page_pro">
<form name="hkbzjz800_1010" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="hh">香港标准型建站800(10</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
      <tbody><tr>
        <td width="183">价格:<span>1098元</span></td>
      </tr>
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
      <tr>
        <td>空间大小:800M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
      </tr>

      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;hkbzjz800_1010&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_bzmore.asp?prdType=2"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="hkbzjz800_1010">
    <input type="hidden" name="emailprd" value="email100_0903">
    <input type="hidden" name="yearcnt" value="1">
</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('bzjz500_0907');
//]]>
</script>
</div>

<!-- Block 1-4 -->
<div class="page_pro">
<form name="hkbzjz1000_1010" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="hh">香港标准型建站1000(1</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
      <tbody><tr>
        <td width="183">价格：<span>1298元</span></td>
      </tr>
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
      <tr>
        <td>空间大小:1000M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
      </tr>

      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;hkbzjz1000_1010&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_bzmore.asp?prdType=2"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="hkbzjz1000_1010">
    <input type="hidden" name="emailprd" value="email100_0903">
	    <input type="hidden" name="yearcnt" value="1">

</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('bzjz1000_0907');
////]]>
</script>
</div>
<!-- // Block 1-4 -->
</div>
</div>

<div id="b_page">
<div id="page">
<!-- Block 2-1 -->
<div class="page_pro">
<form name="hkswjz200_1010" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="bb">香港商务型建站200(10</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
      <tbody><tr>
        <td width="183">价格:<span>898元</span>M</td>
      </tr>
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
      <tr>
        <td>空间大小:200M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
      </tr>

      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;hkswjz200_1010&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_swmore.asp?prdType=2"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="hkswjz200_1010">
    <input type="hidden" name="emailprd" value="gmail1000_0903">
	    <input type="hidden" name="yearcnt" value="1">

</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('swjz200_0907');
//]]>
</script>
</div>
<!-- // Block 2-1 -->
<!-- Block 2-2 -->
<div class="page_pro">
<form name="hkswjz500_1010" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="bb">香港商务型建站500(10</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
      <tbody><tr>
        <td width="183">价格:<span>1098元</span></td>
      </tr>
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
      <tr>
        <td>空间大小:500M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
      </tr>

      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;hkswjz500_1010&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_swmore.asp?prdType=2"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="hkswjz500_1010">
    <input type="hidden" name="emailprd" value="gmail1000_0903">
	    <input type="hidden" name="yearcnt" value="1">

</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('swjz500_0907');
//]]>
</script>
</div>


<div class="page_pro">
<form name="hkswjz800_1010" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="bb">香港商务型建站800(10</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
      <tbody><tr>
        <td width="183">价格：<span>1298元</span></td>
      </tr>
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
      </tr -->
      <tr>
        <td>空间大小:800M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
      </tr>
      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;hkswjz800_1010&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_swmore.asp?prdType=2"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="hkswjz800_1010">
    <input type="hidden" name="emailprd" value="gmail1000_0903">
	    <input type="hidden" name="yearcnt" value="1">

</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('swjz500_0907');
//]]>
</script>
</div>
<!-- // Block 2-3 -->
<!-- Block 2-4 -->
<div class="page_pro">
<form name="hkswjz1000_1010" action="http://www.flxkdns.com/pdtshw/ot5shw/steps.asp" method="post">
    <h5 class="bb">香港商务型建站1000(1</h5>
    <table width="183" border="0" align="right" cellpadding="0" cellspacing="2">
      <tbody><tr>
        <td width="183">价格:<span>1498元</span></td>
      </tr>
      <!-- tr>
        	<td>&nbsp;&nbsp;海量模板可供选择</td>
        </tr -->
      <tr>
        <td>空间大小:1000M<br>海量模板任由选择<br>此版本适合个人和企业展示<br>买两年送一年,买三年送两年!</td>
      </tr>
      <tr>
        <td style="background:none"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" class="webbuy" onclick="submitform(&#39;hkswjz1000_1010&#39;);return false;"></a><a class="webmore" href="http://www.flxkdns.com/pdtshw/ot5shw/template_swmore.asp?prdType=2"></a>  </td>
      </tr>
    </tbody></table>
    <input type="hidden" name="ezsite_prd" value="ghkswjz1000_1010">
    <input type="hidden" name="emailprd" value="gmail1000_0903">
	    <input type="hidden" name="yearcnt" value="1">

</form>
<script type="text/javascript" language="javascript">
//<![CDATA[
//updprc('swjz1000_0907');
////]]>
</script>
</div>
<!-- // Block 2-4 -->						
</div>
</div>
</div>


<!--------香港------------------------------------------------------------>

					<div id="template_show">
						<div class="top">
							<div class="l">模板展示&nbsp;<span>Template show</span></div>
							<div class="r"><a href="http://www.flxkdns.com/pdtshw/ot5shw/template_show.asp"><img src="./templates/default/images/mb_more.gif"></a></div>
						</div>

						<div id="Template">
				
                    <div class="template_kk">
                        <a href="http://qiche11a36.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/qiche11a36.jpg" alt=" 企业网站-汽车A36" width="170" border="0">
                        </a>
                        <h5>模板编号:3108</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://qipei11a25.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/qipei11a25.jpg" alt=" 企业网站-汽配A25" width="170" border="0">
                        </a>
                        <h5>模板编号:3107</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://qipei11a19.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/qipei11a19.jpg" alt=" 企业网站-汽配A19" width="170" border="0">
                        </a>
                        <h5>模板编号:3106</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://fengjing11a40.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/fengjing11a40.jpg" alt=" 企业网站-风景A40" width="170" border="0">
                        </a>
                        <h5>模板编号:3105</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://guanggao11a24.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/guanggao11a24.jpg" alt=" 企业网站-广告A24" width="170" border="0">
                        </a>
                        <h5>模板编号:3104</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://xiangjiao11a35.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/xiangjiao11a35.jpg" alt=" 企业网站-橡胶A35" width="170" border="0">
                        </a>
                        <h5>模板编号:3103</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://chuanmei11a27.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/chuanmei11a27.jpg" alt=" 企业网站-传媒A27" width="170" border="0">
                        </a>
                        <h5>模板编号:3102</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://zhaoming11a63.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/zhaoming11a63.jpg" alt=" 企业网站-照明A63" width="170" border="0">
                        </a>
                        <h5>模板编号:3101</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://zhaoming11a62.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/zhaoming11a62.jpg" alt=" 企业网站-照明A62" width="170" border="0">
                        </a>
                        <h5>模板编号:3100</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://zhaoming11a61.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/zhaoming11a61.jpg" alt=" 企业网站-照明A61" width="170" border="0">
                        </a>
                        <h5>模板编号:3099</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://zhaoming11a57.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/zhaoming11a57.jpg" alt=" 企业网站-照明A57" width="170" border="0">
                        </a>
                        <h5>模板编号:3098</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://zhaoming11a52.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/zhaoming11a52.jpg" alt=" 企业网站-照明A52" width="170" border="0">
                        </a>
                        <h5>模板编号:3097</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://zhaoming11a49.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/zhaoming11a49.jpg" alt=" 企业网站-照明A49" width="170" border="0">
                        </a>
                        <h5>模板编号:3096</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://zhaoming11a41.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/zhaoming11a41.jpg" alt=" 企业网站-照明A41" width="170" border="0">
                        </a>
                        <h5>模板编号:3095</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://zhaoming11a36.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/zhaoming11a36.jpg" alt=" 企业网站-照明A36" width="170" border="0">
                        </a>
                        <h5>模板编号:3094</h5>


                    </div>
				
                    <div class="template_kk">
                        <a href="http://zhaoming11a34.site3.idccenter.net/?key=agent" target="_blank" style="display:block;width:170px;heigth:134px;overflow:hidden;">
                            <img src="./templates/default/images/zhaoming11a34.jpg" alt=" 企业网站-照明A34" width="170" border="0">
                        </a>
                        <h5>模板编号:3093</h5>


                    </div>
				
          		</div>
                <div class="air"></div>
				 <script type="text/javascript">
				function directPage(val,TotalPage){
					if (!/\d+/.test(val))
					{
						alert("请输入数字！")
						return false;
					}
					if (Number(val) > Number(TotalPage) || Number(val) < 1)
					{
						alert("您输入的数值不在范围内，请重新输入!")
						return false;
					}
					location.href="index.asp?ewebtplcate=" + 0 + "&tp=" + val;
				}
				</script>
                 <div id="page1" align="center">
                         <table align="center">
                 <tbody><tr>
                 <td valign="top">
                	<a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp?ewebtplcate=0&suppertplcate=">|&lt;</a>
					<a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp?ewebtplcate=0&tp=0&suppertplcate=">&lt;</a>
					<a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp?ewebtplcate=0&suppertplcate=">1</a>
					
					<a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp?ewebtplcate=0&tp=2&suppertplcate=">2</a>
					
					<a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp?ewebtplcate=0&tp=3&suppertplcate=">3</a>
					
					<a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp?ewebtplcate=0&tp=4&suppertplcate=">4</a>
					
					<a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp?ewebtplcate=0&tp=5&suppertplcate=">5</a>
					<span>.</span><span>.</span><span>.</span>
					
					<a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp?ewebtplcate=0&tp=122&suppertplcate=">122</a>
					
					<a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp?ewebtplcate=0&tp=2&suppertplcate=">&gt;</a>
					<a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp?ewebtplcate=0&tp=122&suppertplcate=">&gt;|</a>
					<span>跳转到&nbsp;
                 <input type="text" value="1" style="width:22px;" id="pageNumber" name="pageNumber">&nbsp;页</span>
					<a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" onclick="javascript:directPage(document.getElementById(&#39;pageNumber&#39;).value,&#39;122&#39;,&#39;&#39;);">GO</a>
                    </td>
   
                    </tr>
                    </tbody></table>
				 </div>
                <div align="center" style="width:750px; float:right">
                <table align="center">
                <tbody><tr align="center">
                <td align="center">
                <form name="form1" style="width:300px;" method="post" action="./templates/default/images/site.htm">
                    
                        <table width="292">
                        
                        
                        <tbody><tr>
                        <td width="214" align="center"> 
                        
                        请输入模板编号:
                          <input type="text" value="" id="findValue1" style="width:80px; " name="findValue"><a href="http://www.flxkdns.com/pdtshw/ot5shw/index.asp#" onclick="javascript:form1.submit();">搜索</a>
                        </td>
                        <td width="66">
                        
                        <input type="hidden" value="-100" name="pageTag">
                        </td>
                        </tr>
                        </tbody></table>
                    
                    
                  </form>
                </td>
                </tr>
                </tbody></table>
                </div>



					</div>
				</div>
				<div id="web_right">
				
				</div>
			</div>
    
		<!-- #main content -->
	</td>
	<td width="225" align="center" valign="top">
	  	<table width="225" border="0" cellspacing="0" cellpadding="0">
	<form name="login_form" action="http://www.flxkdns.com/ucenter/members/login.asp" method="post"></form>
      <tbody><tr>
        <td height="168" valign="top" background="./templates/default/images/loginbg.gif">
        <table width="85%" height="31" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody><tr>
            <td width="12%" class="dashed"><img src="./templates/default/images/icon.gif" width="9" height="15"></td>
            <td width="88%" align="left" class="dashed"><span class="title">会员登录</span></td>
          </tr>
        </tbody></table>
          <table width="85%" height="73" border="0" align="center" cellpadding="0" cellspacing="0">
            
            <tbody><tr>
              <td width="17%" class="blue">帐号:</td>
              <td width="62%"><input name="usrname" type="text" class="input" id="textfield" tabindex="1"></td>
              <td width="21%" rowspan="2"><input type="image" src="./templates/default/images/login.gif" width="40" height="40" tabindex="4"></td>
            </tr>
            <tr>
              <td class="blue">密码:</td>
              <td><input name="usrpass" type="password" class="input" id="textfield2" tabindex="2"></td>
              </tr>
			
        </tbody></table>
          <table width="191" height="37" border="0" align="center" cellpadding="0" cellspacing="0">
            <tbody><tr>
              <td width="11">&nbsp;</td>
              <td width="93" align="right"><a href="http://www.flxkdns.com/members/usr_reg.asp"><img src="./templates/default/images/register.gif" width="73" height="27"></a></td>
              <td width="87" align="right"><a href="http://www.flxkdns.com/members/getpass.asp"><img src="./templates/default/images/forget.gif" width="73" height="27"></a></td>
            </tr>
          </tbody></table></td>
      </tr>
      <input type="hidden" name="screenwidth"> 
	  <input type="hidden" name="screenheight">
    
    </tbody></table>
	  			<table width="217" border="0" cellpadding="0" cellspacing="0" background="./templates/default/images/postbg.gif">
			<tbody><tr>
			  <td align="center" valign="top"><table width="90%" height="31" border="0" cellpadding="0" cellspacing="0">
				<tbody><tr>
				  <td width="12%" class="dashed"><img src="./templates/default/images/icon.gif" width="9" height="15"></td>
				  <td width="88%" align="left" class="dashed"><span class="title">产品优势列表</span></td>
				</tr>
				
			  </tbody></table>
				<table width="90%" border="0" cellpadding="0" cellspacing="0" align="center">
				  <tbody><tr>
					<td align="left" valign="top">
								<!-- @domainreg advantage Tag -->
								<ul class="infoul">
									<li>产品的表现力极其强大</li><li>业界领先功能齐全</li><li>国内市场占有率最高</li><li>强大的售后服务技术支持</li>
								</ul>
								<!-- #domainreg advantage Tag -->
					</td>
				  </tr>
				</tbody></table>          </td>
			</tr>
			<tr>
			  <td><img src="./templates/default/images/postf.gif" width="217" height="5"></td>
			</tr>
		  </tbody></table>
		  
      <br>
	      <table width="225" border="0" cellspacing="0" cellpadding="0">
      <tbody><tr>
        <td height="179" background="./templates/default/images/advisory.gif">
        <table width="90%" height="39" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody><tr>
            <td width="12%" class="dashed"><img src="./templates/default/images/icon.gif" width="9" height="15"></td>
            <td width="88%" align="left" class="dashed"><span class="title">在线咨询</span></td>
          </tr>
        </tbody></table>
        <table width="90%" height="135" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody><tr>
            <td valign="top">
				<ul class="kfList">
					<li><a href="tencent://message/?uin=736233152&Site=www%2Eflxkdns%2Ecom&Menu=yes"><img src="./templates/default/images/pa" border="0" alt=""></a></li>
				</ul>
			</td>
            <td valign="top">
				<ul class="kfList">
					<li><a href="msnim:chat?contact=changdejie2007@126.com"><img src="./templates/default/images/msn.gif" border="0" alt=""></a></li>
				</ul>
			</td>
          </tr>
        </tbody></table>
        </td>
      </tr>
    </tbody></table>
	</td>
	</tr>
</tbody></table>
<br><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24605755-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" background="./templates/default/images/linkbg.gif">
  <tbody><tr>
    <td width="6"><img src="./templates/default/images/linkl.gif" width="6" height="54"></td>
    <td width="968" valign="top">
	 <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-top: 1px;">
     <!-- <tr>
		
      </tr> -->
      <tbody><tr>
        <td height="53" colspan="6" class="jiange">友情链接：
		<a target="_blank" href="http://www.google.com/">Google</a> &nbsp; <a target="_blank" href="http://www.baidu.com/">百度</a> &nbsp; 
		</td>
        </tr>
    </tbody></table></td>
    <td width="6"><img src="./templates/default/images/linkr.gif" width="6" height="54"></td>
  </tr>
</tbody></table>
<br>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0" background="./templates/default/images/footerbg.gif">
  <tbody><tr>
    <td width="232" height="114" valign="bottom"><img src="./templates/default/images/logof.gif"></td>
    <td width="748" class="jiange">
    <a href="http://www.flxkdns.com/help/pay.asp">付款方式</a>　|　<a href="http://www.flxkdns.com/help/price.asp">价格总览</a>　|　<a href="http://www.flxkdns.com/help/job.asp">诚聘英才</a>　|　<a href="http://www.flxkdns.com/help/aboutus.asp">关于我们</a>　|　<a href="http://www.flxkdns.com/help/contact.asp">联系我们</a>　|　<a href="http://www.flxkdns.com/help/postQues.asp">咨询反馈</a>		
		<br>
    <font color="#333333">电话：18701132241 传真： 咨询信箱：changdejie2007@126.com 咨询QQ：736233152 备案号: <a href="http://www.miibeian.gov.cn/">京ICP备11030135号</a></font>
	
	<br>
	<font color="#333333">copyright &#169; 2006-2011  http://www.flxkdns.com All Rights Reserved. 版权所有：星空软件工作室</font>
    </td>
  </tr>
</tbody></table>

<!-- start http://count.knowsky.com -->
<script src="./templates/default/images/count.asp" language="JavaScript" charset="gb2312"></script><a href="http://www.gold678.com/" target="_blank" title="今天访问：1
累计访问：218
点击申请计数器"><img border="0" src="./templates/default/images/2.gif"><img border="0" src="./templates/default/images/1.gif"><img border="0" src="./templates/default/images/8.gif"></a><iframe frameborder="no" scrolling="no" name="abc" width="0" height="0" src="./templates/default/images/js.htm"></iframe>
<!-- Powered by http://www.knowsky.com -->

</body></html>