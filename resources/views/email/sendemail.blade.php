<!DOCTYPE html>
<html>
<head>
	<title>@isset($title) {{ $title }} @else '' @endisset</title>
</head>
<body>
   
<center>
<h2>
	<a href="https://alaminmia.com">Visit My Website : Alamin Mia</a>
</h2>
</center>
  
<p>Hello,</p>

<p>@isset($description) {{ $description }} @else '' @endisset</p>  

<strong>Thanks & Regards.</strong>

</body>
</html>