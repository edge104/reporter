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

        <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
            <input name="newuser" id="newuser" type="text" class="form-control" placeholder="登入帳號" autofocus>
            <input name="email" id="email" type="text" class="form-control" placeholder="Email信箱">
            <br>
            <input name="password1" id="password1" type="password" class="form-control" placeholder="設定登入密碼">
            <input name="password2" id="password2" type="password" class="form-control" placeholder="確認密碼">

            <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">送出註冊申請</button>
            <small id="passwordHelpBlock" class="form-text text-muted" style="font-size:1rem">
                表單送出後，系統將寄出郵件驗證信函
            </small>
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
    <script src="js/signup.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script>
        $("#usersignup").validate({
            rules: {
                email: {
                    email: true,
                    required: true
                },
                password1: {
                    required: true,
                    minlength: 4
                },
                password2: {
                    equalTo: "#password1"
                }
                                
</body>
</html>


