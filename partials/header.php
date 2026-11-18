<?php
// $isHome (bool) controls transparent hero-header styling.
$isHome = $isHome ?? false;
?>
<body<?php if (!empty($isHome)): ?><?php else: ?> class="position-relative spybody" data-spy=scroll data-target=.navbar-example2 data-offset=150<?php endif; ?>>
 <div class=main-page>
 
<div id=my_switcher class=my_switcher>
 <ul>
 <li>
 <a href=javascript:void(0) data-theme=light class="setColor light active sf-hidden">
 
 </a>
 </li>
 <li>
 <a href=javascript:void(0) data-theme=dark class="setColor dark">
 <img src=assets/img/98a94822338a1a75.svg alt="Vector Images"><span title="Dark Mode" class=sf-hidden> Dark</span>
 </a>
 </li>
 </ul>
</div>
 
 <header class="header-area formobile-menu header--transparent black-logo-version<?php if (!empty($isHome)): ?> color-white<?php endif; ?>">
 <div class=header-wrapper id=header-wrapper>
 <div class=header-left>
 <div class=logo>
 <a href=index.php>
 <img src=assets/img/logo/bb938a4f178b51b3.png alt="Mosque Ranger">
 </a>
 </div>
 </div>
 <div class=header-right>
 <div class="mainmenunav d-lg-block">
 
 <nav class=main-menu-navbar>
 <ul class=mainmenu>
 <li>
 <a href=index.php>Beranda</a>
 </li>
 <li class=has-droupdown>
 <a href=#>Tentang Kami</a>
 <ul class=submenu>
 
 
 
 <li><a href=profil-alternatif.php>Profil</a></li>
 <li><a href=tim-25.php>Tim</a></li>
 </ul>
 </li>
 
 <li class=has-droupdown>
 <a href=#>Program</a>
 <ul class=submenu>
 <li><a href=program-pendidikan.php>Pendidikan</a></li>
 <li><a href=program-ekonomi.php>Ekonomi</a></li>
 <li><a href=program-sosial.php>Sosial Kemanusiaan</a></li>
 <li><a href=program-kesehatan.php>Kesehatan</a></li>
 <li><a href=program-qurban.php>Qurban</a></li>
 </ul>
 </li>
 <li>
 <a href=kabar-terkini.php>Berita</a>
 </li>
 <li class="d-none sf-hidden">
 
 </li>
 <li>
 <a href=kontak-kami.php>Kontak</a>
 </li>
 </ul>
 </nav>
 
 </div>
 <div class=header-btn>
 <a class=rn-btn href=#>
 <span>Donasi</span>
 </a>
 </div>
 
 <div class="humberger-menu d-block d-lg-none pl--20 sf-hidden">
 
 </div>
 
 
 <div class="close-menu d-block d-lg-none sf-hidden">
 
 </div>
 
 </div>
</div> </header>
