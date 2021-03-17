<?php
$hands=['ぐー','ちょき','ぱー'];
$picts=['gu','choki','pa'];
$results=['あいこだ','きみのまけだよ...','きみのかち！'];
if(isset($_POST['hand'])){
  $userHand=(int)$_POST['hand'];
  $pcHand=rand(0,count($hands)-1);
}
 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">
<title>じゃんけん</title>
</head>
<body>

<form method="post">
<?php for($i=0;$i<count($hands);$i++):?>
  <?php $checked=isset($userHand) && $userHand===$i ? 'checked':'';?>
  <input type="radio" name="hand" value="<?=$i?>" <?=$checked?>><?=$hands[$i]?><br>
<?php endfor;?>
  <button class="btn" type="submit">じゃんけん！</button>
</form>

<div class="hyouzi">

<p>きみ</p>
<p>あいて</p>

</div>

<?php if(isset($_POST['hand'])):?>
  <div>
    <img src="img/<?=$picts[$userHand]?>.png">
    <img src="img/<?=$picts[$pcHand]?>.png">
  </div>
  <p><?=$results[($userHand + 3 -$pcHand) % 3]?></p>
<?php endif;?>



</body>
</html>




