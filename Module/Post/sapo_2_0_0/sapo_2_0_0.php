<style>
	.sapo_2_0_0 {
		background: #FAF4ED;
		padding: 10px 20px;
		margin: 20px 0;
		line-height: 30px;
		font-size: 16px;
		text-align: justify
	}

	@media (max-width: 414px) {
		.sapo_2_0_0 {
			font-size: 14px
		}
	}

	/*# sourceMappingURL=../maps/sapo.css.map */
</style>

<?php
	$page_field = get_field('group_page_field');
	foreach( $page_field as $value_0):  
		foreach( $value_0 as $value_1):  
			foreach( $value_1 as $value_2):  
				foreach( $value_2 as $list):  
					if( $list['acf_fc_layout'] == 'sapo_2_0_0' ):
						echo '
							<div class="sapo_2_0_0">'.$list['info'].'</div>
						';
					endif;
				endforeach;
			endforeach;
		endforeach;
	endforeach;

?>

	
