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

// Common
$lang = array_merge($lang, array(
	'TRANSLATION_INFO'			=> 'Bản dịch Tiếng Việt bởi <a href="https://www.top1.com.vn" title="Diễn đàn Top1 Việt Nam">Top1.com.vn</a>',
	'ACP_ADMINISTRATORS'		=> 'Administrators',
	'ACP_ADMIN_LOGS'			=> 'Admin log',
	'ACP_ADMIN_ROLES'			=> 'Admin roles',
	'ACP_ATTACHMENTS'			=> 'Attachments',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Cài đặt đính kèm',
	'ACP_AUTH_SETTINGS'			=> 'Authentication',
	'ACP_AUTOMATION'			=> 'Automation',
	'ACP_AVATAR_SETTINGS'		=> 'Cài đặt Avatars',

	'ACP_BACKUP'				=> 'Sao lưu',
	'ACP_BAN'					=> 'Banning',
	'ACP_BAN_EMAILS'			=> 'Ban emails',
	'ACP_BAN_IPS'				=> 'Ban IPs',
	'ACP_BAN_USERNAMES'			=> 'Ban users',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Board configuration',
	'ACP_BOARD_FEATURES'		=> 'Cài đặt tính năng diễn đàn',
	'ACP_BOARD_MANAGEMENT'		=> 'Board management',
	'ACP_BOARD_SETTINGS'		=> 'Cài đặt diễn đàn',
	'ACP_BOTS'					=> 'Spiders/Robots',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Customise',
	'ACP_CAT_DATABASE'			=> 'Database',
	'ACP_CAT_DOT_MODS'			=> 'Extensions',
	'ACP_CAT_FORUMS'			=> 'Chuyên mục',
	'ACP_CAT_GENERAL'			=> 'Bắt đầu',
	'ACP_CAT_MAINTENANCE'		=> 'Bảo trì',
	'ACP_CAT_PERMISSIONS'		=> 'Phân quyền',
	'ACP_CAT_POSTING'			=> 'Cài đặt bài viết',
	'ACP_CAT_STYLES'			=> 'Giao diện',
	'ACP_CAT_SYSTEM'			=> 'Hệ thống',
	'ACP_CAT_USERGROUP'			=> 'Nhóm & Thành viên',
	'ACP_CAT_USERS'				=> 'Users',
	'ACP_CLIENT_COMMUNICATION'	=> 'Client communication',
	'ACP_COOKIE_SETTINGS'		=> 'Cài đặt Cookie',
	'ACP_CONTACT'				=> 'Trang liên hệ',
	'ACP_CONTACT_SETTINGS'		=> 'Cài đặt trang liên hệ',
	'ACP_CRITICAL_LOGS'			=> 'Nhật ký lỗi',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Thông tin cá nhân tùy chỉnh',

	'ACP_DATABASE'				=> 'Database management',
	'ACP_DISALLOW'				=> 'Disallow',
	'ACP_DISALLOW_USERNAMES'	=> 'Disallow usernames',

	'ACP_EMAIL_SETTINGS'		=> 'Cài đặt Email',
	'ACP_EXTENSION_GROUPS'		=> 'Manage attachment extension groups',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Extension management',
	'ACP_EXTENSIONS'			=> 'Manage extensions',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Phân quyền chuyên mục',
	'ACP_FORUM_LOGS'				=> 'Nhật ký chuyên mục',
	'ACP_FORUM_MANAGEMENT'			=> 'Forum management',
	'ACP_FORUM_MODERATORS'			=> 'Forum moderators',
	'ACP_FORUM_PERMISSIONS'			=> 'Phân quyền chuyên mục',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Sao chép phân quyền chuyên mục',
	'ACP_FORUM_ROLES'				=> 'Forum roles',

	'ACP_GENERAL_CONFIGURATION'		=> 'General configuration',
	'ACP_GENERAL_TASKS'				=> 'General tasks',
	'ACP_GLOBAL_MODERATORS'			=> 'Global moderators',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Global permissions',
	'ACP_GROUPS'					=> 'Groups',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Group forum permissions',
	'ACP_GROUPS_MANAGE'				=> 'Quản lý nhóm',
	'ACP_GROUPS_MANAGEMENT'			=> 'Group management',
	'ACP_GROUPS_PERMISSIONS'		=> 'Group permissions',
	'ACP_GROUPS_POSITION'			=> 'Manage group positions',

	'ACP_HELP_PHPBB'			=> 'Hỗ trợ phpBB',

	'ACP_ICONS'					=> 'Topic icons',
	'ACP_ICONS_SMILIES'			=> 'Topic icons/smilies',
	'ACP_INACTIVE_USERS'		=> 'Thành viên chưa kích hoạt',
	'ACP_INDEX'					=> 'ACP index',

	'ACP_JABBER_SETTINGS'		=> 'Cài đặt Jabber',

	'ACP_LANGUAGE'				=> 'Quản lý ngôn ngữ',
	'ACP_LANGUAGE_PACKS'		=> 'Gói ngôn ngữ',
	'ACP_LOAD_SETTINGS'			=> 'Cài đặt tải trang',
	'ACP_LOGGING'				=> 'Nhật ký',

	'ACP_MAIN'					=> 'Khung quản trị',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Quản lý đính kèm',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Here you can list and delete files attached to posts and private messages.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Quản lý định dạng file đính kèm',
	'ACP_MANAGE_FORUMS'			=> 'Quản lý chuyên mục',
	'ACP_MANAGE_RANKS'			=> 'Quản lý ranks',
	'ACP_MANAGE_REASONS'		=> 'Manage report/denial reasons',
	'ACP_MANAGE_USERS'			=> 'Quản lý thành viên',
	'ACP_MASS_EMAIL'			=> 'Gửi email hàng loạt',
	'ACP_MESSAGES'				=> 'Messages',
	'ACP_MESSAGE_SETTINGS'		=> 'Cài đặt tin nhắn cá nhân',
	'ACP_MODULE_MANAGEMENT'		=> 'Module management',
	'ACP_MOD_LOGS'				=> 'Moderator log',
	'ACP_MOD_ROLES'				=> 'Moderator roles',

	'ACP_NO_ITEMS'				=> 'Chưa có file',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Orphaned attachments',

	'ACP_PERMISSIONS'			=> 'Phân quyền',
	'ACP_PERMISSION_MASKS'		=> 'Permission masks',
	'ACP_PERMISSION_ROLES'		=> 'Permission roles',
	'ACP_PERMISSION_TRACE'		=> 'Permission trace',
	'ACP_PHP_INFO'				=> 'Thông tin PHP',
	'ACP_POST_SETTINGS'			=> 'Cài đặt đăng bài',
	'ACP_PRUNE_FORUMS'			=> 'Dọn dẹp chuyên mục',
	'ACP_PRUNE_USERS'			=> 'Dọn dẹp thành viên',
	'ACP_PRUNING'				=> 'Pruning',

	'ACP_QUICK_ACCESS'			=> 'Menu quản trị',

	'ACP_RANKS'					=> 'Ranks',
	'ACP_REASONS'				=> 'Report/denial reasons',
	'ACP_REGISTER_SETTINGS'		=> 'Cài đặt đăng ký',

	'ACP_RESTORE'				=> 'Khôi phục',

	'ACP_FEED'					=> 'Quản lý Feed',
	'ACP_FEED_SETTINGS'			=> 'Cài đặt Feed',

	'ACP_SEARCH'				=> 'Cài đặt tìm kiếm',
	'ACP_SEARCH_INDEX'			=> 'Search index',
	'ACP_SEARCH_SETTINGS'		=> 'Cài đặt tìm kiếm',

	'ACP_SECURITY_SETTINGS'		=> 'Cài đặt bảo mật',
	'ACP_SERVER_CONFIGURATION'	=> 'Cài đặt server',
	'ACP_SERVER_SETTINGS'		=> 'Server settings',
	'ACP_SIGNATURE_SETTINGS'	=> 'Cài đặt chữ ký',
	'ACP_SMILIES'				=> 'Smilies',
	'ACP_STYLE_MANAGEMENT'		=> 'Quản lý Styles',
	'ACP_STYLES'				=> 'Styles',
	'ACP_STYLES_CACHE'			=> 'Xóa cache',
	'ACP_STYLES_INSTALL'		=> 'Install Styles',

	'ACP_SUBMIT_CHANGES'		=> 'Thay đổi',

	'ACP_TEMPLATES'				=> 'Templates',
	'ACP_THEMES'				=> 'Themes',

	'ACP_UPDATE'					=> 'Updating',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'User forum permissions',
	'ACP_USERS_LOGS'				=> 'User logs',
	'ACP_USERS_PERMISSIONS'			=> 'User permissions',
	'ACP_USER_ATTACH'				=> 'Attachments',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Feedback',
	'ACP_USER_GROUPS'				=> 'Groups',
	'ACP_USER_MANAGEMENT'			=> 'User management',
	'ACP_USER_OVERVIEW'				=> 'Overview',
	'ACP_USER_PERM'					=> 'Permissions',
	'ACP_USER_PREFS'				=> 'Preferences',
	'ACP_USER_PROFILE'				=> 'Profile',
	'ACP_USER_RANK'					=> 'Rank',
	'ACP_USER_ROLES'				=> 'User roles',
	'ACP_USER_SECURITY'				=> 'User security',
	'ACP_USER_SIG'					=> 'Signature',
	'ACP_USER_WARNINGS'				=> 'Warnings',

	'ACP_VC_SETTINGS'					=> 'Cài đặt chống SPAMBOT',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA image preview',
	'ACP_VERSION_CHECK'					=> 'Kiểm tra phiên bản',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'View administrative permissions',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'View forum moderation permissions',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'View forum-based permissions',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'View global moderation permissions',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'View user-based permissions',

	'ACP_WORDS'					=> 'Từ khóa cấm',

	'ACTION'				=> 'Action',
	'ACTIONS'				=> 'Actions',
	'ACTIVATE'				=> 'Activate',
	'ADD'					=> 'Thêm',
	'ADMIN'					=> 'Administration',
	'ADMIN_INDEX'			=> 'Trang quản trị',
	'ADMIN_PANEL'			=> 'Administration Control Panel',

	'ADM_LOGOUT'			=> 'ACP&nbsp;Logout',
	'ADM_LOGGED_OUT'		=> 'Đăng xuất thành công khỏi bảng quản trị',

	'BACK'					=> 'Quay lại',

	'CANNOT_CHANGE_FILE_GROUP'	=> 'Unable to change file group',
	'CANNOT_CHANGE_FILE_PERMISSIONS'	=> 'Unable to change file permissions',
	'CANNOT_COPY_FILES'		=> 'Unable to copy files',
	'CANNOT_CREATE_SYMLINK'	=> 'Unable to create a symlink',
	'CANNOT_DELETE_FILES'	=> 'Unable to delete files from the system',
	'CANNOT_DUMP_FILE'		=> 'Unable to dump file',
	'CANNOT_MIRROR_DIRECTORY'	=> 'Unable to mirror directory',
	'CANNOT_RENAME_FILE'	=> 'Unable to rename a file from the system',
	'CANNOT_TOUCH_FILES'	=> 'Unable to determine if the file exists',

	'CONTAINER_EXCEPTION' => 'phpBB encountered an error building the container due to an installed extension. For this reason, all extensions have been temporarily disabled. Please try purging your forum cache. All extensions will automatically be re-enabled once the container error is resolved. If this error continues, please visit <a href="https://www.phpbb.com/support">phpBB.com</a> for support.',
	'EXCEPTION' => 'Exception',

	'COLOUR_SWATCH'			=> 'Chọn màu',
	'CONFIG_UPDATED'		=> 'Cập nhật cài đặt thành công.',
	'CRON_LOCK_ERROR'		=> 'Could not obtain cron lock.',
	'CRON_NO_SUCH_TASK'		=> 'Could not find cron task “%s”.',
	'CRON_NO_TASK'			=> 'No cron tasks need to be run right now.',
	'CRON_NO_TASKS'			=> 'No cron tasks could be found.',
	'CURRENT_VERSION'		=> 'Phiên bản hiện tại',

	'DEACTIVATE'				=> 'Deactivate',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'The entered path “%s” does not exist.',
	'DIRECTORY_NOT_DIR'			=> 'The entered path “%s” is not a directory.',
	'DIRECTORY_NOT_WRITABLE'	=> 'The entered path “%s” is not writable.',
	'DISABLE'					=> 'Disable',
	'DOWNLOAD'					=> 'Download',
	'DOWNLOAD_AS'				=> 'Download as',
	'DOWNLOAD_STORE'			=> 'Download or store file',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'You may directly download the file or save it in your <samp>store/</samp> folder.',
	'DOWNLOADS'					=> 'Downloads',

	'EDIT'					=> 'Edit',
	'ENABLE'				=> 'Enable',
	'EXPORT_DOWNLOAD'		=> 'Download',
	'EXPORT_STORE'			=> 'Store',

	'GENERAL_OPTIONS'		=> 'General options',
	'GENERAL_SETTINGS'		=> 'General settings',
	'GLOBAL_MASK'			=> 'Global permission mask',

	'INSTALL'				=> 'Install',
	'IP'					=> 'User IP',
	'IP_HOSTNAME'			=> 'IP addresses or hostnames',

	'LATEST_VERSION'		=> 'Latest version',
	'LOAD_NOTIFICATIONS'			=> 'Display Notifications',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Display the notifications list on every page (typically in the header).',
	'LOGGED_IN_AS'			=> 'Bạn đang đăng nhập với:',
	'LOGIN_ADMIN'			=> 'Hãy đăng nhập để vào khung quản trị',
	'LOGIN_ADMIN_CONFIRM'	=> 'Hãy đăng nhập để vào khung quản trị',
	'LOGIN_ADMIN_SUCCESS'	=> 'You have successfully authenticated and will now be redirected to the Administration Control Panel.',
	'LOOK_UP_FORUM'			=> 'Lựa chọn chuyên mục',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'You are able to select more than one forum.',

	'MANAGE'				=> 'Manage',
	'MENU_TOGGLE'			=> 'Hide or display the side menu',
	'MORE'					=> 'More',			// Not used at the moment
	'MORE_INFORMATION'		=> 'More information »',
	'MOVE_DOWN'				=> 'Move down',
	'MOVE_UP'				=> 'Move up',

	'NOTIFY'				=> 'Thông báo',
	'NO_ADMIN'				=> 'You are not authorised to administer this board.',
	'NO_EMAILS_DEFINED'		=> 'No valid email addresses found.',
	'NO_FILES_TO_DELETE'	=> 'Attachments you selected for deletion do not exist.',
	'NO_PASSWORD_SUPPLIED'	=> 'You need to enter your password to access the Administration Control Panel.',

	'OFF'					=> 'Tắt',
	'ON'					=> 'Bật',

	'PARSE_BBCODE'						=> 'Parse BBCode',
	'PARSE_SMILIES'						=> 'Parse smilies',
	'PARSE_URLS'						=> 'Parse links',
	'PERMISSIONS_TRANSFERRED'			=> 'Permissions transferred',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'You currently have the permissions from %1$s. You are able to browse the board with this user’s permissions, but not access the administration control panel since admin permissions were not transferred. You can <a href="%2$s"><strong>revert to your permission set</strong></a> at any time.',
	'PROCEED_TO_ACP'					=> '%sProceed to the ACP%s',

	'RELEASE_ANNOUNCEMENT'		=> 'Announcement',
	'REMIND'							=> 'Remind',
	'REPARSE_LOCK_ERROR'				=> 'Reparsing is already in progress by another process.',
	'RESYNC'							=> 'Resynchronise',

	'RUNNING_TASK'			=> 'Running task: %s.',
	'SELECT_ANONYMOUS'		=> 'Select anonymous user',
	'SELECT_OPTION'			=> 'Select option',

	'SETTING_TOO_LOW'		=> 'The provided value for the setting “%1$s” is too low. The minimum acceptable value is %2$d.',
	'SETTING_TOO_BIG'		=> 'The provided value for the setting “%1$s” is too high. The maximum acceptable value is %2$d.',
	'SETTING_TOO_LONG'		=> 'The provided value for the setting “%1$s” is too long. The maximum acceptable length is %2$d.',
	'SETTING_TOO_SHORT'		=> 'The provided value for the setting “%1$s” is too short. The minimum acceptable length is %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Show all operations',

	'TASKS_NOT_READY'			=> 'Not ready tasks:',
	'TASKS_READY'			=> 'Ready tasks:',
	'TOTAL_SIZE'			=> 'Total size',

	'UCP'					=> 'User Control Panel',
	'USERNAMES_EXPLAIN'		=> 'Place each username on a separate line.',
	'USER_CONTROL_PANEL'	=> 'User Control Panel',

	'UPDATE_NEEDED'			=> 'The board is not up to date.',
	'UPDATE_NOT_NEEDED'		=> 'The board is up to date.',
	'UPDATES_AVAILABLE'		=> 'Updates available:',

	'WARNING'				=> 'Cảnh báo',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'This page lists information on the version of PHP installed on this server. It includes details of loaded modules, available variables and default settings. This information may be useful when diagnosing problems. Please be aware that some hosting companies will limit what information is displayed here for security reasons. You are advised to not give out any details on this page except when asked by <a href="https://www.phpbb.com/about/team/">official team members</a> on the support forums.',

	'NO_PHPINFO_AVAILABLE'	=> 'Information about your PHP configuration is unable to be determined. Phpinfo() has been disabled for security reasons.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'This lists all the actions carried out by board administrators. You can sort by username, date, IP or action. If you have appropriate permissions you can also clear individual operations or the log as a whole.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'This lists the actions carried out by the board itself. This log provides you with information you are able to use for solving specific problems, for example non-delivery of emails. You can sort by username, date, IP or action. If you have appropriate permissions you can also clear individual operations or the log as a whole.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'This lists all actions done on forums, topics and posts as well as actions carried out on users by moderators, including banning. You can sort by username, date, IP or action. If you have appropriate permissions you can also clear individual operations or the log as a whole.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'This lists all actions carried out by users or on users (reports, warnings and user notes).',
	'ALL_ENTRIES'				=> 'All entries',

	'DISPLAY_LOG'	=> 'Display entries from previous',

	'NO_ENTRIES'	=> 'No log entries for this period.',

	'SORT_IP'		=> 'IP address',
	'SORT_DATE'		=> 'Date',
	'SORT_ACTION'	=> 'Lịch sử hoạt động',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Chào mừng bạn đến với phpBB. Hãy sử dụng thanh điều khiển bên trái để quản trị toàn bộ diễn đàn.',
	'ADMIN_LOG'					=> 'Logged administrator actions',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'This gives an overview of the last five actions carried out by board administrators. A full copy of the log can be viewed from the appropriate menu item or following the link below.',
	'AVATAR_DIR_SIZE'			=> 'Kích thước thư mục Avatar',

	'BOARD_STARTED'		=> 'Ngày thành lập',
	'BOARD_VERSION'		=> 'Phiên bản',

	'DATABASE_SERVER_INFO'	=> 'Database server',
	'DATABASE_SIZE'			=> 'Database size',

	// Enviroment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'Function overloading is improperly configured',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> '<var>mbstring.func_overload</var> must be set to either 0 or 4. You can check the current value on the <samp>PHP information</samp> page.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'Transparent character encoding is improperly configured',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> must be set to 0. You can check the current value on the <samp>PHP information</samp> page.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'HTTP input character conversion is improperly configured',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> '<var>mbstring.http_input</var> must be set to <samp>pass</samp>. You can check the current value on the <samp>PHP information</samp> page.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'HTTP output character conversion is improperly configured',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> must be set to <samp>pass</samp>. You can check the current value on the <samp>PHP information</samp> page.',

	'FILES_PER_DAY'		=> 'Số lượng đính kèm / ngày',
	'FORUM_STATS'		=> 'Thông kê chung',

	'GZIP_COMPRESSION'	=> 'Nén GZip',

	'NO_SEARCH_INDEX'	=> 'The selected search backend does not have a search index.<br />Please create the index for “%1$s” in the %2$ssearch index%3$s section.',
	'NOT_AVAILABLE'		=> 'Not available',
	'NUMBER_FILES'		=> 'Number of attachments',
	'NUMBER_POSTS'		=> 'Số lượng bài viết',
	'NUMBER_TOPICS'		=> 'Số lượng chủ đề',
	'NUMBER_USERS'		=> 'Số lượng thành viên',
	'NUMBER_ORPHAN'		=> 'Orphan attachments',

	'PHP_VERSION_OLD'	=> 'The version of PHP on this server will no longer be supported by future versions of phpBB. %sDetails%s',

	'POSTS_PER_DAY'		=> 'Bài viết theo ngày',

	'PURGE_CACHE'			=> 'Xóa cache',
	'PURGE_CACHE_CONFIRM'	=> 'Bạn thực sự muốn xóa?',
	'PURGE_CACHE_EXPLAIN'	=> 'Xóa tất cả các loại cache',
	'PURGE_CACHE_SUCCESS'	=> 'Xóa cache thành công!',

	'PURGE_SESSIONS'			=> 'Xóa tất cả các phiên làm việc',
	'PURGE_SESSIONS_CONFIRM'	=> 'Are you sure you wish to purge all sessions? This will log out all users.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Purge all sessions. This will log out all users by truncating the session table.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Xóa tất cả các phiên làm việc thành công.',

	'RESET_DATE'					=> 'Reset ngày bắt đầu diễn đàn',
	'RESET_DATE_CONFIRM'			=> 'Bạn thực sự muốn reset ngày bắt đầu diễn đàn ?',
	'RESET_DATE_SUCCESS'				=> 'Reset ngày bắt đầu diễn đàn thành công',
	'RESET_ONLINE'					=> 'Reset lại thành viên đang online',
	'RESET_ONLINE_CONFIRM'			=> 'Bạn thực sự muốn thực hiện reset lại thống kê thành viên đang online?',
	'RESET_ONLINE_SUCCESS'				=> 'Reset lại thống kê thành viên đang online thành công',
	'RESYNC_POSTCOUNTS'				=> 'Đồng bộ lại bộ đếm bài viết',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Chỉ những bài viết tồn tại sẽ được đếm lại. Các bài viết đã xóa sẽ không được đếm lại.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Bạn thực sự muốn đồng bộ lại bộ đếm bài viết?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Đồng bộ lại bộ đếm bài viết thành công',
	'RESYNC_POST_MARKING'			=> 'Resynchronise dotted topics',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Are you sure you wish to resynchronise dotted topics?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'First unmarks all topics and then correctly marks topics that have seen any activity during the past six months.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Resynchronised dotted topics',
	'RESYNC_STATS'					=> 'Đồng bộ lại thống kê',
	'RESYNC_STATS_CONFIRM'			=> 'Bạn thực sự muốn đồng bộ lại thống kê?',
	'RESYNC_STATS_EXPLAIN'			=> 'Việc này sẽ đếm lại số lượng các chủ đề / bài viết / thành viên / file đính kèm trong diễn đàn',
	'RESYNC_STATS_SUCCESS'			=> 'Resynchronised statistics',
	'RUN'							=> 'Thực hiện luôn',

	'STATISTIC'					=> 'Thống kê',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Cài đặt lại thống kê',

	'TIMEZONE_INVALID'	=> 'The timezone you selected is invalid.',
	'TIMEZONE_SELECTED'	=> '(currently selected)',
	'TOPICS_PER_DAY'	=> 'Chủ đề / ngày',

	'UPLOAD_DIR_SIZE'	=> 'Kích thước đính kèm',
	'USERS_PER_DAY'		=> 'Thành viên / ngày',

	'VALUE'						=> 'Giá trị',
	'VERSIONCHECK_FAIL'			=> 'Lỗi không kiểm tra được phiên bản mới. Vui lòng thử lại sau.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Kiểm tra lại',
	'VERSION_CHECK'				=> 'Kiểm tra phiên bản',
	'VERSION_CHECK_EXPLAIN'		=> 'Checks to see if your phpBB installation is up to date.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'Phiên bản phpBB bạn đang sử dụng đã lỗi thời.<br />Bên dưới là thông tin phiên bản mới cũng như hướng dẫn cập nhật. Hãy cập nhật ngay khi có thể.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'Phiên bản phpBB bạn đang sử dụng đã lỗi thời.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Phiên bản phpBB bạn đang sử dụng là phiên bản mới nhất hiện nay. Hãy an tâm sử dụng.',
	'VIEW_ADMIN_LOG'			=> 'Xem nhật ký của quản trị',
	'VIEW_INACTIVE_USERS'		=> 'Xem thành viên chưa kích hoạt',

	'WELCOME_PHPBB'			=> 'Chào mừng đến với khung quản trị phpBB',
	'WRITABLE_CONFIG'		=> 'Your config file (config.php) is currently world-writable. We strongly encourage you to change the permissions to 640 or at least to 644 (for example: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Inactive date',
	'INACTIVE_REASON'				=> 'Lý do',
	'INACTIVE_REASON_MANUAL'		=> 'Account deactivated by administrator',
	'INACTIVE_REASON_PROFILE'		=> 'Thông tin cá nhân đã được thay đổi',
	'INACTIVE_REASON_REGISTER'		=> 'Newly registered account',
	'INACTIVE_REASON_REMIND'		=> 'Forced user account reactivation',
	'INACTIVE_REASON_UNKNOWN'		=> 'Unknown',
	'INACTIVE_USERS'				=> 'Thành viên chưa kích hoạt',
	'INACTIVE_USERS_EXPLAIN'		=> 'Dưới đây là danh sách thành viên chưa kích hoạt. Bạn có thể kích hoạt / xóa / nhắc nhở (qua email) họ.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'This is a list of the last 10 registered users who have inactive accounts. Accounts are inactive either because account activation was enabled in user registration settings and these users’ accounts have not yet been activated, or because these accounts have been deactivated. A full list is available by following the link below from where you can activate, delete or remind (by sending an email) these users if you wish.',

	'NO_INACTIVE_USERS'	=> 'Không có thành viên chưa kích hoạt',

	'SORT_INACTIVE'		=> 'Inactive date',
	'SORT_LAST_VISIT'	=> 'Last visit',
	'SORT_REASON'		=> 'Reason',
	'SORT_REG_DATE'		=> 'Ngày đăng ký',
	'SORT_LAST_REMINDER'=> 'Last reminded',
	'SORT_REMINDER'		=> 'Reminder sent',

	'USER_IS_INACTIVE'		=> 'User is inactive',
));

// Help support phpBB page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Please send information about your server and board configurations to phpBB for statistical analysis. All information that could identify you or your website has been removed - the data is entirely <strong>anonymous</strong>. We base decisions about future phpBB versions on this information. The statistics are made available publically. We also share this data with the PHP project, the programming language phpBB is made with.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Using the button below you can preview all variables that will be transmitted.',
	'DONT_SEND_STATISTICS'		=> 'Quay lại trang bắt đầu nếu bạn không muốn gửi những thông tin hệ thống tới phpBB Team.',
	'GO_ACP_MAIN'				=> 'Quay lại trang bắt đầu',
	'HIDE_STATISTICS'			=> 'Ẩn thông tin',
	'SEND_STATISTICS'			=> 'Gửi thông tin hệ thống',
	'SEND_STATISTICS_LONG'		=> 'Gửi thông tin hệ thống',
	'SHOW_STATISTICS'			=> 'Xem chi tiết',
	'THANKS_SEND_STATISTICS'	=> 'Cảm ơn bạn đã gửi thông tin hệ thống. Điều này sẽ giúp phpBB Team cài thiện trong thời gian tới.',
	'FAIL_SEND_STATISTICS'		=> 'Lỗi không thể gửi thông tin hệ thống',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Added or edited users’ user permissions</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Added or edited groups’ user permissions</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Added or edited users’ global moderator permissions</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Added or edited groups’ global moderator permissions</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Added or edited users’ administrator permissions</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Added or edited groups’ administrator permissions</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Added or edited Administrators</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Added or edited Global Moderators</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Added or edited users’ forum access</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Added or edited users’ forum moderator access</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Added or edited groups’ forum access</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Added or edited groups’ forum moderator access</strong> from %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Added or edited Moderators</strong> from %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Added or edited forum permissions</strong> from %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Removed Administrators</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Removed Global Moderators</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Removed Moderators</strong> from %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Removed User/Group forum permissions</strong> from %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permissions transferred from</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Own permissions restored after using permissions from</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Đăng nhập khung quản trị không thành công</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Đăng nhập khung quản trị thành công</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Removed user attachments</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Added or edited attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Removed attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Updated attachment extension</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Added extension group</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Edited extension group</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Removed extension group</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Orphan File uploaded to Post</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Orphan Files deleted</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Excluded user from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>Excluded IP from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Excluded email from ban</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Banned user</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>Banned IP</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Banned email</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Unbanned user</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Unbanned IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Unbanned email</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Added new BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>Edited BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>Deleted BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>New bot added</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Deleted bot</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Existing bot updated</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Cleared admin log</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Cleared error log</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Cleared moderator log</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Cleared user log</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Cleared user logs</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Altered attachment settings</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Altered authentication settings</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Altered avatar settings</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Altered cookie settings</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Altered email settings</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Altered board features</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Altered load settings</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Altered private message settings</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Altered post settings</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Altered user registration settings</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Altered syndication feeds settings</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Altered search settings</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Altered security settings</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Altered server settings</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Altered board settings</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Altered signature settings</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Altered anti-spambot settings</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Approved topic</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>User bumped topic</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Deleted post “%1$s” written by “%2$s” for the following reason</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Deleted shadow topic</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Deleted topic “%1$s” written by “%2$s” for the following reason</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Copied topic</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>Locked topic</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Locked post</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Merged posts</strong> into topic<br />» %s',
	'LOG_MOVE'					=> '<strong>Moved topic</strong><br />» from %1$s to %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>Moved topic</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Closed PM report</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Deleted PM report</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Approved post</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Disapproved post “%1$s” written by “%3$s” for the following reason</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Edited post “%1$s” written by “%2$s” for the following reason</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Restored post</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Closed report</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Deleted report</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Restored topic “%1$s” written by</strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Soft deleted post “%1$s” written by “%2$s” for the following reason</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Soft deleted topic “%1$s” written by “%2$s” for the following reason</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Moved split posts</strong><br />» to %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Split posts</strong><br />» from %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Approved topic</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Restored topic</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Disapproved topic “%1$s” written by “%3$s” for the following reason</strong><br />» %2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Resynchronised topic counters</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Changed topic type</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Unlocked topic</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Unlocked post</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Added disallowed username</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Deleted disallowed username</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Sao lưu dữ liệu</strong>',
	'LOG_DB_DELETE'			=> '<strong>Xóa sao lưu dữ liệu</strong>',
	'LOG_DB_RESTORE'		=> '<strong>Khôi phục bản sao lưu dữ liệu</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Excluded IP/hostname from download list</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Added IP/hostname to download list</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Removed IP/hostname from download list</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber error</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Email error</strong><br />» %s',
	'LOG_ERROR_CAPTCHA'		=> '<strong>CAPTCHA error</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Tạo thêm chuyên mục mới</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Copied forum permissions</strong> from %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Deleted forum</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Deleted forum and its subforums</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Deleted forum and moved subforums</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Deleted forum and moved posts </strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Deleted forum and its subforums, moved posts</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Deleted forum, moved posts</strong> to %1$s <strong>and subforums</strong> to %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Deleted forum and its posts</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Deleted forum, its posts and subforums</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Deleted forum and its posts, moved subforums</strong> to %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Edited forum details</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Moved forum</strong> %1$s <strong>below</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Moved forum</strong> %1$s <strong>above</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Re-synchronised forum</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>A general error occurred</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>New usergroup created</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Group “%1$s” made default for members</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Usergroup deleted</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Leaders demoted in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Members promoted to leader in usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Members removed from usergroup</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Usergroup details updated</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Added new leaders to usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Added new members to usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Users approved in usergroup</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Users requested to join group “%1$s” and need to be approved</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Error while creating image</strong><br />» Error in %1$s on line %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Activated inactive users</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Deleted inactive users</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Sent reminder emails to inactive users</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Converted from %1$s to phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>Installed phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Session IP/browser/X_FORWARDED_FOR check failed</strong><br />»User IP “<em>%1$s</em>” checked against session IP “<em>%2$s</em>”, user browser string “<em>%3$s</em>” checked against session browser string “<em>%4$s</em>” and user X_FORWARDED_FOR string “<em>%5$s</em>” checked against session X_FORWARDED_FOR string “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber account changed</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber password changed</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber account registered</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber settings changed</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Deleted language pack</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Installed language pack</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Updated language pack details</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Replaced language file</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Submitted language file and placed in store folder</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Sent mass email</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Changed poster in topic “%1$s”</strong><br />» from %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Module disabled</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Module enabled</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Module moved down</strong><br />» %1$s below %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Module moved up</strong><br />» %1$s above %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Module removed</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Thêm module</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Module edited</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Admin role added</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Admin role edited</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Admin role removed</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Forum role added</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Forum role edited</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forum role removed</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderator role added</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderator role edited</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderator role removed</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>User role added</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>User role edited</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>User role removed</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Unable to open %1$s for tidying, check permissions.</strong><br />Exception: %2$s<br />Trace: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profile field activated</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profile field added</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profile field deactivated</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profile field changed</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profile field removed</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Pruned forums</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Auto-pruned forums</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Auto-pruned shadow topics</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Users deactivated</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Users pruned and posts deleted</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Users pruned and posts retained</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Đã xóa cache</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Đã xóa phiên làm việc</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Thêm rank mới</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Xóa rank</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Cập nhật rank</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Added report/denial reason</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Removed report/denial reason</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Updated report/denial reason</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Referrer validation failed</strong><br />»Referrer was “<em>%1$s</em>”. The request was rejected and the session killed.',
	'LOG_RESET_DATE'			=> '<strong>Board start date reset</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Most users online reset</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>File statistics resynchronised</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>User post counts resynchronised</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Dotted topics resynchronised</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Post, topic and user statistics resynchronised</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Created search index for</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Removed search index for</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Sphinx Error</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Thêm giao diện mới </strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Xóa giao diện</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Sửa giao diện</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Xuất giao diện</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Added new template set to database</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Add new template set on filesystem</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Deleted cached versions of template files in template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Deleted template set</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Edited template set <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Edited template details</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Exported template set</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Refreshed template set</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Added new theme to database</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Add new theme on filesystem</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Theme deleted</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Edited theme details</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Edited theme <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Edited theme <em>%1$s</em></strong><br />» Modified file <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Exported theme</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Refreshed theme</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Cập nhật dữ liệu từ %1$s lên %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>Cập nhật phpBB từ %1$s lên %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>User activated</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Banned User via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Banned IP via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Banned email via user management</strong> for reason “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Deleted user</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Removed all attachments made by the user</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Removed user avatar</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Emptied user outbox</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Removed all posts made by the user</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Removed user signature</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>User deactivated</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Moved user posts</strong><br />» posts by “%1$s” to forum “%2$s”',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Changed user password</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Forced user account reactivation</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Removed newly registered flag from user</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>User “%1$s” changed email</strong><br />» from “%2$s” to “%3$s”',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Changed username</strong><br />» from “%1$s” to “%2$s”',
	'LOG_USER_USER_UPDATE'	=> '<strong>Updated user details</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>User account activated</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>User avatar removed</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>User signature removed</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Added user feedback</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Entry added:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>User account de-activated</strong>',
	'LOG_USER_LOCK'				=> '<strong>User locked own topic</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Moved all posts to forum</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Forced user account reactivation</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>User unlocked own topic</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Added user warning</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>The following warning was issued to this user</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>User changed default group</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>User demoted as leaders from usergroup</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>User joined group</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>User joined group and needs to be approved</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>User resigned membership from group</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Deleted user warning</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Deleted user warning</strong><br />» %1$s',
		2 => '<strong>Deleted %2$d user warnings</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Deleted all user warnings</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Thêm từ khóa cấm</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Xóa từ khóa cấm</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Sửa từ khóa cấm</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Extension enabled</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Tắt Extension</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Xóa dữ liệu Extension</strong><br />» %s',
	'LOG_EXT_UPDATE'	=> '<strong>Cập nhật Extension</strong><br />» %s',
));
