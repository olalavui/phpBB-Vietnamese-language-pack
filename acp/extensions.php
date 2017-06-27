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

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'EXTENSION'					=> 'Extension',
	'EXTENSIONS'				=> 'Extensions',
	'EXTENSIONS_ADMIN'			=> 'Quản lý Extensions',
	'EXTENSIONS_EXPLAIN'		=> 'Tại đây bạn có thể quản lý toàn bộ Extension sử dụng trong hệ thống, cũng như thông tin về các gói extension đang có sẵn.',
	'EXTENSION_INVALID_LIST'	=> 'The “%s” extension is not valid.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'The selected extension is not available for this board, please verify your phpBB and PHP versions are allowed (see the details page).',
	'EXTENSION_DIR_INVALID'		=> 'The selected extension has an invalid directory structure and cannot be enabled.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'The selected extension cannot be enabled, please verify the extension’s requirements.',
	'EXTENSION_NOT_INSTALLED'	=> 'The extension %s is not available. Please check that you have installed it correctly.',

	'DETAILS'				=> 'Chi tiết',

	'EXTENSIONS_DISABLED'	=> 'Danh sách Extensions đang tắt',
	'EXTENSIONS_ENABLED'	=> 'Danh sách Extensions đang bật',

	'EXTENSION_DELETE_DATA'	=> 'Xóa dữ liệu',
	'EXTENSION_DISABLE'		=> 'Ngưng kích hoạt',
	'EXTENSION_ENABLE'		=> 'Kích hoạt',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Deleting an extension’s data removes all of its data and settings. The extension files are retained so it can be enabled again.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Disabling an extension retains its files, data and settings but removes any functionality added by the extension.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Việc kích hoạt sẽ cho phép bạn sử dụng extension này trên diễn đàn của mình.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'The extension’s data is currently being deleted. Please do not leave or refresh this page until it is completed.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'The extension is currently being disabled. Please do not leave or refresh this page until it is completed.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'The extension is currently being enabled. Please do not leave or refresh this page until it is completed.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Xóa dữ liệu extension thành công',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Ngưng kích hoạt extension thành công',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Kích hoạt extension thành công',

	'EXTENSION_NAME'			=> 'Tên Extension',
	'EXTENSION_ACTIONS'			=> 'Hành động',
	'EXTENSION_OPTIONS'			=> 'Thông tin',
	'EXTENSION_INSTALL_HEADLINE'=> 'Cài đặt extension',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Tải extension từ kho dữ liệu chính thức từ phpBB.</li>
			<li>Unzip file extension đã tải về và upload vào thư mục <samp>ext/</samp> trên server.</li>
			<li>Click Kích hoạt Extension để bật.</li>
		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Cập nhật extension',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Click ngưng kích hoạt extension</li>
			<li>Xóa toàn bộ file của extension khỏi server.</li>
			<li>Tải lên file extension mới nhất tải từ kho dữ liệu phpBB</li>
			<li>Click kích hoạt extension.</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Xóa extension',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Click ngưng kích hoạt extension.</li>
			<li>Click xóa dữ liệu extension.</li>
			<li>Xóa toàn bộ file của extension khỏi server.</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Are you sure that you wish to delete the data associated with “%s”?<br /><br />This removes all of its data and settings and cannot be undone!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Bạn thực sự muốn ngưng kích hoạt extension “%s” ?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Bạn thực sự muốn kích hoạt extension “%s” ?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Bạn thực sự muốn sử dụng phiên bản chưa phát hành chính thức. Điều này có thể gây lỗi hệ thống của bạn?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Quay lại danh sách extension',

	'EXT_DETAILS'			=> 'Thông tin Extension',
	'DISPLAY_NAME'			=> 'Tên Extension',
	'CLEAN_NAME'			=> 'Thư mục Extension',
	'TYPE'					=> 'Loại',
	'DESCRIPTION'			=> 'Mô tả',
	'VERSION'				=> 'Phiên bản',
	'HOMEPAGE'				=> 'Trang chủ',
	'PATH'					=> 'File Path',
	'TIME'					=> 'Ngày phát hành',
	'LICENSE'				=> 'Licence',

	'REQUIREMENTS'			=> 'Yêu cầu hệ thống',
	'PHPBB_VERSION'			=> 'phpBB Version',
	'PHP_VERSION'			=> 'PHP Version',
	'AUTHOR_INFORMATION'	=> 'Thông tin tác giả',
	'AUTHOR_NAME'			=> 'Tên',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Homepage',
	'AUTHOR_ROLE'			=> 'Tình trạng',

	'NOT_UP_TO_DATE'		=> '%s không phải là bản mới nhất',
	'UP_TO_DATE'			=> '%s là bản mới nhất',
	'ANNOUNCEMENT_TOPIC'	=> 'Thông báo phiên bản mới',
	'DOWNLOAD_LATEST'		=> 'Download Version',
	'NO_VERSIONCHECK'		=> 'No version check information given.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Kiểm tra tất cả',
	'FORCE_UNSTABLE'					=> 'Kiểm tra cả phiên bản chưa phát hành chính thức',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Cài đặt kiểm tra phiên bản',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Danh sách extension chính thức',

	'META_FIELD_NOT_SET'	=> 'Required meta field %s has not been set.',
	'META_FIELD_INVALID'	=> 'Meta field %s is invalid.',
));
