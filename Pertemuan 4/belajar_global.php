<?php

require 'Tabung.php'


//  var_dump(expression) : string
//      var_dump($_GET);

// $_POST ['nama']="alfaria";
//      var_dump($_POST);
    // if (isset($_POST['submit_btn'])) {
 //        if (strlen($_POST['diameter']) > 0) {
 //            echo "login !";
 //        } else {
 //            echo "Isi diameter lebih dahulu";
 //        }
 //    }
    // if (!empty($_POST)){
    //  echo "abcdefg";
    // }
$Luas = 0;
$Volume = 0;

if (isset($_POST['button_submit'])) {
    $tabung = new Tabung;
    $tabung -> setDiameter ($_POST['diameter']);
    
}
//{
//     $diameter=$_POST['diameter'];
//     $tinggi=$_POST['tinggi'];
//     $r = $diameter / 2 ;

//     $Luas = 3,14 * $diameter * $tinggi ;
//     $Volume = 3,14 * $r * $r *$tinggi ;

//     echo "Diameter $diameter <br/>";
//     echo "Tinggi $tinggi  <br/> ";
// }
 ?>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumus Tabung</title>
</head>
<body>
    <!-- <h1>Nama <?php echo isset($_GET['Nama'] : 'Undifined');  ?></h1>
    <form action="" method="post">
        <input type="text" name="diameter">
        <button name="submit_btn">submit</button>
    </form> -->
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="Diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="Tinggi"> <br><br>
        <button>Hitung</button>

        <hr>

       
    </form>
     <ul>
            <li>Luas Selimut :<?= $Luas;  ?></li>
            <li>Volume : <?= $volume;  ?> </li>
     </ul>
</body>
</html>