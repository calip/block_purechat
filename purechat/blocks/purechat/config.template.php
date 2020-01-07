<?php
/**
 * purechat - Config
 * 
 * Pure Chat is the preferred live chat solution for small to mid-sized teams
 *
 * Pure Chat is the preferred live chat solution for small to mid-sized teams
 *
 * @copyright 2019 calip
 *
 * @license MIT
 *
 * @package purechat
 * @version 1.0
 * @author  Alip <asalip.putra@gmail.com>
 * @link    https://github.com/calip/block_purechat
 */
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<h4><?= ___('Pure Chat Settings') ?></h4>
<p><?= ___('<a href="https://app.purechat.com/user/dashboard" target="_blank">Your Pure Chat dashboard page</a> is your place to answer chats, add more widgets, customize their appearance with images and text, manage users, and more!') ?></p>
<schlix-config:textbox config-key='str_website_id' label='<?= ___('Website ID') ?>' class='form-control' required='required'/>