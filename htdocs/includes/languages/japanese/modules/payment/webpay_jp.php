<?php
/**
 * webpay.jp 用決済モジュールの言語ファイル.
 *
 * @package languageDefines
 * @copyright Copyright 2015 ARK-Web co., ltd.
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: $
 */
//

define('MODULE_PAYMENT_WEBPAYJP_TEXT_TITLE', 'WebPay クレジットカード決済');
define('MODULE_PAYMENT_WEBPAYJP_TEXT_DESCRIPTION', 'webpay.jp 用クレジットカード決済の機能を提供します。<br>※PHP 5.4以上');

// フォーム系
define('MODULE_PAYMENT_WEBPAYJP_TEXT_INPUT_CARD_REMARK',   '下記のボタンからクレジットカード情報を入力してください。');


// エラー
define('MODULE_PAYMENT_WEBPAYJP_TEXT_ERROR_TOKEN', 'クレジットカード情報の入力データが不正です。再度クレジットカード情報を入力してください。');

define('MODULE_PAYMENT_WEBPAYJP_ERROR_LIBRARY_NOT_FOUND', 'WebPayのPHPライブラリが見つかりません。README.md からインストール方法を見直してください。');

define('MODULE_PAYMENT_WEBPAYJP_API_ERROR_BUYER',         '入力されたカード情報が間違っているか、カードの限度額に達してしまっている可能性があります。お手数ですがカード会社へお問い合わせください。');
define('MODULE_PAYMENT_WEBPAYJP_API_ERROR_INSUFFICIENT',  '現在システムが利用できません。他の決済方法を指定するかお問い合わせください。ご迷惑をお掛けしまして申し訳ございません。');
define('MODULE_PAYMENT_WEBPAYJP_API_ERROR_MISSING',       '注文データが不正です。注文が完了できているかはお問い合わせください。');
define('MODULE_PAYMENT_WEBPAYJP_API_ERROR_SERVICE',       '現在システムが利用できません。オンライン決済ASPが一時的に利用不能になっているようです。時間をあけて再度ご注文ください。');
define('MODULE_PAYMENT_WEBPAYJP_API_ERROR_UNKNOWN',       'レスポンスエラーが発生しました。他の決済方法を指定するかお問い合わせください。ご迷惑をお掛けしまして申し訳ございません。');
define('MODULE_PAYMENT_WEBPAYJP_API_ERROR_CONNECT_FAILD', '接続エラーが発生しました。オンライン決済ASPが一時的に利用不能になっているようです。時間をあけて再度ご注文ください。');
define('MODULE_PAYMENT_WEBPAYJP_API_ERROR_INVALID',       'システムエラーが発生しました。他の決済方法を指定するかお問い合わせください。ご迷惑をお掛けしまして申し訳ございません。');


// 最終確認画面
define('MODULE_PAYMENT_WEBPAYJP_TEXT_CARD_INFO', '決済トークン');

// 注文履歴のコメント
define('MODULE_PAYMENT_WEBPAYJP_TEXT_CHARGE_ID', 'WebPay 課金ID');
define('MODULE_PAYMENT_WEBPAYJP_TEXT_CHARGE_FINGERPRINT', 'カード情報識別ID');
define('MODULE_PAYMENT_WEBPAYJP_TEXT_CHARGE_MULTI_PRODUCT_ETC', ' etc.');

?>
