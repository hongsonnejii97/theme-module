<style>
	@font-face {
        font-family: 'Barlow';
        src: url(fonts/Barlow.ttf)
    }

    .post_1_0_4__mainTitle h2 {
        font-family: Barlow
    }

    .post_1_0_4 {
        display: flex;
        flex-wrap: wrap;
        background: #F1F1F4;
        padding: 20px 0
    }

    .post_1_0_4__sticky {
        width: 20%
    }

    .post_1_0_4__main {
        width: 50%;
        padding: 0 20px
    }

    .post_1_0_4__mainTitle {
        padding: 10px 0px 0
    }

    .post_1_0_4__mainTitle h2 {
        font-size: 35px;
        line-height: 1.2;
        color: #03746e;
        margin: 0
    }

    .post_1_0_4__mainTitle.color {
        padding: 0;
        padding-bottom: 20px
    }

    .post_1_0_4__mainTitle.color h2 {
        color: #303030
    }

    .post_1_0_4__mainSocial {
        padding: 20px 0;
        display: flex;
        justify-content: space-between
    }

    .post_1_0_4__mainSocial span {
        color: #273030;
        font-style: italic
    }

    .post_1_0_4__mainSocial .social a {
        color: #EF800A;
        margin: 0 10px
    }

    .post_1_0_4__mainPic {
        padding: 20px 0;
        text-align: center
    }

    .post_1_0_4__mainPic p {
        font-style: italic
    }

    .post_1_0_4__mainPic img {
        width: 100%
    }

    .post_1_0_4__sidebar {
        width: 30%;
        padding: 0 70px
    }

    @media (max-width: 1280px) {
        .post_1_0_4__sidebar {
            padding: 0 50px
        }
    }

    @media (max-width: 1024px) {
        .post_1_0_4__mainTitle h2 {
            font-size: 24px
        }
    }

    @media (max-width: 812px) {
        .post_1_0_4 {
            padding-top: 50px
        }

        .post_1_0_4__sticky {
            display: none
        }

        .post_1_0_4__sidebar {
            display: none
        }

        .post_1_0_4__main {
            width: 100%
        }
        .post_comment .modal .modal-content {
            width: 35%;
        }
    }

    @media (max-width: 414px) {
        .post_1_0_4 {
            padding-top: 10px
        }

        .post_1_0_4__main {
            width: 100%
        }
    }


    /* CSS Comment */
    .post_comment{
        padding: 20px 0;
    }
    .post_comment #comments{
        display: none;
    }
    .post_comment .commentlist{
        list-style: none;
        padding: 0px;
        overflow-y: scroll;
        height: 420px;
    }
    .post_comment .commentlist::-webkit-scrollbar-track
    {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
        border-radius: 10px;
        background-color: #F5F5F5;
    }

    .post_comment .commentlist::-webkit-scrollbar
    {
        width: 3px;
        background-color: #4765A0;
    }

    .post_comment .commentlist::-webkit-scrollbar-thumb
    {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
        background-color: #4765A0;
    }
    .post_comment .commentlist ul{
        list-style: none;
    }
    .post_comment .count_cmt{
        font-weight: 600;
        color: #000;
        padding-bottom: 10px;
        border-bottom: 1px solid #ccc;
    }
    .post_comment .show-form #sub{
        background: #E49D38;
        padding: 10px 40px;
        border: none;
        color: #fff;
        text-transform: uppercase;
    }
    .post_comment .comment-body{
        margin-bottom: 10px
    }
    .post_comment .comment-body > p{
        margin-bottom: 5px;
        padding-left: 48px;
        margin-top: 10px;
    }
    .post_comment .comment-body .comment-meta{
        font-size: 12px;
    }
    .post_comment .comment-body .comment-author{
        font-weight: 600;
        color: #385898;
        cursor: pointer;
    }
    .post_comment .comment-body .comment-author img{
        float: left;
        margin-right: 15px;
    }
    .post_comment .comment-body .reply{
        font-size: 12px;
        padding-left: 46px;
    }
    .post_comment .comment-body .comment-author cite{
        font-style: initial;
    }
    .post_comment .comment-respond form > p label{
        display: block;
    }
    .post_comment .comment-respond form .form-submit{
        display: none;
    }
    .post_comment .comment-respond form .comment-notes{
        display: none;
    }
    .post_comment .comment-respond form .comment-form-cookies-consent{
        display: none;
    }
    .post_comment .comment-respond form > p #comment{
        width: 100%;
        height: 60px;
    }
    .post_comment .comment-respond form .form-submit #submit{
        background: #E49D38;
        padding: 10px 40px;
        border: none;
        color: #fff;
        text-transform: uppercase;
    }

    .post_comment .comment-respond form .comment-form-author{
        display: none;
    }
    .post_comment .comment-respond form .comment-form-email{
        display: none;
    }
    .post_comment .comment-respond form .comment-form-url{
        display: none;
    }
    .post_comment .modal .modal-content{
        width: 25%;
        margin: 210px auto 0;
        text-align: center;
        background: #fff;
        padding: 10px 0 20px;
    }
    .post_comment .modal .modal-header{
        justify-content: space-between;
        display: flex;
        border-bottom: none;
    }
    .post_comment .modal .modal-header p{
        text-transform: uppercase;
        color: #00597D;
        font-weight: 600;
        margin-bottom: 0;
    }
    .post_comment .modal .modal-header span{
        font-size: 25px;
        font-weight: 600;
        cursor: pointer;
        margin-top: -10px;
    }
    .post_comment .modal .modal-content form p{
        padding: 0px 20px;
    }
    .post_comment .modal .modal-content form p input{
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
    }
    .post_comment .modal .modal-content form p #submit{
        background: #E49D38;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
    }
    @media (max-width: 768px) {
        .post_comment .modal .modal-content {
            width: 35%;
        }
    }
    @media (max-width: 414px) {
        .post_comment .modal .modal-content {
            width: 80%;
        }
    }
    @media (max-width: 320px) {
        .post_comment .modal .modal-content {
            width: 90%;
        }
    }


</style>

<div class="post_1_0_4">
    <div class="post_1_0_4__sticky">
        
        <!-- TOC  -->

    </div>
    <div class="post_1_0_4__main">

		<?php get_template_part('Module/Post/breadcrumb_1_0_3/breadcrumb_1_0_3'); ?>

		<div class="post_1_0_4__mainTitle">
			<h2><?php echo the_title(); ?></h2>
		</div>
		<div class="post_1_0_4__mainSocial">
			<span><?php the_date('d-m-Y');?></span>
			<div class="social">
				<a href="#"><i class="icon-facebook"></i></a>
				<a href="#"><i class="icon-chat-1"></i></a>
				<a href="#"><i class="icon-share"></i></a>
				<a href="#"><i class="icon-youtube-play"></i></a>
			</div>
		</div>

        <?php while ( have_posts() ) : the_post(); ?>
        <?php postview_set(get_the_ID()); ?>
        <?php echo postview_get(get_the_ID()); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
    </div>
    <div class="post_1_0_4__sidebar">
        
		<!-- Sidebar -->
		<?php get_template_part('Module/Sidebar/sidebar_3_0_0/sidebar_3_0_0'); ?>

    </div>
</div>


<div class="post_comment">
    <div class="container">
        <div class="count_cmt">
            Có <?php echo get_comments_number($post->ID); ?> bình luận
        </div>
        <?php comments_template(); ?>
        
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <p>Nhập thông tin của bạn</p>
                    <span class="close">&times;</span>
                </div>
                <div class="modal-main">
                    <form action="http://son.codeteam.xyz/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                        <p class="comment-form-author"><input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required" placeholder="Họ tên *:..."></p>
                        <p class="comment-form-email"><input id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" placeholder="Email:..." required="required"></p>
                        <p class="comment-form-url"><input id="url" name="url" type="text" value="" size="30" maxlength="200" placeholder="Số điện thoại *:..."></p>
                        <p style="display:none;"><textarea type="hidden" id="comment-2" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
                        <p class="form-submit">
                        <input name="submit" type="submit" id="submit" class="submit" value="Hoàn thành"> 
                        <input type="hidden" name="comment_post_ID" value="<?php echo get_the_ID(); ?>" id="comment_post_ID">
                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                        </p>
                    </form>
                </div>
            </div>
        </div>

        <div class="show-form">
            <button id="sub">Gửi</button>
        </div>
    </div>
</div>

<script>
    var submit = document.getElementById('sub');
    var comment = document.getElementById('comment');
    var comment2 = document.getElementById('comment-2');
    var author = document.querySelector(".comment-form-author");
    var email = document.querySelector(".comment-form-email");
    var url = document.querySelector(".comment-form-url");
    var close = document.querySelector(".close");
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    
    submit.addEventListener('click', function(){
        if( comment.value == '' ){
            modal.style.display = "none";
            alert('Chưa có nội dung phần bình luận !');
        }else{
            modal.style.display = "block";
            comment2.value = comment.value;
        }
    });
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    close.onclick = function() {
        modal.style.display = "none";
    }
</script>