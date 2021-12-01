<?php
if(isset($_POST['simpan'])){
$dewasa = $_POST['dewasa'];
$anak = $_POST['anak'];
$bayi = $_POST['bayi'];
$depart = $_POST['depart'];
$return = $_POST['return'];

if($depart == "Jakarta"){
    if($return == "Singapore"){
        $harga_anak = 300000 * 0.4 * $anak;
        $harga_bayi = 300000 * 0.25 * $bayi;
        $harga_dewasa = 300000 * $dewasa;
        $total_harga = $harga_dewasa + $harga_anak + $harga_bayi;
        
    }
    elseif($return == "Kuala_Lumpur"){
        $harga_anak = 250000 * 0.4 * $anak;
        $harga_bayi = 250000 * 0.25 * $bayi;
        $harga_dewasa = 250000 * $dewasa;
        $total_harga = $harga_dewasa + $harga_anak + $harga_bayi;
    }
}
elseif($depart == "Semarang"){
    if($return == "Singapore"){
        $harga_anak = 350000 * 0.4 * $anak;
        $harga_bayi = 350000 * 0.25 * $bayi;
        $harga_dewasa = 350000 * $dewasa;
        $total_harga = $harga_dewasa + $harga_anak + $harga_bayi;
    }
    elseif($return == "Kuala_Lumpur"){
        $harga_anak = 300000 * 0.4 * $anak;
        $harga_bayi = 300000 * 0.25 * $bayi;
        $harga_dewasa = 300000 * $dewasa;
        $total_harga = $harga_dewasa + $harga_anak + $harga_bayi;
    }
}
elseif($depart == "Palembang"){
    if($return == "Singapore"){
        $harga_anak = 325000 * 0.4 * $anak;
        $harga_bayi = 325000 * 0.25 * $bayi;
        $harga_dewasa = 325000 * $dewasa;
        $total_harga = $harga_dewasa + $harga_anak + $harga_bayi;
    }
    elseif($return == "Kuala_Lumpur"){
        $harga_anak = 285000 * 0.4 * $anak;
        $harga_bayi = 285000 * 0.25 * $bayi;
        $harga_dewasa = 285000 * $dewasa;
        $total_harga = $harga_dewasa + $harga_anak + $harga_bayi;
    }
}
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Tugas</title>
  </head>
  <body>
   <form action="" method="post">
       <center>
       <table border="1" cellpadding="3">
           <tr>
               <td align="center" colspan="2" >Pemesanan Tiket Online</td>
           </tr>
           <tr>
               <td align="center" colspan="2">Promo untuk keberangkatan 23 Januari 2021..!!</td>
           </tr>
           <tr>
               <td>Depart</td>
               <td>
                   <select name="depart" id="">
                       <option value="Jakarta">Jakarta</option>
                       <option value="Semarang">Semarang</option>
                       <option value="Palembang">Palembang</option>
                   </select>
               </td>
           </tr>
           <tr>
               <td>Return</td>
                <td>
                    <select name="return" id="">
                        <option value="Singapore">Singapore</option>
                        <option value="Kuala_Lumpur">Kuala Lumpur</option>
                    </select>
                </td>
           </tr>
           <tr>
               <td>Jumlah Tiket</td>
               <td>
                  <input type="number" name="dewasa" placeholder="Jumlah Tiket">&nbsp;Dewasa(+17)<br>
                  <input type="number" name="anak" placeholder="Jumlah Tiket">&nbsp;Anak(+2)<br>
                  <input type="number" name="bayi" placeholder="Jumlah Tiket">&nbsp;Bayi(0-2)
               </td>
           </tr>
           <tr>
               <td>Mata Uang</td>
               <td>
                   <input type="radio" name="usd" checked>&nbsp;IDR
               </td>
           </tr>
           <tr>
               <td colspan="2"><input type="submit" value="Simpan" name="simpan">&nbsp;&nbsp;
               <input type="reset" value="Reset">
            </td>
           </tr>
       </table>
    </center>
   </form>

   <center>
       <hr style="width: 300px; margin-top: 20px;">
   </center>

   <center>
   <table border="1" cellpadding="3" style="width: 300; margin-top: 20px;">
       <tr>
           <td colspan="2" align="center">==STRUK TRANSAKSI==</td>
       </tr>
       <tr>
           <td>Depart</td>
           <td><?php echo $depart;?></td>
       </tr>
       <tr>
           <td>Return</td>
           <td><?php echo $return;  ?></td>
       </tr>
       <tr>
           <td>Jumlah Penumpang</td>
           <td>Dewasa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $dewasa; ?> Orang<br>
               Anak-anak&nbsp; : <?php echo $anak; ?> Orang<br>
               Bayi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php echo $bayi; ?> Orang<br>
           </td>
       </tr>
    
   </table>
</center>
  
  </body>
</html>