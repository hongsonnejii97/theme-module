<style>
    #gotop_1_0_0 {
        bottom: 190px;
        height: 35px;
        position: fixed;
        right: 10px;
        width: 35px;
        z-index: 20;
        border-radius: 4px;
        color: #fff;
        background: #003e7d;
        text-align: center;
        padding-top: 7px;
        transition: .6s;
    }
    #gotop_1_0_0:hover{
        background:#ff6600;
    }
    @media (max-width:414px){
        #gotop_1_0_0 {
            bottom: 118px;
        }
    }
</style>
<a href="javascript:void(0)" id="gotop_1_0_0"><i class="icon-up-bold"></i></a>
<script>
		jQuery("#gotop_1_0_0").click(function(){
			jQuery("html,body").animate({ scrollTop: 0 }, 1000);
			return false;
		});
		jQuery(window).scroll(function () {
			var winTop = jQuery(window).scrollTop();
			if (winTop < 500) {
				jQuery("#gotop_1_0_0").css({ "opacity": "0" });
			} else {
				jQuery("#gotop_1_0_0").css({ "opacity": "1" });
			}
		});
</script>