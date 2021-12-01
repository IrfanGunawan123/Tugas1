<?php
$hasil = "";
if(isset($_POST['hitung'])){
$sisi = $_POST['sisi'];
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];
$panjang = $_POST['panjang'];
$lebar = $_POST['lebar'];
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$pilih = $_POST['pilih'];
$pilih1 = $_POST['pilih1'];

//Proses persegi
if($pilih == "Persegi"){
    if($pilih1 == "Luas"){
        $hasil = $sisi * $sisi;
        
    }
    elseif($pilih1 == "Keliling"){
        $hasil = $sisi + $sisi + $sisi + $sisi;
    }
}

//Proses persegi panjang
elseif($pilih == "Persegi Panjang"){
    if($pilih1 == "Luas"){
        $hasil = $panjang * $lebar;
    }
    elseif($pilih1 == "Keliling"){
        $hasil = $panjang + $lebar + $panjang + $lebar;
    }
}

//Proses segitiga
elseif($pilih == "Segitiga"){
    if($pilih1 == "Luas"){
        $hasil = 0.5 * $alas * $tinggi;
    }
    elseif($pilih1 == "Keliling"){
        $hasil = $sisi + $sisi + $sisi;
    }
}

//Proses jajargenjang
elseif($pilih == "Jajargenjang"){
    if($pilih1 == "Luas"){
        $hasil = $alas * $tinggi;
    }
    elseif($pilih1 == "Keliling"){
        $hasil = $a * $b * $c * $d;
    }
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Latihan || Irfan Gunawan</title>
  </head>
  <body>
      <fieldset>
      <center><h2>Kalkulator Bangun Datar</h2></center>
      <center>
      <hr style="width: 300px; margin-top: 20px;">
      </center>
   <form action="" method="post">
       <center>
       <table border="7" cellpadding="3">
           <tr>
               <td align="center" colspan="2" >!--Perhitungan Bangun datar--!</td>
           </tr>
           <tr>
               <td>Pilih Bangun Datar</td>
               <td>
                   <select name="pilih" id="">
                       <option value="Persegi">Persegi</option>
                       <option value="Persegi Panjang">Persegi Panjang</option>
                       <option value="Segitiga">Segitiga</option>
                       <option value="Jajargenjang">Jajargenjang</option>
                   </select>
               </td>
           </tr>
           <tr>
               <td>Pilih Perhitungan</td>
                <td>
                    <select name="pilih1" id="">
                        <option value="Luas">Luas</option>
                        <option value="Keliling">Keliling</option>
                    </select>
                </td>
           </tr>
           <tr>
               <td>Masukkan Nilai</td>
               <td>
                  <input type="number" name="sisi" placeholder="Masukkan Sisi"><br>
                  <input type="number" name="alas" placeholder="Masukkan Alas"><br>
                  <input type="number" name="tinggi" placeholder="Masukkan Tinggi"><br>
                  <input type="number" name="panjang" placeholder="Masukkan Panjang"><br>
                  <input type="number" name="lebar" placeholder="Masukkan Lebar"><br>
                  <input type="number" name="a" placeholder="Masukkan Sudut A"><br>
                  <input type="number" name="b" placeholder="Masukkan Sudut B"><br>
                  <input type="number" name="c" placeholder="Masukkan Sudut C"><br>
                  <input type="number" name="d" placeholder="Masukkan Sudut D"><br>
               </td>
           </tr>
           <tr>
               <td colspan="2"><input type="submit" value="Hitung" name="hitung">
            </td>
           </tr>
           <tr>
               <td>Hasilnya</td>
               <td><?php echo $hasil;  ?></td>
           </tr>
       </table>
    </center>
   </form>
   </fieldset>
   <p>Keterangan :</p>
   <h4>1. Persegi</h4>
   <p>Rumus mencari luas = sisi x sisi</p>
   <p>Rumus mencari keliling = sisi + sisi + sisi + sisi</p>
   <h4>2. Persegi Panjang</h4>
   <p>Rumus mencari luas = panjang x lebar</p>
   <p>Rumus mencari keliing = panjang + lebar + panjang + lebar</p>
   <h4>3. Segitiga</h4>
   <p>Rumus mencari luas = 0.5 alas x tinggi</p>
   <p>Rumus mencari keliing = sisi + sisi + sisi</p>
   <h4>4. Jajargenjang</h4>
   <p>Rumus mencari luas = alas x tinggi</p>
   <p>Rumus mencari keliing = sudut a + sudut b + sudut c + sudut d</p>
  </body>
</html>