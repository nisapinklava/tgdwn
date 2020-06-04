<!DOCTYPE <html>
<head>
 <meta charset="utf-8">
 <title></title>
 <style type="text/css" media="screen">
  body{
   background-color: #ff006e;
   color: white;
   margin-left: 90px;
   margin-top: 30px;
            font-family: Arial;
   }
  div {
   width: 30px;
   height: 30px;
   display: inline-block;
  }

.myButton {
 box-shadow:inset 0px 1px 0px 0px #fbafe3;
 background:linear-gradient(to bottom, #ff5bb0 5%, #ef027d 100%);
 background-color:#ff5bb0;
 border-radius:6px;
 border:1px solid #ee1eb5;
 display:inline-block;
 cursor:pointer;
 color:#ffffff;
 font-family:Arial;
 font-size:15px;
 font-weight:bold;
 padding:6px 24px;
 text-decoration:none;
 text-shadow:0px 1px 0px #c70067;
}
.myButton:hover {
 background:linear-gradient(to bottom, #ef027d 5%, #ff5bb0 100%);
 background-color:#ef027d;
}
.myButton:active {
 position:relative;
 top:1px;
}
input{
border:2px solid lightgrey;
background: white;
}

 </style>
</head>
<body>
 <form action="" method="post">
  <label for=""> Jumlah anak tangga: </label>
  <input style="border-radius:5px" type="number" name="jumlahAnakTangga" autocomplete="off" max="36">
  <br><br>
  <label for=""> Warna: </label>
<input type="radio" name="warna" value="#00FF21"> <div class="color" style="width:20px;height:20px;border-radius:50%;background:#00FF21"></div>
<input type="radio" name="warna" value="#B200FF" > <div class="color" style="width:20px;height:20px;border-radius:50%;background:#B200FF"></div>
<input type="radio" name="warna" value="#FFD800" > <div class="color" style="width:20px;height:20px;border-radius:50%;background:#FFD800"></div>
<input type="radio" name="warna" value="#00d2d3" > <div class="color" style="width:20px;height:20px;border-radius:50%;background:#00d2d3"></div>
<input type="radio" name="warna" value=" #FF69B4" > <div class="color" style="width:20px;height:20px;border-radius:50%;background: #FF69B4"></div>
  <br><br>
  <button class="myButton" type="submit" name="submit" value="">SUBMIT</button>
 </form>
 <br>
 <!-- PHP -->
 <?php
 if(isset($_POST['submit'])) :
  $warna = $_POST['warna'];
  for($i=0; $i<$_POST['jumlahAnakTangga']; $i++):
   for($j=$_POST['jumlahAnakTangga']; $j>$i; $j--):
 ?>
  <div style="background: <?= $warna ?>"></div>

 <?php
   endfor;
   echo "<br>";
  endfor;
 endif;
 ?>
</body>
</html>
