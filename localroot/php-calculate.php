<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Example1</title>
</head>
<body>
<?
$price1 = 12000;
$price2 = 7000;
$discount = 0;
If ($price1 >= 10000)
{ $discount = $price1*0.05; }
Else
{ $discount = $price1*0.03; }
$netprice = $price1 - $discount;
echo "สินค้าชิ้นที่ 1 ราคา $price1 บาท<br>";
echo "ได้รับส่วนลด $discount บาท<br>";
echo "เพราะฉะนั้น ราคาสินค้าสุทธิเท่ากับ $netprice บาท<br>";
echo "**************************************** <br>";
$discount = 0;
If ($price2 >= 10000)
{ $discount = $price2*0.05; }
Else
{ $discount = $price2*0.03; }
$netprice = $price2 - $discount;
echo "สินค้าชิ้นที่ 2 ราคา $price2 บาท<br>";
echo "ได้รับส่วนลด $discount บาท<br>";
echo "เพราะฉะนั้น ราคาสินค้าสุทธิเท่ากับ $netprice บาท<br>";
?>
</body>
</html>
