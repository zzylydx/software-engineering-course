window.onload = function(){  //该方法用于造网页加载完毕后立刻执行的操作，
	var oDiv = document.getElementById("search");  //var定义变量，document.getElementById()获取控件传给后台的值
	var oUl = oDiv.getElementsByTagName("ul"); //获取指定标签名ul的元素集合
	var oUlSearch = document.getElementById("searchnav");
	var oLi = oUlSearch.getElementsByTagName("li");
	oUl[0].style.display = 'block'; //ul元素集合中的第一个元素显示出来，None为不显示
	oLi[0].className = "active"; //设置该元素的样式表属性为active
	for (var i = 1; i < oUl.length; i++) {
		oUl[i].style.display = "none";//ul中除第一个元素以外，全都不显示
	}
	for (var i = 0; i < oUl.length; i++) {
		oLi[i].num =i;				
		oLi[i].onclick = function(){ //点击时发生
			for (var j = 0; j < oUl.length; j++) {
				oLi[j].className = ""; //令对象的class属性为“”
				oUl[j].style.display = "none";//不显示
			}
			this.className = "active"; //样式名为active
			oUl[this.num].style.display = "block";
		};
	}
	function btnact(id){
		document.getElementById(id).getElementsByTagName("li")[0].className+= " "+"active";
		for (var i = 0; i < document.getElementById(id).getElementsByTagName("li").length; i++) {
			document.getElementById(id).getElementsByTagName("li")[i].onclick = function(){
				for (var j = 0; j < document.getElementById(id).getElementsByTagName("li").length; j++) {
					document.getElementById(id).getElementsByTagName("li")[j].className = document.getElementById(id).getElementsByTagName("li")[j].className.replace(" active","");
				}
				this.className+= " "+"active";
			};
		}
	};
	btnact("userinfo");btnact("usermess");
};