<?php
$path = get_template_directory_uri();
$path = $path.'/Module/Popup/popup_call_3_0_0';
  if($check == 0){
      include(locate_template("Module/Popup/popup_call_3_0_0/style.php"));
      add_action('wp_footer', 'popup_call_3_0_0');
      function popup_call_3_0_0(){ 
          echo '                    
            <script type="text/javascript">
              $(document).ready(function () {
                $(".bvh_dktv").click(function () {
                $(".popup_call_3_0_0 #popup_call_3_0_0_overlayClickform").fadeIn(5);
                $(".popup_call_3_0_0 .popup_call_3_0_0_overlay").fadeIn(500);
                $("html, body").animate({ scrollTop: 0 }, "slow");
              });
            
              $(".popup_call_3_0_0 #popup_call_3_0_0_closePopup, .popup_call_3_0_0 .popup_call_3_0_0_overlay").click(function () {
                $(".popup_call_3_0_0 #popup_call_3_0_0_overlayClickform").fadeOut(500);
                $(".popup_call_3_0_0 .popup_call_3_0_0_overlay").fadeOut(500);
                });
              });
            </script>
          ';           
        };
    }
?>

<div class="popup_call_3_0_0">
  <div class="popup_call_3_0_0_overlay" style="display:none"></div>
  <div id="popup_call_3_0_0_overlayClickform" class="overlay_form" style="display:none">
    <div class="popup_call_3_0_0_box">
      <article>

        <div class="popup_call_3_0_0__header">
            <div class="pic">
              <img src="<?php echo $path ?>/images/logo.png" alt="">
            </div>
            <h2>
              Đăng kí <br> tư vấn miễn phí
            </h2>
        </div>

        <div class="popup_call_3_0_0__content">
          <input type="text" placeholder="Họ và tên (*)" id="iname" name="iname">
          <input type="text" placeholder="Số điện thoại (*)" id="imob" name="imob">
          <textarea type="text" placeholder="Nhu cầu tư vấn" id="itext" name="itext"></textarea>
          <div style="display:none">
            <input type="hidden" id="gclid_field" name="gclid_field" value="">
            <input id="iemail" name="iemail" value="no@email.chuahiemmuon.vn" type="hidden" placeholder="Email">
          </div>
        </div>

        <div class="popup_call_3_0_0__ft">
          <div class="ft-1">
              <div class="pic">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC8AAAAvCAYAAABzJ5OsAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3Qjg4REQ3MTQ5NjgxMUVBOTg4OUQ2QkE0QzhGRjBGNyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3Qjg4REQ3MjQ5NjgxMUVBOTg4OUQ2QkE0QzhGRjBGNyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjdCODhERDZGNDk2ODExRUE5ODg5RDZCQTRDOEZGMEY3IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjdCODhERDcwNDk2ODExRUE5ODg5RDZCQTRDOEZGMEY3Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+yy3uuwAABmxJREFUeNrUWQ10V2MY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
                " alt="">
              </div>
              <div class="text">
                <p>Tư vấn trực tiếp</p>
                <b>1900 633 988</b>
              </div>
          </div>
          <div class="regist">
            <button onclick="ants_send_contact(this)">Đăng ký</button>
          </div>
        </div>

        <div class="popup_call_3_0_0__note">
          <span><b>Lưu ý:</b> Hãy để lại thông tin chính xác để chúng tôi hỗ trợ bạn trong thời gian sớm nhất.</span>
        </div>
        
        <a id="popup_call_3_0_0_closePopup"></a>

      </article>
    </div>
  </div>
</div>