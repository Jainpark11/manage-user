<?php
$g_title = '회원가입을 축하드립니다.';
$js_array = ['./js/member_success.js'];
$menu_code ="member";
include 'inc_header.php';


?>
<main class="w-75 mx-auto border rounded-5 p-5 d-flex gap-5" style="height: calc(100vh - 257px)">
    <img src="./images/logo2.svg" class="w-50">
    <div>
        <h3>회원가입을 축하드립니다.</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum veniam aliquid aperiam reprehenderit tempora quos! Enim nulla molestiae nostrum magni!</p>
        <button class="btn btn-primary" id="btn_login">로그인하기</button>
    </div>
</main>

<?php

include 'inc_footer.php';

?>