<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package noithat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
    <div class="header-menu">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo"><a title="" href="index.php"><img src="<?php echo __BASE_URL__ ?>/images/logo.png" class="img-fluid" alt=""></a></div>
                    </div>
                    <div class="col-md-9">
                        <ul>
                            <li><a title="" href="index.php" class="active">Trang chủ</a></li>
                            <li><a title="" href="about.php">Giới thiệu</a></li>
                            <li><a title="" href="product.php">Sản phẩm</a></li>
                            <li><a title="" href="noithat.php">Thiết kế không gian nội thất</a></li>
                            <li><a title="" href="news.php">Bất động sản</a></li>
                            <li><a title="" href="contact.php">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-mobile d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-7 col-sm-7">
                    <div class="logo"> 
                        <a title="" href="index.php"><img alt="" src="<?php echo __BASE_URL__ ?>/images/logo.png" class="img-fluid avarta-logo" alt=""></a>
                    </div>
                </div>
                <div class="col-md-5 col-5 col-sm-5">
                    <div class="right text-right">
                        <div class="header">
                            <a title="" href="#menu"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav id="menu">
            <ul>
                <li><a title="" href="index.php" class="active">Trang chủ</a></li>
                <li><a title="" href="about.php">Giới thiệu</a></li>
                <li><a title="" href="product.php">Sản phẩm</a></li>
                <li><a title="" href="noithat.php">Nội thất</a></li>
                <li><a title="" href="news.php">Tin tức</a></li>
                <li><a title="" href="contact.php">Liên hệ</a></li>
            </ul>
        </nav>
    </div>
</header>

	
