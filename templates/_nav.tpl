<!-- Loader -->
<div id="page-loader">
    <svg class="loader" viewBox="0 0 28 28">
        <circle cx="14" cy="14" r="12" stroke-width="2"></circle>
    </svg>
</div>

<!-- Navigation -->
<nav id="navigation" class="navigation-horizontal dark">

    <!-- Name -->
    <a href="index.php">
        <img src="images/logo.png" alt="" class="ml-3">
    </a>

    <div class="navbar-nav mr-auto">
        <ul class="nav nav-primary-horizontal">
            <li class="nav-item"><a href="index.php" class="nav-link">首頁</a></li>
            <li class="nav-item"><a href="javascript:;" class="nav-link">編輯精選</a></li>
            <li class="nav-item"><a href="javascript:;" class="nav-link">街巷故事</a></li>
            <li class="nav-item"><a href="javascript:;" class="nav-link">市井觀點</a></li>
            <li class="nav-item"><a href="javascript:;" class="nav-link">私房知識塾</a></li>
             {if isset($smarty.session.username)}
                <li class="nav-item"><a class="nav-item d-lg-none d-xl-none" href="user-setting.php">設定</a></li>
                <li class="nav-item"><a class="nav-item d-lg-none d-xl-none" href="admin.php">發佈</a></li>
                <li class="nav-item"><a class="nav-item d-lg-none d-xl-none" href="logout.php">登出</a></li>
            {else}
                <li class="nav-item"><a class="nav-item d-lg-none d-xl-none" href="signup.php">註冊</a></li>
                <li class="nav-item"><a class="nav-item d-lg-none d-xl-none" href="main_login.php">登入</a></li>
            {/if}
        </ul>
    </div>
    <!-- <div class="navbar-nav d-none d-lg-block d-xl-block">
        <ul class="nav nav-primary-horizontal">
             {if isset($smarty.session.username)}
                <li class="nav-item"><a class="nav-item" href="admin.php">發佈</a></li>
                <li class="nav-item"><a class="nav-item" href="logout.php">登出</a></li>
            {else}
                <li class="nav-item"><a class="nav-item" href="signup.php">註冊</a></li>
                <li class="nav-item"><a class="nav-item" href="main_login.php">登入</a></li>
            {/if}
        </ul>
    </div> -->
    <div class="navbar-nav d-none d-lg-block d-xl-block">
        <div class="dropdown d-linlie photo pr-5">
            {if isset($smarty.session.username)}
                <a class="btn btn-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:0;border:0;">
                <img src="images/avatar.jpg" class="" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-right mr-5" aria-labelledby="dropdownMenu2">
                    <h6 class="dropdown-header"><em>Hi!</em> {$smarty.session.username}</h6>
                    <a href="user-setting.php" class="dropdown-item">設定</a>
                    <div class="dropdown-divider"></div>
                    <a href="admin.php" class="dropdown-item">發佈</a>
                    <div class="dropdown-divider"></div>
                    <a href="logout.php" class="dropdown-item">登出</a>
                </div>
            {else}
                <a class="btn btn-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="padding:0;border:0;">
                <img src="images/avatar.jpg" class="" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-right mr-5" aria-labelledby="dropdownMenu2">
                    <h6 class="dropdown-header">請選擇登入或是免費註冊</h6>
                    <a href="main_login.php" class="dropdown-item">登入</a>
                    <div class="dropdown-divider"></div>
                    <a href="signup.php" class="dropdown-item">免費註冊</a>
                </div>
            {/if}
        </div>
    </div>

    <a id="navigation-toggle" class="nav-toggle mr-5"><span></span><span></span><span></span><span></span></a>

</nav>
<!-- Navigation / End -->