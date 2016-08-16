<?php
$tax = 'claims';
$args = ['hide_empty' => 0, 'taxonomy' => $tax];
$terms = get_terms( $args );
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
	echo'<h3>Explore Common Stock Fraud Claims</h3><p class="text--deci" style="#666;margin-bottom:30px;">Do you suspect that your stockbroker may be handling your investments inappropriately? Read about the most <a href="/stock-fraud-claims/">common claims against stockbrokers</a> to learn more about stockbroker claims.</p>';

    echo '<ul class="list-terms list-claims">';
    foreach ( $terms as $term ) {
        echo '<li><a title="'.$term->name.' Claims information" href="'.get_term_link($term->name,$tax).'"><span>' . $term->name . '</span></a></li>';
    }
    echo '</ul>';
}
?>