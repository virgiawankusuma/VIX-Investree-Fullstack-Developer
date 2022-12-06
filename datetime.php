<?php 

require 'vendor/autoload.php';

use Carbon\Carbon;

$Jepara_now = Carbon::now('Asia/Jakarta');

echo "Sekarang jam: ${Jepara_now}.";

?>