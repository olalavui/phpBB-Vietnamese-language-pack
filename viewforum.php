<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
* Vietnamese language pack <giaminhteam@gmail.com>
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Active topics',
	'ANNOUNCEMENTS'			=> 'Thông báo',

	'FORUM_PERMISSIONS'		=> 'Quyền hạn trong forum',

	'ICON_ANNOUNCEMENT'		=> 'Thông báo',
	'ICON_STICKY'			=> 'Chú ý',

	'LOGIN_NOTIFY_FORUM'	=> 'Bạn nhận được thông báo từ diễn đàn, hãy đăng nhập để xem thông tin',

	'MARK_TOPICS_READ'		=> 'Đánh dấu đã đọc',

	'NEW_POSTS_HOT'			=> 'Bài mới [ Sôi nổi ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Bải mới [ Bị khóa ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Chưa có bài mới [ Sôi nổi ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Chưa có bài mới [ Bị khóa ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Bạn không thể xem bài viết ở chuyên mục này.',
	'NO_UNREAD_POSTS_HOT'		=> 'Không có bài viết chưa đọc [ Sôi nổi ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Không có bài viết chưa đọc [ Bị khóa ]',

	'POST_FORUM_LOCKED'		=> 'Diễn đàn bị khóa',

	'TOPICS_MARKED'			=> 'Bài viết trong chuyên mục này đã được đánh dấu là đã đọc.',

	'UNREAD_POSTS_HOT'		=> 'Bài chưa đọc [ Sôi nổi ]',
	'UNREAD_POSTS_LOCKED'	=> 'Bài chưa đọc [ Bị khóa ]',

	'VIEW_FORUM'			=> 'Xem diễn đàn',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d topic',
		2	=> '%d topic',
	),
));
