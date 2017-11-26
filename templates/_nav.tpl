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
                <li class="nav-item"><a class="nav-item d-lg-none d-xl-none" href="admin.php">發佈</a></li>
                <li class="nav-item"><a class="nav-item d-lg-none d-xl-none" href="logout.php">登出</a></li>
            {else}
                <li class="nav-item"><a class="nav-item d-lg-none d-xl-none" href="signup.php">註冊</a></li>
                <li class="nav-item"><a class="nav-item d-lg-none d-xl-none" href="main_login.php">登入</a></li>
            {/if}
        </ul>
    </div>
    <div class="navbar-nav d-none d-lg-block d-xl-block">
        <ul class="nav nav-primary-horizontal">
             {if isset($smarty.session.username)}
                <li class="nav-item"><a class="nav-item" href="admin.php">發佈</a></li>
                <li class="nav-item"><a class="nav-item" href="logout.php">登出</a></li>
            {else}
                <li class="nav-item"><a class="nav-item" href="signup.php">註冊</a></li>
                <li class="nav-item"><a class="nav-item" href="main_login.php">登入</a></li>
            {/if}
        </ul>
    </div>


    <a id="navigation-toggle" class="nav-toggle mr-5"><span></span><span></span><span></span><span></span></a>

</nav>
<!-- Navigation / End -->