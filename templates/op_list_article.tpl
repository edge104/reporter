
        <!-- Section - Start -->
        <section id="section-start" data-anchor="start" class="section section-home-parallax fullheight light bg-light mouse-parallax"
            data-scheme="light" data-local-scroll>

            <!-- BG Image -->
            <div class="bg-container">
                <div class="bg-image-container mouse-parallax-item h-only" data-parallax-speed="250"><img src="assets/img/photos/recruiter/home01.jpg" alt=""></div>
                <div class="bg-image-container mouse-parallax-item h-only" data-parallax-speed="75" data-parallax-reverse="true"><img src="images/slider01.jpg" alt=""></div>
            </div>

            <!-- Section Content -->
            <div class="section-content pos-v-center">
                <div class="container">
                    <div class="row align-items-center justify-content-end">
                        <div class="col-lg-8 col-10">
                            <h1 class="display-2 mb-1 text-right">台南市公民<br>傳播媒體的草根平台</h1>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- Section - Blog -->
        <section id="blog" class="section bg-light light" data-scheme="light">

            <!-- Section Content -->
            <div class="section-content">
                <div class="container">
                    <h3 class="mb-5 text-center">最新新聞</h3>
                    <div class="row masonry">
                        {foreach $all as $data}
                        <div class="masonry-sizer col-xl-4 col-sm-6 col-12"></div>
                        <div class="masonry-item col-xl-4 col-sm-6 col-12">
                            <!-- Post - Item -->
                            <article class="post item">
                                <div class="post-image">
                                    <a href="index.php?sn={$data.sn}">
                                    {assign var="cover" value="uploads/thumb_{$data.sn}.png"}
                                    <!-- 指派和上傳圖檔相同的路徑給$cover -->
                                    {if file_exists($cover)}
                                    <!-- 如果$cover有得到值 -->
                                    <img src="{$cover}" alt="{$post.title}"> {else}
                                    <img src="http://fakeimg.pl/600x315/aaaaaa/EAE0D0/?text=REPORTER" alt="{$post.title}"> 
                                    {/if}
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h4 class="post-title"><a href="index.php?sn={$data.sn}">{$data.title}</a></h4>
                                    <ul class="post-meta">
                                        <li><a href="#">{$data.display_time}</a></li>
                                        <li><a href="#">Work</a></li>
                                        <li><a href="#">by:{$data.username}</a></li>
                                    </ul>
                                    <p>{$data.summary}</p>
                                </div>
                            </article>
                        </div>
                        {/foreach}
                    </div>
                    <div class="text-center mt-3">
                        <!-- <a href="blog-panel.html" class="btn btn-lg btn-outline-primary">檢視全部新聞</a> -->
                    </div>
                </div>
            </div>

        </section>