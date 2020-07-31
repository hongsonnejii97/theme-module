<?php 
	add_action('wp_footer', 'toolbar_1_0_0');
	function toolbar_1_0_0(){ 
		echo "
			<script>
				$('.toolbar_1_0_0__tabs a ').click(function() {
					$(this).parent().find('a').removeClass('current');
					$(this).addClass('current');
				})
			</script>
		";
	};
?>

<style>
	.toolbar_1_0_0 {
		display: none;
		z-index: 10
	}

	.toolbar_1_0_0__tabs {
		width: 100%;
		height: 60px;
		position: fixed;
		background: #fff;
		left: 0;
		bottom: 0;
		z-index: 2;
		display: flex;
		border: 1px solid #ccc;
		box-shadow: -2px -1px 3px #ccc
	}

	.toolbar_1_0_0__tabs a {
		padding: 5px 0 0;
		display: block;
		width: 100%;
		height: 100%;
		text-align: center;
		font-weight: bold
	}

	.toolbar_1_0_0__tabs a.current .pic .svg {
		fill: #EF4324
	}

	.toolbar_1_0_0__tabs a.current .title {
		color: #EF4324
	}

	.toolbar_1_0_0__ques {
		z-index: 10;
		position: fixed;
		bottom: 100px;
		right: 0;
		background: #EF4324;
		color: #fff;
		padding: 5px 10px;
		border-top-left-radius: 20px;
		border-bottom-left-radius: 20px;
		font-size: 12px;
		-webkit-animation: ring 8s .7s ease-in-out infinite;
		-webkit-transform-origin: 50% 4px;
		-moz-animation: ring 8s .7s ease-in-out infinite;
		-moz-transform-origin: 50% 4px;
		animation: ring 8s .7s ease-in-out infinite;
		transform-origin: 50% 4px
	}

	@media (max-width: 414px) {
		.toolbar_1_0_0 {
			display: block;
		}
		.toolbar_1_0_0__ques{
			bottom:79px;
		}
	}

	@media (max-width: 360px) {
		.toolbar_1_0_0__tabs .title {
			font-size: 12px
		}
	}

	@-webkit-keyframes ring {
		0% {
			-webkit-transform: rotate(0)
		}

		1% {
			-webkit-transform: rotate(1deg)
		}

		3% {
			-webkit-transform: rotate(-1deg)
		}

		5% {
			-webkit-transform: rotate(1deg)
		}

		7% {
			-webkit-transform: rotate(-1deg)
		}

		9% {
			-webkit-transform: rotate(1deg)
		}

		11% {
			-webkit-transform: rotate(-1deg)
		}

		13% {
			-webkit-transform: rotate(1deg)
		}

		15% {
			-webkit-transform: rotate(-1deg)
		}

		17% {
			-webkit-transform: rotate(1deg)
		}

		19% {
			-webkit-transform: rotate(-1deg)
		}

		21% {
			-webkit-transform: rotate(1deg)
		}

		23% {
			-webkit-transform: rotate(-1deg)
		}

		25% {
			-webkit-transform: rotate(1deg)
		}

		27% {
			-webkit-transform: rotate(-1deg)
		}

		29% {
			-webkit-transform: rotate(1deg)
		}

		31% {
			-webkit-transform: rotate(-1deg)
		}

		33% {
			-webkit-transform: rotate(1deg)
		}

		35% {
			-webkit-transform: rotate(-1deg)
		}

		37% {
			-webkit-transform: rotate(1deg)
		}

		39% {
			-webkit-transform: rotate(-1deg)
		}

		41% {
			-webkit-transform: rotate(1deg)
		}

		43% {
			-webkit-transform: rotate(0)
		}

		100% {
			-webkit-transform: rotate(0)
		}
	}

	@-moz-keyframes ring {
		0% {
			-moz-transform: rotate(0)
		}

		1% {
			-moz-transform: rotate(1deg)
		}

		3% {
			-moz-transform: rotate(-1deg)
		}

		5% {
			-moz-transform: rotate(1deg)
		}

		7% {
			-moz-transform: rotate(-1deg)
		}

		9% {
			-moz-transform: rotate(1deg)
		}

		11% {
			-moz-transform: rotate(-1deg)
		}

		13% {
			-moz-transform: rotate(1deg)
		}

		15% {
			-moz-transform: rotate(-1deg)
		}

		17% {
			-moz-transform: rotate(1deg)
		}

		19% {
			-moz-transform: rotate(-1deg)
		}

		21% {
			-moz-transform: rotate(1deg)
		}

		23% {
			-moz-transform: rotate(-1deg)
		}

		25% {
			-moz-transform: rotate(1deg)
		}

		27% {
			-moz-transform: rotate(-1deg)
		}

		29% {
			-moz-transform: rotate(1deg)
		}

		31% {
			-moz-transform: rotate(-1deg)
		}

		33% {
			-moz-transform: rotate(1deg)
		}

		35% {
			-moz-transform: rotate(-1deg)
		}

		37% {
			-moz-transform: rotate(1deg)
		}

		39% {
			-moz-transform: rotate(-1deg)
		}

		41% {
			-moz-transform: rotate(1deg)
		}

		43% {
			-moz-transform: rotate(0)
		}

		100% {
			-moz-transform: rotate(0)
		}
	}

	@keyframes ring {
		0% {
			transform: rotate(0)
		}

		1% {
			transform: rotate(1deg)
		}

		3% {
			transform: rotate(-1deg)
		}

		5% {
			transform: rotate(1deg)
		}

		7% {
			transform: rotate(-1deg)
		}

		9% {
			transform: rotate(1deg)
		}

		11% {
			transform: rotate(-1deg)
		}

		13% {
			transform: rotate(1deg)
		}

		15% {
			transform: rotate(-1deg)
		}

		17% {
			transform: rotate(1deg)
		}

		19% {
			transform: rotate(-1deg)
		}

		21% {
			transform: rotate(1deg)
		}

		23% {
			transform: rotate(-1deg)
		}

		25% {
			transform: rotate(1deg)
		}

		27% {
			transform: rotate(-1deg)
		}

		29% {
			transform: rotate(1deg)
		}

		31% {
			transform: rotate(-1deg)
		}

		33% {
			transform: rotate(1deg)
		}

		35% {
			transform: rotate(-1deg)
		}

		37% {
			transform: rotate(1deg)
		}

		39% {
			transform: rotate(-1deg)
		}

		41% {
			transform: rotate(1deg)
		}

		43% {
			transform: rotate(0)
		}

		100% {
			transform: rotate(0)
		}
	}

	/*# sourceMappingURL=../maps/toolbar_1_0_0.css.map */
</style>

<div class="toolbar_1_0_0">
	<div class="toolbar_1_0_0__ques bvh_dktv">
		<span><i class="icon-angle-double-right"></i> Đặt câu hỏi với chuyên gia</span>
	</div>
	<div class="toolbar_1_0_0__tabs">
		<a class="current bvh_dkcall" href="#">
			<div class="pic">
				<svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" style="enable-background:new 0 0 384 384;" viewBox="0 0 384 384" width="25" height="25" id="Capa_1" version="1.1">
					<g>
						<g>
							<path class="svg" d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594    c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448    c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813    C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z" style="&#10;"/>
						</g>
					</g>
				</svg>
			</div>
			<div class="title">
				Liên hệ
			</div>
		</a>
		<a class="popup_post_1_0_0_clickPopup">
			<div class="pic">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" width="25" height="25" viewBox="0 0 296.999 296.999" style="enable-background:new 0 0 296.999 296.999;" xml:space="preserve">
					<g>
						<g>
							<g>
								<path class="svg" d="M45.432,35.049c-0.008,0-0.017,0-0.025,0c-2.809,0-5.451,1.095-7.446,3.085c-2.017,2.012-3.128,4.691-3.128,7.543     v159.365c0,5.844,4.773,10.61,10.641,10.625c24.738,0.059,66.184,5.215,94.776,35.136V84.023c0-1.981-0.506-3.842-1.461-5.382     C115.322,40.849,70.226,35.107,45.432,35.049z"/>
								<path class="svg" d="M262.167,205.042V45.676c0-2.852-1.111-5.531-3.128-7.543c-1.995-1.99-4.639-3.085-7.445-3.085c-0.009,0-0.018,0-0.026,0     c-24.793,0.059-69.889,5.801-93.357,43.593c-0.955,1.54-1.46,3.401-1.46,5.382v166.779     c28.592-29.921,70.038-35.077,94.776-35.136C257.394,215.651,262.167,210.885,262.167,205.042z"/>
							</g>
						</g>
					</g>
				</svg>
			</div>
			<div class="title">
				Bài viết liên quan
			</div>
		</a>
		<a class="popup_video_1_0_0_clickPopup">
			<div class="pic">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="25" height="25">
					<path class="svg" d="m224.113281 303.960938 83.273438-47.960938-83.273438-47.960938zm0 0"/>
					<path class="svg" d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm159.960938 256.261719s0 51.917969-6.585938 76.953125c-3.691406 13.703125-14.496094 24.507812-28.199219 28.195312-25.035156 6.589844-125.175781 6.589844-125.175781 6.589844s-99.878906 0-125.175781-6.851562c-13.703125-3.6875-24.507813-14.496094-28.199219-28.199219-6.589844-24.769531-6.589844-76.949219-6.589844-76.949219s0-51.914062 6.589844-76.949219c3.6875-13.703125 14.757812-24.773437 28.199219-28.460937 25.035156-6.589844 125.175781-6.589844 125.175781-6.589844s100.140625 0 125.175781 6.851562c13.703125 3.6875 24.507813 14.496094 28.199219 28.199219 6.851562 25.035157 6.585938 77.210938 6.585938 77.210938zm0 0"/>
				</svg>
			</div>
			<div class="title">
				Video
			</div>
		</a>
	</div>
</div>



