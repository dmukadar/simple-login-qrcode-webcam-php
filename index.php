<?php 

if( !session_id() )
{
    session_start();
}

if(@$_SESSION['logged_in'] == true){
    header("Location: home.php");
}
?>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="./main.js"></script>
<script type="text/javascript" src="./llqrcode.js"></script>

<div id="logo">
    <img src="logo-phpindonesia.jpg">
</div>
<div class="title">
    <h1>Event Registration, <?php echo sprintf("%s, %s", date('l'), date('d M Y')); ?></h1>
    <h2>Harap scan QR Code peserta pada kamera dibawah</h2>
</div>
<div style="display:none" id="result"></div>
    <div class="selector" id="webcamimg" onclick="setwebcam()" align="left" ></div>
        <div class="selector" id="qrimg" onclick="setimg()" align="right" ></div>
            <center id="mainbody"><div id="outdiv"></div></center>
                <canvas id="qr-canvas" width="800" height="600"></canvas>

<script type="text/javascript">load();</script>
<script src="./jquery-1.11.2.min.js"></script>

<div id="member-profile">attempting to scan ...</div>

<table class="scanned">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Tanggal Daftar</th>
        </tr>
    </thead>
    <tbody id="absensi">
    </tbody>
</table>