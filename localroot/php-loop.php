<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Example 5- loop</title>
</head>
<body>
<? echo "ลูปที่ 1 <br>";
$count = 1;
While ($count <= 5)
{ echo "Hello <br>";
$count = $count + 1; } ?>
<? echo "ลูปที่ 2 <br>";
$count = 1;
do
{ echo "World <br>";
$count = $count + 1; }
while($count<=6); ?>
<? echo "ลูปที่ 3 <br>";
$sum = 0;
For($count=1; $count<=100; $count++)
{ $sum = $sum + $count; }
echo "ผลบวกของเลข 1-100 คือ $sum"; ?>
</body>
</html>
