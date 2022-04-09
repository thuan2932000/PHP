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
define( 'DB_NAME', 'vanthuan' );

/** Username của database */
define( 'DB_USER', 'vanthuan' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'rd6Fn3jFKr6e;*r&]W!jL/a2[{D}1h )lo*8N1b`dO +Uu-)KyQE~^KN|rZJ$]u+' );
define( 'SECURE_AUTH_KEY',  'NG+FB*F3RGcC(xA/Y2Z9i|*)RJ>3z[0H8/VNr%*W{j>V}J:vhab&e{8#fJjr6( %' );
define( 'LOGGED_IN_KEY',    'UE2D{_ D<z:z1nSoL[xyRVKmE5,Ta4-Up#/Htr)g;hw!3nHuo*gr)JM=C^f&U~!e' );
define( 'NONCE_KEY',        '6L9TIbFn~Hh&V2EmCi5LB_LMQYaEmidsE:d&5u,/6%UpO1tBnEeG]]=]7VvoNsa)' );
define( 'AUTH_SALT',        'erO%Knt;; ruKGzkBQF{wP[_#s}xBoP (|]@M.[_58Zyx%FC<;&t]c7@^ Wf3DDw' );
define( 'SECURE_AUTH_SALT', '^L>CjyGH:)1n=-YXD;6g1Zw-L=nRQqSJ2EmrRkXu3,VXXlB8#[{|G5ZB9w~HG?uX' );
define( 'LOGGED_IN_SALT',   'd&}XE*?61+TI3aa?,nef$dh:d%U(QBQ%HNAdp(]5=UM_38?GqG}Pbd:]aE?dQxAB' );
define( 'NONCE_SALT',       '96>>tEm7&o&(>e~{#QC>4+i$#s.fv,$ra1=iES}d-yyzm}z*M,Sb/I0Fqb|=(07O' );

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
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
