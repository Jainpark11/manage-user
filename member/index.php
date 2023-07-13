<?php
session_start();


$ses_id = (isset($_SESSION['ses_id']) && $_SESSION['ses_id'] != '') ? $_SESSION['ses_id'] :'';
$ses_level = (isset($_SESSION['ses_level']) && $_SESSION['ses_level'] != '') ? $_SESSION['ses_level'] :'';

$g_title = '박자인::php';
$js_array = ['./js/home.js'];
$menu_code = "home";
include 'inc_header.php';


?>
<main class="mx-auto border rounded-2 p-5 d-flex gap-5" style="height: calc(100vh - 257px)">
<img src="https://image.spreadshirtmedia.com/image-server/v1/compositions/T210A1PA4301PT17X86Y61D12417823W17132H10673/views/1,width=550,height=550,appearanceId=1,backgroundColor=FFFFFF,noPt=true/php-elephant-mens-t-shirt.jpg" class="w-50" alt="">
<div>
    <h3>MAIN HOME</h3>
</div>
</main>

<?php

include 'inc_footer.php';

?>