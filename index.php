<?php
ob_start();
session_start(); 
if (file_exists("./install.php")) {
	header("Location: ./install");
}
include("includes/config.php");
// Report all errors
error_reporting(E_ALL);
// get web settings
$web = $bdd->query("SELECT * FROM vanguard_settings ORDER BY id DESC LIMIT 1");
$web = $web->fetch(PDO::FETCH_ASSOC);
$url = $web['url'];
include("includes/functions.php");
include("includes/paypal_class.php");
include_once("resources/common.php"); // Languages
$source_dir = 'source/';
$resource_dir = 'resource/';

$m = protect($_GET['m']);
switch($m) {
	case "options": include($source_dir."additionnal_settings.php"); break;
	case "all_products": include($source_dir."all-products.php"); break;
	case "cancel": include($source_dir."cancel_payment.php"); break;
	case "change_password": include($source_dir."change_password.php"); break;
	case "check_payment": include($source_dir."check_payment.php"); break;
	case "dashboard": include($source_dir."dashboard.php"); break;
	case "analytics": include($source_dir."analytics.php"); break;
	case "analytics_all": include($source_dir."analytics_all.php"); break;
	case "delete": include($source_dir."delete_item.php"); break;
	case "delete_news": include($source_dir."delete_news.php"); break;
	case "download": include($source_dir."download_product.php"); break;
	case "edit": include($source_dir."edit_item.php"); break;
	case "profile": include($source_dir."edit_profile.php"); break;
	case "settings": include($source_dir."general_settings.php"); break;
	case "home": include($source_dir."home.php"); break;
	case "item": include($source_dir."item.php"); break;
	case "login": include($source_dir."login.php"); break;
	case "not_found": include($source_dir."not_found.html"); break;
	case "offers": include($source_dir."offers.php"); break;
	case "payments": include($source_dir."payment_settings.php"); break;
	case "payment_user": include($source_dir."payment_user.php"); break;
	case "my_products": include($source_dir."products_list.php"); break;
	case "purchases": include($source_dir."purchases.php"); break;
	case "redeem": include($source_dir."redeem.php"); break;
	case "register": include($source_dir."register.php"); break;
	case "search": include($source_dir."search.php"); break;
	case "upgrade": include($source_dir."upgrade.php"); break;
	case "add_new": include($source_dir."upload.php"); break;
	case "user": include($source_dir."user_profile.php"); break;
    case "post": include($source_dir."news_post.php"); break;
    case "news": include($source_dir."news_list.php"); break;
    case "manage_news": include($source_dir."manage_news.php"); break;
    case "manage_comments": include($source_dir."manage_comments.php"); break;
    case "manage_category": include($source_dir."manage_category.php"); break;
    case "manage_users": include($source_dir."manage_users.php"); break;
    case "manage_offers": include($source_dir."manage_offers.php"); break;
    case "read_category": include($source_dir."read_category.php"); break;
    case "read_comments": include($source_dir."read_comments.php"); break;
    case "read_news": include($source_dir."read_news.php"); break;
    case "read_user": include($source_dir."read_user.php"); break;
    case "get_products": include($source_dir."get_products.php"); break;
    case "about": include($source_dir."about.php"); break;
    case "terms": include($source_dir."terms_conditions.php"); break;
    case "privacy": include($source_dir."privacy_policy.php"); break;
    case "contact": include($source_dir."contact.php"); break;
    case "action": include($source_dir."action.php"); break;
    case "action_wichlists": include($source_dir."action_wichlists.php"); break;
    case "notifications": include($source_dir."notifications.php"); break;
    case "appearance": include($source_dir."edit_appearance.php"); break;
    case "mails": include($source_dir."mails_list.php"); break;
    case "mails_outbox": include($source_dir."mails_list_outbox.php"); break;
    case "mails_send": include($source_dir."mails_send.php"); break;
    case "mails_read": include($source_dir."mails_read.php"); break;
    case "mails_remove": include($source_dir."mails_remove.php"); break;
    case "follow": include($source_dir."follow.php"); break;
    case "recuperation": include($source_dir."pass_recup.php"); break;
    case "wishlists_user": include($source_dir."wishlists_user.php"); break;
    case "offers_download": include($source_dir."offers_download.php"); break;
    case "change_lang": include($source_dir."change_lang.php"); break;
    case "action_comments_del": include($source_dir."action_comments_del.php"); break;
	case "logout": 
		unset($_SESSION['vg_usern']);
		session_unset();
		session_destroy();
		header("Location: ./");
		break;
}
?>