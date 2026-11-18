<?php
/**
 * Halaman QR + tautan: Rawat Bumi
 * Route: https://mosqueranger.org/link/rawat-bumi
 * Ubah $targetUrl untuk mengganti tujuan; jika berubah, buat ulang qr-rawat-bumi.png.
 */
$title     = 'Rawat Bumi';
$targetUrl = 'https://docs.google.com/forms/d/e/1FAIpQLSfUsN-eaYMl4nwYW4cejPYPVf5n1m_FCO6OB-wwd56WYBpInQ/viewform?usp=dialog';
$qrFile    = 'qr-rawat-bumi.png';
$e = fn($s) => htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= $e($title) ?> || Mosque Ranger</title>
<meta name="description" content="Pindai QR code atau buka tautan untuk mengisi formulir <?= $e($title) ?> Mosque Ranger.">
<link rel="icon" href="/assets/img/logo/bb938a4f178b51b3.png">
<style>
*{box-sizing:border-box}
body{margin:0;min-height:100vh;display:flex;align-items:center;justify-content:center;padding:24px;font-family:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;color:#1f1f25;background:linear-gradient(145deg,#f81f01 0%,#ee076e 100%)}
.card{width:100%;max-width:480px;background:#fff;border-radius:16px;padding:32px 28px;text-align:center;box-shadow:0 20px 50px rgba(0,0,0,.2)}
.logo{height:44px;width:auto;margin-bottom:14px;padding:8px 16px;background:#1f1f25;border-radius:999px;box-sizing:content-box}
.eyebrow{margin:0;font-size:13px;letter-spacing:3px;text-transform:uppercase;color:#f9004d;font-weight:600}
h1{margin:6px 0 10px;font-size:32px;font-weight:800}
.lead{margin:0 0 20px;color:rgba(29,29,36,.75);line-height:1.6;font-size:15px}
.qr{display:block;width:100%;max-width:280px;height:auto;margin:0 auto 20px;border:1px solid #eee;border-radius:12px}
.label{margin:0 0 6px;font-size:12px;text-transform:uppercase;letter-spacing:1px;color:#717173}
.urlrow{display:flex;gap:8px;margin-bottom:20px}
.urlrow input{flex:1;min-width:0;padding:10px 12px;border:1px solid #d5d7e0;border-radius:8px;font-size:13px;color:#444;background:#f7f8fb}
.btn{display:inline-block;padding:10px 18px;border:2px solid #f9004d;border-radius:8px;font-size:14px;font-weight:600;text-decoration:none;cursor:pointer;background:#fff;color:#f9004d;font-family:inherit;transition:.2s}
.btn:hover{background:#f9004d;color:#fff}
.btn.solid{background:#f9004d;color:#fff}
.btn.solid:hover{background:#d4003f;border-color:#d4003f}
.actions{display:flex;gap:10px;flex-wrap:wrap;justify-content:center}
.actions .btn{flex:1 1 150px}
.foot{margin:22px 0 0;font-size:12px;color:#717173}
.foot a{color:inherit}
</style>
</head>
<body>
<main class="card">
 <img class="logo" src="/assets/img/logo/bb938a4f178b51b3.png" alt="Mosque Ranger">
 <p class="eyebrow">Mosque Ranger</p>
 <h1><?= $e($title) ?></h1>
 <p class="lead">Arahkan kamera smartphone Anda ke QR code berikut, atau buka tautan di bawah untuk mengisi formulir.</p>

 <img class="qr" src="<?= $e($qrFile) ?>" alt="QR code <?= $e($title) ?>" width="280" height="280">

 <p class="label">Form URL</p>
 <div class="urlrow">
  <input id="url" type="text" value="<?= $e($targetUrl) ?>" readonly onfocus="this.select()">
  <button class="btn" type="button" id="copy">Copy</button>
 </div>

 <div class="actions">
  <a class="btn" href="<?= $e($qrFile) ?>" download="<?= $e($qrFile) ?>">Download QR (PNG)</a>
  <a class="btn solid" href="<?= $e($targetUrl) ?>" target="_blank" rel="noopener">Open Link</a>
 </div>

 <p class="foot"><a href="/">mosqueranger.org</a></p>
</main>
<script>
document.getElementById('copy').addEventListener('click', function () {
  var btn = this, input = document.getElementById('url');
  var done = function () { btn.textContent = 'Copied!'; setTimeout(function () { btn.textContent = 'Copy'; }, 1500); };
  if (navigator.clipboard && window.isSecureContext) {
    navigator.clipboard.writeText(input.value).then(done);
  } else {
    input.select(); document.execCommand('copy'); done();
  }
});
</script>
</body>
</html>
