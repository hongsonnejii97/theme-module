<style>
	
	.breadcrumb_1_0_0 {
		width: 100%;
		height: auto;
		background: #ececec;
		padding: 10px 0 10px 20px;
		font-size: 14px
	}

	.breadcrumb_1_0_0 p {
		margin: 0
	}

	.breadcrumb_1_0_0 span {
		color: #333
	}

	.breadcrumb_1_0_0 a {
		color: #333
	}

	/*# sourceMappingURL=../maps/breadcrumb.css.map */	
</style>

<div class="breadcrumb_1_0_0">
	<div class="container">
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="">','</p>');} ?>
	</div>
</div>
