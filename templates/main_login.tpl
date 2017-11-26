{include file='_header.tpl'}


</head>

<body class="navigation-horizontal page-scrolling dark-scheme">


    {include file="_nav.tpl"}
<!-- Content -->
<div id="content">

    <!-- Post / Single -->
    <article class="post single">

        <!-- Post Image -->
        <div class="post-image bg-image-container">
            <img src="assets/img/posts/post01_lg.jpg" alt="">
        </div>

        <div class="post-content section-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 push-lg-4">
                        <div class="post-add-comment">
                            <h3 class="text-center mb-5">{$page_title}</h3>
                            <div class="content">
                                <form class="form-signin" name="form1" method="post" action="checklogin.php">
                                    <input name="myusername" id="myusername" type="text" class="form-control" placeholder="登入帳號" autofocus>
                                    <input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="密碼">
                                    <!-- The checkbox remember me is not implemented yet...
                                <label class="checkbox">
                                <input type="checkbox" value="remember-me"> Remember me
                                </label>
                                -->
                                    <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">登 入</button>

                                    <div id="message"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </article>

</div>
<!-- Content / End -->




{include file="_footer.tpl"}
<!-- The AJAX login script -->
<script src="js/login.js"></script>
</body>

</html>