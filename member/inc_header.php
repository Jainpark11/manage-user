<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($g_title) ? $g_title : '박자인::PHP' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- <script src="./js/member.js"></script> -->
    <?php
    if (isset($js_array)) {
        foreach ($js_array as $var) {
            echo '<script src="' . $var . '"></script>' . PHP_EOL;
        }
    }
    ?>
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/member" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="https://image.spreadshirtmedia.com/image-server/v1/compositions/T210A1PA4301PT17X86Y61D12417823W17132H10673/views/1,width=550,height=550,appearanceId=1,backgroundColor=FFFFFF,noPt=true/php-elephant-mens-t-shirt.jpg" style="width: 2rem" class="me-2">
                <span class="fs-4">박자인 php</span>
            </a>

            <ul class="nav nav-pills">
                <?php if ($ses_id != '') {
                    //로그인 상태
                    ?>
                    <li class="nav-item"><a href="/member/" class="nav-link<?= ($menu_code == 'home') ? ' active' : ''; ?> " aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="/member/stipulation.php" class="nav-link<?= ($menu_code == 'company') ? ' active' : ''; ?>">회사소개</a></li>

                    <?php if($ses_level==10){
                    ?>
                   <li class="nav-item"><a href="/member/mypage.php" class="nav-link<?= ($menu_code == 'member') ? ' active' : ''; ?>">Admin</a></li>
                   <?php
                    }else { ?>
                    <li class="nav-item"><a href="/member/mypage.php" class="nav-link<?= ($menu_code == 'member') ? ' active' : ''; ?>">마이페이지</a></li>
                    <?php } ?>
                    <li class="nav-item"><a href="#" class="nav-link<?= ($menu_code == 'board') ? ' active' : ''; ?> ">게시판</a></li>
                    <li class="nav-item"><a href="/member/pg/logout.php" class="nav-link<?= ($menu_code == 'logout') ? ' active' : ''; ?>">로그아웃</a></li>
                    <?php
                    }else{
                    // 로그인 안된 상태
                    ?>
                    <li class="nav-item"><a href="/member/" class="nav-link<?= ($menu_code == 'home') ? ' active' : ''; ?> " aria-current="page">Home</a></li>
                    <li class="nav-item"><a href="/member/stipulation.php" class="nav-link<?= ($menu_code == 'company') ? ' active' : ''; ?>">회사소개</a></li>
                    <li class="nav-item"><a href="/member/stipulation.php" class="nav-link<?= ($menu_code == 'member') ? ' active' : ''; ?>">회원가입</a></li>
                    <li class="nav-item"><a href="#" class="nav-link<?= ($menu_code == 'board') ? ' active' : ''; ?> ">게시판</a></li>
                    <li class="nav-item"><a href="/member/login.php" class="nav-link<?= ($menu_code == 'login') ? ' active' : ''; ?>">로그인</a></li>
                <?php
                }
                ?>
            </ul>
        </header>