<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'namdutravel' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mm|bA 3GT+)8xZq-m@NJW;P7STg=64.V;oEWDIk1h.9FS[TlI0E]|Pe!wZVEm uD' );
define( 'SECURE_AUTH_KEY',  ']|m#zr;Z}-%][KF(Ct/),3l^a-xkW&xUM_XayF`s#W`}O2RgJpIZNVr3qbV-9y7$' );
define( 'LOGGED_IN_KEY',    'U>[L81 a`lF&CBI! 6<&hEP}+m:][=y#@lAG~OoKcj/GJ3Do<S=5~E($/Eo}LY29' );
define( 'NONCE_KEY',        'J{W8X6QUaE:{aWKBVaQw37gPKbd5C>=K0[St!#17b^WES][GE9egD$HFnh ov;}-' );
define( 'AUTH_SALT',        '[wvxpr83=Qg.v7Kgr|BoeJfUL=1LfMt,5LRbJpP4{sg@wb4lZxa,/up6rU%!M/Oh' );
define( 'SECURE_AUTH_SALT', 'kA|d3U7n,!hd*bX6,Tho.=fU^3lXY;!Pb@[q+:/J2<m(8oY4%x3J<tM~c[ vr9}Z' );
define( 'LOGGED_IN_SALT',   'Bg6^ZC8zUtg=F`Jo=4{xdgh05PbXEy3(4UwAG<xG4[b;*EPeg&33!8`UTAje0]{:' );
define( 'NONCE_SALT',       '<7no~Fb5M4nrQvYT)2CfFZG?[(2E[B6J0,9?*k6Oef;/vKH1I;#J{i/A:KfRNm=Z' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
