<?php
/**
 * Redirect URL for Mosque Ranger - DP3 Documentation
 * Target route: https://mosqueranger.org/qr/dp3-documentation
 */

// URL tujuan dokumentasi Instagram DP3
$destinationUrl = 'https://www.instagram.com/p/DfQkC_mExmN/?img_index=1';

// 302 Found (Temporary Redirect) - ideal agar browser tidak melakukan caching permanen saat URL diubah nanti.
header('Location: ' . $destinationUrl, true, 302);
exit;
