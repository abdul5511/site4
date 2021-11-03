<?php
/**
 * إعدادات ووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'wordpress1' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * تغيير هذه العبارات إلى عبارات فريدة مختلفة!
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 * يمكنك تغيير هذه في أي وقت لإلغاء جميع ملفات تعريف الارتباط الموجودة. سيؤدي هذا إلى إجبار جميع المستخدمين على تسجيل الدخول مرة أخرى.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pG`wLw9Vm+I{+0Zd?m #3Ua6Y|zs*+8aeeFxltN12#^ FC`^vd&?tw&0i7@k3AKn' );
define( 'SECURE_AUTH_KEY',  'Pj[Y.v;?=aKYU6xH@j_<0r(s0ZSvn=6U6@/lRWfD=sP*yHp[j-v|DoV#nC_-.Pis' );
define( 'LOGGED_IN_KEY',    'g.SWG*Br{}(K);;)0TE0SjU|YM:PhFhQf3&A2/u=A!Qn?1=K5!=Ar -3s~hZV$hL' );
define( 'NONCE_KEY',        '6q?X[Ewq5!;S;R<Bb5E?|Z)YipRNa}8.4b(dtbN]DnPlXgl~&U:J^;gsgxHe/r/8' );
define( 'AUTH_SALT',        'N+2%KLbT:J%nR)Tlx]YBz*SKI:&>IoJH45=N q2hm0h|0~fsh*@$E]Q^FjN1_gRh' );
define( 'SECURE_AUTH_SALT', '[HB[OHNC*z`4_/](x1v0[@MYT$-2A,+%CxWA=h.V>mKgO&&0j6vK 37iZpT_i AY' );
define( 'LOGGED_IN_SALT',   '4:7vRw]=P~ZkrxA+w-{!QDin*/*l0{>Lnb0I@yU@`-2oQTm,$tBBE1 y<Lu}:f3.' );
define( 'NONCE_SALT',       '_(!T=D:?c)$P8Gg|6LHx}647pKEGfVutB1EXFBr;ntma!A-p]2{6$l?0O[<<*YyP' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
