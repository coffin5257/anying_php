**HTML 部分**

1、图3

2、a

3、c d

4、B

5、
```html
<!DOCTYPE html>
<html>
<head>
	<title>div 布局</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body id="body">
<div id="header"><h1>CSS布局综合应用</h1></div>
<div id="nav">导航</div>
<div id="content">
	<div id="left">
		<ul class="ul">
			<li>Test Div</li>
			<li>Test Div</li>
			<li>Test Div</li>
			<li>Test Div</li>
			<li>Test Div</li>
			<li>Test Div</li>
			<li>Test Div</li>
			<li>Test Div</li>
		</ul>
	</div>
	<div id="right">
	<p>
		<p>飓风伊西斯是1998年太平洋飓风季唯一一个登陆过的飓风和造成死亡人数最多的热带气旋，还是该季第九个热带风暴和第六个飓风，于9月1日从墨西哥西南部的一片大型地表环流和一股东风波之间的相互作用发展而成。</p><br>
		<p>系统朝北面进发，首先袭击了下加利福尼亚半岛最东南部，然后在加利福尼亚湾达到飓风强度，之后于9月3日在墨西哥的锡那罗亚州再次登陆，然后很快就失去了下层环流。</p><br>
		<p>风暴残余接下来还持续了几天时间，最终在美国的爱达荷州境内消散。伊西斯在墨西哥摧毁了超过700套房屋，还直接导致14人死亡，这其中大部分是因为南下加利福尼亚州南部所降的暴雨，部分地区降雨量超过了500毫米。这些降水导致大范围道路和铁路受损，成千上万的人被困在路上。风暴的残余湿气一直延伸到美国西南部地区，带去了轻等程度降雨，引发数十起交通事故，加利福尼亚州圣迭戈县有数千居民家中停电。</p><br>
		<div id="layout">
			<div id="layout_1"></div>
			<div id="layout_2"></div>
			<div id="layout_3">
				<p>Css</p>
				<p>Layout</p>
			</div>
		</div>
		<p>薛定谔方程是描述物理系统的量子态怎样随时间演化的偏微分方程，为量子力学的基础方程之一，其以发表者奥地利物理学家埃尔温·薛定谔而命名。</p><br>
		<p>关于量子态与薛定谔方程的概念涵盖于基础量子力学假说里，无法从其它任何原理推导而出。薛定谔方程可以分为“含时薛定谔方程”与“不含时薛定谔方程”两种。</p>
		</p>
		<span>CSS Layout 1.1</span>
	</div>
</div>
<div id="footer"></div>
</body>
</html>
```

layout.css
```css
* {
	margin: 0;
	padding: 0;
}

#body {
	border: 0;
	height: 835px;
}

#header {
	background-color: #999;
	padding: 00 0 0;
	border: 0;
	height: 70px;
}

#header h1 {
	padding-top: 20px;
}

#nav {
	background-color: #00f;
	margin: 0;
	padding: 0;
	border: 0;
	height: 30px;
	border-top: 5px solid #fff;
	border-bottom: 5px solid #fff;
}

#content {
	height: 650px;
	width: 100%;
}

#left {
	float: left;
	background-color: #999;
	width: 410px;
	height: 100%;
	border-right: 5px solid #fff;
}

.ul {
	margin: 10px 0 0 20px;
}

#right {
	float: right;
	background-color: #ccc;
	width: 936px;
	height: 100%;
}

#layout {
	float: left;
	background-color: #525;
	width: 400px;
	height: 300px;
	margin-left: 30px;
}

#right span {
	float: left;
	display: block;
	text-align: center;
	width: 100%;
}

#footer {
	border-top: 5px solid #fff;
	height: 70px;
	background-color: #333;
}

#layout_1 {
	float: left;
	margin: 10px 0 10px 5px;
	border: 5px solid #fff;
	width: 150px;
	height: 270px;
}

#layout_2 {
	float: left;
	margin: 10px 5px 10px 5px;
	border: 5px solid #fff;
	width: 120px;
	height: 270px;
}

#layout_3 {
	float: left;
	height: 195px;
	width: 90px;
	padding-top: 90px;
}

#layout_3 p {
	display: block;
	color: #fff;
	font-size: 25px;
	font-style: bold;
}
```

**JS 部分**
1、假设a.html和b.html在同一个文件夹下面，用Javascript实现当打开a.html五秒钟后，自动跳转到b.html 写出代码
```html
<!DOCTYPE html>
<html>
<head>
	<title>JS_1</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<script language="javascript">
		setTimeout(window.location.href='./b.html',5);
	</script>
</body>
</html>
```

2、请使用Javascript写出三种产生一个image标签的方法（提示，从方法、对象、html角度考虑）
```html
在 html 中<div id="tag"></div>
```
```javascript
//方法
function create(){
	var tag = document.getElementById("tag");
	var img = document.createElement("img");
	img.src = "*.jpg";
	tag.appendChild(img);
}

//对象
function create(){
	var img = new Image();
	img.src = "*.jpg";
	var tag = document.getElementById("tag");
	tag.appendChild(img);
}

//html
function create(){
	var tag = document.getElementById("tag");
	tag.innerHTML = "<img src="*.jpg">";
}
```

3、打印标题
要求：网页一打开，要求依次弹出数字1-6，并且每弹出一次，页面就显示出对应的一个标题行（即从h1-h6）。注意，页面中不应该出现h1-h6的标签，而应该是由js写出来的
```javascript
function create(n) {
	alert(n);
	var body = document.getElementById("body");
	var str = '<h' + n +'>标题 h'+n+'</h'+n+'>';
	body.innerHTML += str;
}

for (var i = 1; i <=6; i++) {
	create(i);
};
```
4、写一个乘法口诀
```javascript
for (var i = 1; i <= 9; i++) {
	document.write('<tr>');
	for (var j = 1; j<=i;j++) {
		var s = i*j;
		var content = '<td>'+i+'*'+j+'='+s+'</td>';
		document.write(content);
	};
	document.write('</tr>');
};
```

5、
```javascript
for (var i = 8; i >= 1; i--) {
	for(var j = 1; j <= i; j++) {
		document.write(i);
	}
	document.write('<br>');
};
for (var i = 2; i <= 8; i++) {
	for(var j = 1; j <= i; j++) {
		document.write(i);
	}
	document.write('<br>');
};
```

**php 部分**
1：用PHP打印出前一天（时间格式是 2014-4-25 18:00）
```php
<?php 
date_default_timezone_set('Asia/Shanghai'); 
echo date('Y-m-d H:i:s',strtotime('-1 day')); 
?>
```
2、常量如何定义？如何检测一个常量是否被定义
```php
<?php
define('PI', 3.14);
echo defined('PI');
?>
```
3、echo count('Anying')；输出什么？
输出1 
count()  对于数组，返回其元素的个数，对于其他值，返回1。如果参数是变量而变量没有定义，则返回 0。

4、字符串怎么转成整数？有几种方法？怎么实现？
经 var_dump 测试 第三种实际上还是 string
```php
<?php
$n = '123';
$a = (int)$n;
$b = intval($n);
$c = sprintf("%d",$n);

var_dump($a);echo "<br>";
var_dump($b);echo "<br>";
var_dump($c);echo "<br>";
?>
```

5:进行改错，并使其代码在页面输出”相等”；逻辑要合理（PS:不能比较不相等输出相等要前后对应）
```php
<?php
$Anying='Www.Anying.oRg';
$2cTo='Www.2cTo.cOm';
if ($Anying=$2cTo) {
	echo '相等';
}else{
	echo '不相等';
}
?>
```

改正：2cTo变量名不对，输出 '相等' 我只有这种方法了……如果换成 == 或 === 或者字符串匹配的函数 感觉都无法在逻辑上得到相等 = =
```php
<?php
$Anying='Www.Anying.oRg';
$_2cTo='Www.2cTo.cOm';
if ($Anying=$_2cTo) {
	echo '相等';
}else{
	echo '不相等';
}
?>
```