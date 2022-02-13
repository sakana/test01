<html>
<head>
<title>トップ</title>
</head>
<body>
<form action="user" method="get">
<h1>本部活動履歴</h1>
<br>
<table border="1">
<tr>
  <th>No</th>
  <th>名前</th>
  <th>性別</th>
  <th>年齢</th>
  <th>支部</th>
  <th>地区</th>
  <th>住所</th>
  <th>最終訪問日</th>
</tr>
<?php foreach($members as $members => $person): ?>
<tr>
  <?php $i = 0; ?>
  <?php foreach($person as $value): ?>
  <td>
    <?php if($i == 0) { ?>
      <button type="submit" value="<?=$value?>" name="id"><?=$value?></button>
      <?php $i++ ;
          } else {
             echo $value;
          } ?>
  </td>
  <?php endforeach; ?>
</tr>
<?php endforeach; ?>
</table>
</form>
</body>
</html>
