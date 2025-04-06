<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="postalma.php?islem=ekle" method="post">
    <input type="text" name="isim"> <br>
    <input type="text" name="soyisim"> <br>
    <hr>
    <label>PHP</label>
    <input type="checkbox" value="PHP" name="dil[]"> <br>
    <label>C++</label>
    <input type="checkbox" value="C++" name="dil[]"> <br>
    <label>C</label>
    <input type="checkbox" value="C" name="dil[]"> <br>

    <button type="submit">Gönder</button>
</form>
</body>
</html>