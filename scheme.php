﻿<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>songli</title>
<meta charset="UTF-8" />
</head>
<body>
<script language="javascript">
	var Request = new Object();
	Request = GetRequest();
	var URL_SCHEME = "songli://chensongchenli/test/scheme?toid=111';
	var u = navigator.userAgent;
	var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1; //android终端
	var isiOS = !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/); //ios终端
	if (isAndroid) 
	{
		window.location.href = URL_SCHEME;
	} 
	else if (isiOS)
	{
		window.location.href = URL_SCHEME;
	}
	else 
	{
		alert('您的机型不是 android 和 ios系统 的');
	}
function GetRequest() {
	var url = location.search; //获取url中"?"符后的字串
	var theRequest = new Object();
	if (url.indexOf("?") != -1) 
	{
		var str = url.substr(1);
		strs = str.split("&");
			for(var i = 0; i < strs.length; i ++) 
			{
				theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);
			}
	}
	return theRequest;
}

</script>
</body>
</html>