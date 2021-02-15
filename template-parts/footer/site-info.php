<?php
/**
 * Displays footer site info
 *
 * @package web-log
 * @version 1.0.0
 */

?>
<div class="mini-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            	<div class="copyright-text">
            		    <p>
							<?php $copyright_text = web_log_get_option( 'copyright_text' ); 
						    
						        if ( ! empty( $copyright_text ) ) : ?>
						    
						           <?php echo wp_kses_data( $copyright_text ); ?>
						    
						        <?php endif; ?>
		                        
		                       
								<?php printf( esc_html__( '%2$s', 'web-log' ), 'Web Log', '<a href="https://androidprog.com/" target="_blank" title="Игры на андроид" rel="nofollow">Игры андроид</a>' ); ?>
						</p> 
		        </div>
             
            </div>
        </div>
    </div>
</div>
