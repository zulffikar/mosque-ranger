<?php
/**
 * Halaman QR + tautan: Rawat Bumi
 * Route: https://mosqueranger.org/link/rawat-bumi
 * Ubah $targetUrl untuk mengganti tujuan; jika berubah, buat ulang qr-rawat-bumi.png.
 */
$title     = 'Rawat Bumi';
$targetUrl = 'https://mosqueranger.org/relawan';
$qrFile    = 'qr-rawat-bumi.png';
$qrUrl     = '/link/rawat-bumi/' . $qrFile; // path absolut agar tetap tampil tanpa garis miring di akhir URL
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
body{margin:0;min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:32px 20px;font-family:system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;color:#111827;background:linear-gradient(180deg,#fff 0%,#f3f4f8 100%)}
.logo{height:40px;width:auto;margin-bottom:20px;padding:8px 16px;background:#1f1f25;border-radius:999px;box-sizing:content-box}
.card{width:100%;max-width:446px;background:#fff;border-radius:24px;padding:32px;text-align:center;box-shadow:0 10px 40px rgba(17,24,39,.08)}
.badge{display:inline-flex;align-items:center;gap:6px;padding:6px 14px;border-radius:999px;background:#fff0f3;color:#d4003f;font-size:13px;font-weight:600}
.badge::before{content:"";width:7px;height:7px;border-radius:50%;background:#f9004d}
h1{margin:14px 0 8px;font-size:26px;font-weight:800;color:#111827}
.lead{margin:0 0 24px;color:#6b7280;line-height:1.55;font-size:15px}
.qrbox{display:block;width:100%;max-width:324px;margin:0 auto 24px;padding:16px;border:2px dashed #e5e7eb;border-radius:20px}
.qrbox img{display:block;width:100%;height:auto}
.urlbox{display:flex;align-items:center;gap:10px;margin-bottom:20px;padding:10px 12px;border:1px solid #e5e7eb;border-radius:12px;background:#fafafa;text-align:left}
.urlbox div{flex:1;min-width:0}
.label{margin:0 0 2px;font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.5px;color:#9ca3af}
.urlbox input{width:100%;padding:0;border:0;background:transparent;font:13px ui-monospace,Menlo,Consolas,monospace;color:#374151;text-overflow:ellipsis;outline:0}
.btn{display:inline-flex;align-items:center;justify-content:center;padding:12px 18px;border:1px solid transparent;border-radius:12px;font-size:15px;font-weight:600;text-decoration:none;cursor:pointer;font-family:inherit;transition:.2s}
.btn.copy{padding:8px 14px;font-size:14px;background:#fff;border-color:#e5e7eb;color:#374151}
.btn.copy:hover{background:#f3f4f6}
.btn.red{background:#f9004d;color:#fff;box-shadow:0 4px 12px rgba(249,0,77,.3)}
.btn.red:hover{background:#d4003f}
.btn.dark{background:#111827;color:#fff}
.btn.dark:hover{background:#000}
.actions{display:flex;gap:12px}
.actions .btn{flex:1}
.foot{margin:20px 0 0;padding-top:16px;border-top:1px solid #f0f0f3;font-size:12px;color:#9ca3af}
.foot a{color:#6b7280}
@media(max-width:420px){.card{padding:24px 18px}.actions{flex-direction:column}}
</style>
</head>
<body>
<img class="logo" src="/assets/img/logo/bb938a4f178b51b3.png" alt="Mosque Ranger">
<main class="card">
 <span class="badge"><?= $e($title) ?></span>
 <h1>Formulir <?= $e($title) ?></h1>
 <p class="lead">Arahkan kamera smartphone Anda ke QR code berikut, atau buka tautan di bawah untuk mengisi formulir.</p>

 <div class="qrbox"><img src="<?= $e($qrUrl) ?>" alt="QR code <?= $e($title) ?>" width="292" height="292"></div>

 <div class="urlbox">
  <div>
   <p class="label">Form URL</p>
   <input id="url" type="text" value="<?= $e($targetUrl) ?>" readonly onfocus="this.select()">
  </div>
  <button class="btn copy" type="button" id="copy">Copy</button>
 </div>

 <div class="actions">
  <a class="btn red" href="<?= $e($qrUrl) ?>" download="<?= $e($qrFile) ?>">Download QR (PNG)</a>
  <a class="btn dark" href="<?= $e($targetUrl) ?>" target="_blank" rel="noopener">Open Link</a>
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
