<?php
/**
 * Open Source Social Network
 *
 * @package   (softlab24.com).ossn
 * @author    OSSN Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$friend = $params['entity'];
?>
<div class="friends-list-item" onClick="Ossn.ChatnewTab(<?php echo $friend->guid; ?>);">
    <div class="friends-item-inner">
        <div class="icon"><img class="ossn-chat-icon-online" src="<?php echo $params['icon']; ?>"/></div>
        <div onClick="$('.friends-list').hide();" class="name"><?php echo $friend->fullname; ?></div>
    </div>
</div>