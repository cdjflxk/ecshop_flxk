function $(element) {
    return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $(this.subj+"_v").innerHTML=$(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $(str+"_h").className="none";
  $(str+"_v").innerHTML=$(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}
function showMenu(menuID,index) {
    $(menuID).style.display=(index==0?"none":"block");
}

//商品详情
function picturs(){
    var goodsimg = document.getElementById("goodsimg");
    var imglist = document.getElementById("imglist");
    var imgnum = imglist.getElementsByTagName("img");
    for(var i = 0; i<imgnum.length; i++){
        imgnum[i].onclick=function(){
            var lang = this.getAttribute("lang");
            goodsimg.setAttribute("src",lang);
            for(var j=0; j<imgnum.length; j++){
                if(imgnum[j].getAttribute("class") =="onbg" || imgnum[j].getAttribute("className") =="onbg"){
                    imgnum[j].className = "autobg";
                    break;
                }
            }
            this.className = "onbg";
        }
    }
}

//文字闪烁
function colorStyle(id,color1,color2){
  var elem = document.getElementById(id);
  if(elem.getAttribute("id") == id){
      //elem.className = color1;
      if(elem.className == color1)
           elem.className = color2;
        else
           elem.className = color1; 
    }
}

//文章内容文字大小
function articleSize(size,lineheight){
var article = document.getElementById("article");
article.style.fontSize = size+"px";
article.style.lineHeight = lineheight+"px";
}

//销售排行
function elems(id,cur){
var id = document.getElementById(id).getElementsByTagName("li");
for(var i=0; i<id.length; i++)
 {
   id[0].className = "cur";
   id[i].onmouseover = function()
   {
    this.className="";
        for(var j=0; j<id.length; j++)
        {
             if((id[j].getAttribute("class") == cur) || (id[j].getAttribute("className") == cur))
             {
             id[j].className = "";
             break;
             }
        }
    this.className = cur;    
   }
 }
}

//购物车
function CartMenu(){
var cart = function(id){
            return typeof id == 'string' ? document.getElementById(id) : id; 
        }
        var flying = function(obj, w, h, callback){
            var d = 10;
            var index = 0;
            var extend = 50;
            var step = {width:(w+extend)/d, height:(h+extend)/d, top:20/d};
            var only;
            clearInterval(only);
            obj.style.display = 'block';
            only = setInterval(
                function(){
                    index++;
                    obj.style.width = ( index * step.width) + 'px';
                    obj.style.height = ( index * step.height) + 'px';
                    obj.style.top = ( index * step.top) + 'px';
                    obj.style.marginLeft = ( 0 - (index * step.width - 150))/2 + 'px';
                    if(index > d){
                        clearInterval(only);
                        if(typeof callback == 'function') callback(obj);
                    }
                }
            ,10);
        }
        var timer;
        cart('enter').onmouseover = function(){
            clearTimeout(timer);
            timer = setTimeout(function(){
                if(cart('all-links').style.display == 'none'){ 
                    new flying(cart('flying'), 150, 100, function(obj){
                        cart('all-links').style.display = 'block';
                        obj.style.display = 'none';
                    });
                    //document.title = 'over--'+Math.random();
                }
            },200);
        }
        cart('enter').onmouseout = function(){
            clearTimeout(timer);
            timer = setTimeout(function(){
                cart('all-links').style.display = 'none';
                //document.title = 'out--'+Math.random();
            },200);
        }
}

//判断一个容器的时间高度以解决ie6下绝对定位偏差问题
function divheight(id){
    var divh = $(id);
    var number1 = divh.scrollHeight;
    if( (number1 % 2) !== 0){divh.style.height = number1+1+'px'}
}