<?php
require "script/conn.php";
$kdJenis = $_GET['kdJenis'];
$query = "select namaEvent,kdJenis,jenisTiket,
            concat('Rp. ',format(harga,0)) harga
            from vEvent where kdJenis = '$kdJenis'";

$harga = mysqli_query($conn,"select harga from vEvent where kdJenis = '$kdJenis'" );
$total = 0;
while ($row = mysqli_fetch_assoc($harga)) {
    $total += $row['harga'];
}

$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style_payment.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="payment">
            <div class="card">
                <h2>Payment Confirmation</h2>
                <form action="script/payment.php" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="kdJenis" value=<?php echo $kdJenis;?>>
                    <input type="hidden" name="total" value=<?php  echo $total;?>>
                    <input type="text" name="fullname" placeholder="Fullname">
                    <input type="text" name="norek" placeholder="Account Number">
                    <select id="payment" name="payment_method">
                        <option value="none" selected disabled>Payment Method</option>
                        <option value="BNI">BNI</option>
                        <option value="BCA">BCA</option>
                        <option value="Dana">Dana</option>
                        <option value="Shopeepay">Shopeepay</option>
                    </select>
                    <div class="fileup">
                        <p>Evidence</p>
                        <input type="file" name="evidence"></div>

                    <input type="submit" value="Confirm" class="btn">
                </form>
            </div>
            
            <div class="card">
                <h2>Payment Guide</h2>
                <ol>
                    <li>Isi data pemesanan tiket.</li>
                    <li>Lakukan transfer sejumlah pesanan ke no. rekening yang tertera di samping.</li>
                    <li>Upload bukti Pembayaran</li>
                    <li>Tekan tombol confirm</li>
                    <li>Tunggu pembayaran kamu dikonfirmasi...</li>
                </ol>
            </div>
        </div>

        <aside>
            <div class="side">
                <h2>Order Summary</h2>
                <?php
                    while ($row = mysqli_fetch_assoc($result) ) {
                    echo'<p class="title">'.$row['namaEvent'].'</p>
                    <div class="summary">
                        <p class="item">'.$row['jenisTiket'].'</p>
                        <p>1</p>
                    </div>
                    <div class="total-pay">
                        <p>Total</p>
                        <p>'.$row['harga'].'</p>
                    </div>';
                    }
                ?>
            </div>

            <div class="side">
                <h2>Rekening Pembayaran</h2>
                <p class="item">BCA : 121212121212121212</p>
                <p class="item">BNI : 121212121212121212</p>
                <p class="item">Dana : 081221123443</p>
                <p class="item">Shopeepay : 081221123443</p>
            </div>
        </aside>

        <aside>
            
        </aside>
    </div>
</body>
</html>
