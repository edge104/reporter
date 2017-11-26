<div class="post-content section-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="post-add-comment">
                    <h3 class="text-center mb-5">修改新聞</h3>
                    <div class="content">
                        <form action="admin.php" method="post" id="add-comment" enctype="multipart/form-data" class="validate-form">
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="標題" value="{$article.title}" required>
                            </div>
                            <div class="form-group">
                                <script src="ckeditor/ckeditor.js"></script>
                                <textarea name="content" id="article_content" class="form-control">{$article.pure_content}</textarea>
                                <script>
                                    CKEDITOR.replace('article_content');
                                </script>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <label class="col-12" for="pic">上傳特色圖片</label>
                                    <div class="col-12">
                                        {assign var="cover" value="uploads/thumb_{$article.sn}.png"}
                                        <!-- 指派和上傳圖檔相同的路徑給$cover -->
                                        {if file_exists($cover)}
                                        <!-- 如果$cover有得到值 -->
                                        <img src="{$cover}" alt="{$post.title}" style="width:120px;"> {else}
                                        <img src="http://fakeimg.pl/120x80/aaaaaa/EAE0D0/?text=REPORTER" alt="{$post.title}">                                        {/if}
                                        <small class="form-text text-muted" style="font-size:1rem;">目前圖片，上傳新的圖片將會替換此圖</small>
                                        <input type="file" class="form-control" name="pic" id="pic" placeholder="上傳文章封面照片" aria-describedby="fileHelpId" style="font-size:1rem;">
                                        <small id="fileHelpId" class="form-text text-muted" style="font-size:1rem;">建議尺寸：1200x630</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 push-md-3">
                                    <input type="hidden" name="op" value="update">
                                    <input type="hidden" name="sn" value="{$article.sn}">
                                    <input type="hidden" name="username" value="{$smarty.session.username}">
                                    <button class="btn btn-lg btn-primary btn-block">修 改</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>