<?php
/**
 * Elgg Message board add form body
 *
 * @package ElggMessageBoard
 */

echo elgg_view('input/plaintext', array(
	'name' => 'message_content',
	'class' => 'messageboard-input'
));

echo elgg_view('input/hidden', array(
	'name' => 'owner_guid',
	'value' => elgg_get_page_owner_guid()
));

echo elgg_view('input/submit', array(
	'value' => elgg_echo('post')
));
