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
* Vietnamese language pack <giaminhteam@gmail.com)
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
	'APPROVE'								=> 'Chấp thuận',
	'ATTACHMENT'						=> 'Đính kèm',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'Chức năng này đã bị khóa',

	'BOOKMARK_ADDED'		=> 'Bookmark topic thành công.',
	'BOOKMARK_ERR'			=> 'Bookmark topic không thành công. Hãy thử lại.',
	'BOOKMARK_REMOVED'		=> 'Xóa bookmark topic thành công.',
	'BOOKMARK_TOPIC'		=> 'Bookmark topic',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Remove from bookmarks',
	'BUMPED_BY'				=> 'Last bumped by %1$s on %2$s.',
	'BUMP_TOPIC'			=> 'Bump topic',

	'CODE'					=> 'Code',

	'DELETE_TOPIC'			=> 'Xóa bài',
	'DELETED_INFORMATION'	=> 'Đã xóa %1$s / %2$s',
	'DISAPPROVE'					=> 'Không chấp thuận',
	'DOWNLOAD_NOTICE'		=> 'Bạn không có quyền xem file đính kèm trong topic này',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Sửa lần cuối bởi %2$s lúc %3$s, đã sửa %1$d lần.',
		2	=> 'Sửa lần cuối bởi %2$s lúc %3$s, đã sửa %1$d lần.',
	),
	'EMAIL_TOPIC'			=> 'Email topic',
	'ERROR_NO_ATTACHMENT'	=> 'The selected attachment does not exist anymore.',

	'FILE_NOT_FOUND_404'	=> 'The file <strong>%s</strong> does not exist.',
	'FORK_TOPIC'			=> 'Copy topic',
	'FULL_EDITOR'			=> 'Full Editor &amp; Preview',

	'LINKAGE_FORBIDDEN'		=> 'You are not authorised to view, download or link from/to this site.',
	'LOGIN_NOTIFY_TOPIC'	=> 'You have been notified about this topic, please login to view it.',
	'LOGIN_VIEWTOPIC'		=> 'The board requires you to be registered and logged in to view this topic.',

	'MAKE_ANNOUNCE'				=> 'Đổi thành “Bài viết thông báo',
	'MAKE_GLOBAL'				=> 'Đổi thành “Global”',
	'MAKE_NORMAL'				=> 'Đổi thành “Standard Topic”',
	'MAKE_STICKY'				=> 'Đổi thành “Chú ý”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'You may select <strong>%d</strong> option',
		2	=> 'You may select up to <strong>%d</strong> options',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'The attachment <strong>%s</strong> is no longer available',
	'MOVE_TOPIC'				=> 'Di chuyển topic',

	'NO_ATTACHMENT_SELECTED'=> 'You haven’t selected an attachment to download or view.',
	'NO_NEWER_TOPICS'		=> 'There are no newer topics in this forum.',
	'NO_OLDER_TOPICS'		=> 'There are no older topics in this forum.',
	'NO_UNREAD_POSTS'		=> 'There are no new unread posts for this topic.',
	'NO_VOTE_OPTION'		=> 'You must specify an option when voting.',
	'NO_VOTES'				=> 'Chưa bình chọn',

	'POLL_ENDED_AT'			=> 'Bình chọn kết thúc lúc %s',
	'POLL_RUN_TILL'			=> 'Poll runs till %s',
	'POLL_VOTED_OPTION'		=> 'You voted for this option',
	'POST_DELETED_RESTORE'	=> 'This post has been deleted. It can be restored.',
	'PRINT_TOPIC'			=> 'Print view',

	'QUICK_MOD'				=> 'Quick-mod tools',
	'QUICKREPLY'			=> 'Trả lời nhanh',
	'QUOTE'					=> 'Trích dẫn',

	'REPLY_TO_TOPIC'		=> 'Trả lời topic',
	'RESTORE'				=> 'Khôi phục',
	'RESTORE_TOPIC'			=> 'Khôi phục topic',
	'RETURN_POST'			=> '%sReturn to the post%s',

	'SUBMIT_VOTE'			=> 'Gửi đánh giá',

	'TOPIC_TOOLS'			=> 'Topic tools',
	'TOTAL_VOTES'			=> 'Total votes',

	'UNLOCK_TOPIC'			=> 'Unlock topic',

	'VIEW_INFO'				=> 'Chi tiết bài viết',
	'VIEW_NEXT_TOPIC'		=> 'Bài tiếp theo',
	'VIEW_PREVIOUS_TOPIC'	=> 'Bài trước',
	'VIEW_RESULTS'			=> 'Xem kết quả',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d post',
		2	=> '%d posts',
	),
	'VIEW_UNREAD_POST'		=> 'First unread post',
	'VOTE_SUBMITTED'		=> 'Your vote has been cast.',
	'VOTE_CONVERTED'		=> 'Changing votes is not supported for converted polls.',

));
