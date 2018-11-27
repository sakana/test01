<html>
<head>
<title>トップ</title>
</head>
<body>
<form action="user" method="get">
<h1>Here WE GO</h1>
<br>
<h2>名前はなんと申す？</h2>
<br>
<?php for($i = 1; $i < 7;$i++): ?>
<button type="submit" name="id" value="<?=$i?>"></button> 
<?php endfor; ?>
</form>
</body>
</html>
