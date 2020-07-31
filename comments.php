<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>


<style>
    
    /* CSS Comment */
.post_comment{
    padding: 20px 0;
}
.post_comment #comments{
    display: none;
}
.post_comment .comment-list{
    list-style: none;
    padding: 0px;
    overflow-y: scroll;
    height: 420px;
}
.post_comment .comment-list .children{
    list-style: none;
}
.post_comment .no-comments{
    display: none;
}
.post_comment .comment-list::-webkit-scrollbar-track
{
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    border-radius: 10px;
    background-color: #F5F5F5;
}

.post_comment .comment-list::-webkit-scrollbar
{
    width: 3px;
    background-color: #4765A0;
}

.post_comment .comment-list::-webkit-scrollbar-thumb
{
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #4765A0;
}
.post_comment .comment-list ul{
    list-style: none;
}
.post_comment .count_cmt{
    font-weight: 600;
    color: #000;
    padding-bottom: 10px;
    border-bottom: 1px solid #ccc;
    margin-bottom: 20px;
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
.post_comment #reply-title{
    display: none;
}
.post_comment .comment-body .comment-author{
    font-weight: 600;
    color: #385898;
    cursor: pointer;
}
.post_comment .comment-body .comment-author .says{
    display: none;
}
.post_comment .comment-body .comment-author img{
    float: left;
    margin-right: 15px;
}
.post_comment .comment-body .reply{
    font-size: 12px;
    padding-left: 88px;
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
    padding: 10px;
    border: 1px solid #d3d6db;
}
.post_comment .comment-respond form > p #comment:focus{
    border: 1px solid #d3d6db;
    outline: none;
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
@media (max-width: 1440px) {
    .post_comment .modal .modal-content {
        margin: 100px auto 0;
    }
}
@media (max-width: 1024px) {
    .post_comment .modal .modal-content {
        width: 35%;
    }
}
@media (max-width: 768px) {
    .post_comment .modal .modal-content {
        width: 45%;
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
 
<div id="comments" class="comments-area post_comment">
    <div class="count_cmt">
        Có <?php echo get_comments_number($post->ID); ?> bình luận
    </div>
 
    <?php if ( have_comments() ) : ?>

        <h2 class="comments-title" style="display:none;">
            <?php
                printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'twentythirteen' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>

        
        
 
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ol><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 || get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&amp;larr; Older Comments', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &amp;rarr;', 'twentythirteen' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() || get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>

    <?php comment_form(); ?>
    
    <div class="show-form">
        <button id="sub">Gửi</button>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <p>Nhập thông tin của bạn</p>
                <span class="close">&times;</span>
            </div>
            <div class="modal-main">
                <form action="https://benhvienhongha.vn/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                    <p class="comment-form-author"><input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required" placeholder="Họ tên *:..."></p>
                    <p class="comment-form-email"><input id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" placeholder="Email:..." required="required"></p>
                    <p class="comment-form-url"><input id="url" name="url" type="text" value="" size="30" maxlength="200" placeholder="Số điện thoại *:..." required="required"></p>
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
    
 
</div><!-- #comments -->

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