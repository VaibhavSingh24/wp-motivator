<?php 
/**
 * @package basicplug
 * Plugin Name: wpmotivator
 * Description: A plugin that keeps you motivated
 * Author: Vaibhav Singh
 * Version: 1.0.0
 * License: GPLv2 or later
 * 
 * */

function add_quote(){

    $quotes = "Your limitation—it’s only your imagination.
    Push yourself, because no one else is going to do it for you.
    Sometimes later becomes never. Do it now.
    Great things never come from comfort zones.
    Dream it. Wish it. Do it.
    Success doesn’t just find you. You have to go out and get it.
    The harder you work for something, the greater you’ll feel when you achieve it.
    Dream bigger. Do bigger.
    Don’t stop when you’re tired. Stop when you’re done.
    Wake up with determination. Go to bed with satisfaction.
    Do something today that your future self will thank you for.
    ";

    $quote = explode("\n",$quotes);

    ?>

    <div class = "notice notice-success">
    <p><?php _e( wptexturize( $quote[mt_rand(0,count($quote) -1)]), 'sample-text-domain' ); ?></p>
    </div>

    <?php
}

add_action('admin_notices','add_quote');

 ?>