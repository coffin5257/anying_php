**HTML 部分**

1、图3

2、a

3、c d

4、B

5、

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