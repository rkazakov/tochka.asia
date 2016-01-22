<?php 

add_action( 'admin_enqueue_scripts', 'mts_ribn_pointer_header' );
function mts_ribn_pointer_header() {
    $enqueue = false;

    $dismissed = explode( ',', (string) get_user_meta( get_current_user_id(), 'dismissed_wp_pointers', true ) );

    if ( ! in_array( 'mts_ribn_pointer', $dismissed ) ) {
        $enqueue = true;
        add_action( 'admin_print_footer_scripts', 'mts_ribn_pointer_footer' );
    }

    if ( $enqueue ) {
        // Enqueue pointers
        wp_enqueue_script( 'wp-pointer' );
        wp_enqueue_style( 'wp-pointer' );
    }
}

function mts_ribn_pointer_footer() {
    $pointer_content = '<h3>Awesomeness!</h3>';
    $pointer_content .= '<p>You have just Installed Ribbon WordPress Theme by MyThemeShop.</p>';
	$pointer_content .= '<p>You can Trigger The Awesomeness using this Amazing Option Panel.</p>';
?>
<script type="text/javascript">// <![CDATA[
jQuery(document).ready(function($) {
    $('#toplevel_page_theme_options').pointer({
        content: '<?php echo $pointer_content; ?>',
        position: {
            edge: 'left',
            align: 'center'
        },
        close: function() {
            $.post( ajaxurl, {
                pointer: 'mts_ribn_pointer',
                action: 'dismiss-wp-pointer'
            });
        }
    }).pointer('open');
});
// ]]></script>
<?php
}

?>