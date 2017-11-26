{include file='_header.tpl'}

<link rel="stylesheet" href="class/crop-avatar/dist/cropper.css">
<link rel="stylesheet" href="class/crop-avatar/css/main.css">
</head>

<body class="navigation-horizontal page-scrolling dark-scheme">


{include file="_nav.tpl"}

<!-- Content -->
<div id="content">
    <!-- Post / Single -->
    <article class="post single">

        <!-- Post Image -->
        <!-- <div class="post-image bg-image-container">
            <img src="assets/img/posts/post01_lg.jpg" alt="">
        </div> -->

        <div class="post-content section-content">
            <!-- <div class="container">
                <div class="row">
                    <div class="col-lg-12">                        
                        <div class="post-add-comment">
                            <h3 class="text-center mb-5">發佈新聞</h3>
                            <div class="content">
                                <form action="admin.php" method="post" id="add-comment" enctype="multipart/form-data" class="validate-form">
                                    <div class="form-group">
                                        <input type="text" name="title" class="form-control" placeholder="標題" required>
                                    </div>
                                    <div class="form-group">
                                        <script src="ckeditor/ckeditor.js"></script>
                                        <textarea name="content" id="article_content" class="form-control"></textarea>
                                        <script>
                                            CKEDITOR.replace('article_content');
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                        <label class="col-12" for="pic">上傳特色圖片</label>
                                        <div class="col-12">
                                            <input type="file" class="form-control" name="pic" id="pic" placeholder="上傳文章封面照片" aria-describedby="fileHelpId" style="font-size:1rem;">
                                            <small id="fileHelpId" class="form-text text-muted" style="font-size:1rem;">建議尺寸：1200x630</small>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 push-md-3">
                                            <input type="hidden" name="op" value="insert">
                                            <input type="hidden" name="username" value="{$smarty.session.username}">
                                            <button class="btn btn-lg btn-primary btn-block">確 認 發 佈</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </article>
</div>
<!-- Content / End -->
<div class="container" id="crop-avatar">

    <!-- Current avatar -->
    <div class="avatar-view" title="更換大頭照">
        <img src="images/avatar.jpg" alt="Avatar">
    </div>

    <!-- Cropping modal -->
    <div class="modal fade" id="avatar-modal" tabindex="-1" role="dialog" aria-labelledby="avatar-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form class="avatar-form" action="class/crop-avatar/crop.php" enctype="multipart/form-data" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"></button>
                        <h4 class="modal-title" id="avatar-modal-label">上傳大頭照</h4>
                    </div>
                    <div class="modal-body">
                        <div class="avatar-body">

                            <!-- Upload image and data -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="avatar-upload">
                                        <input type="hidden" class="avatar-src" name="avatar_src">
                                        <input type="hidden" class="avatar-data" name="avatar_data">
                                        <label for="avatarInput">上傳</label>
                                        <input type="file" class="avatar-input" id="avatarInput" name="avatar_file">
                                    </div>
                                </div>
                            </div>

                            <!-- Crop and preview -->
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="avatar-wrapper"></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="avatar-preview preview-lg"></div>
                                    <div class="avatar-preview preview-md"></div>
                                    <div class="avatar-preview preview-sm"></div>
                                </div>
                            </div>

                            <div class="row avatar-btns">
                                <div class="col-md-9">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-90" title="Rotate -90 degrees">Rotate Left</button>
                                        <!-- <button type="button" class="btn btn-primary" data-method="rotate" data-option="-15">-15deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-30">-30deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45">-45deg</button> -->
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="90" title="Rotate 90 degrees">Rotate Right</button>
                                        <!-- <button type="button" class="btn btn-primary" data-method="rotate" data-option="15">15deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="30">30deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="45">45deg</button> -->
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-block avatar-save">完成</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
                </form>
            </div>
        </div>
    </div>
    <!-- /.modal -->

    <!-- Loading state -->
    <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
</div>
{include file="_footer.tpl"}

<script src="class/crop-avatar/dist/cropper.min.js"></script>
<script src="class/crop-avatar/js/main.js"></script>
</body>

</html>