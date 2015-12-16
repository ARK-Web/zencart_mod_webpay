# zencart_mod_webpay

Zen Cart WebPay決済モジュール
====

ark-web/zencart_mod_webpay - Zen Cartで動作するWebPay決済モジュールです。

この決済モジュールでは、通常課金にのみ対応します。定期課金対応は info@ark-web.jp までご相談ください。


### 動作環境
* PHP 5.4 以上必須
* WebPay提供のPHPライブラリ（Install 参照）


### 動作確認済環境：
* Zen Cart 1.3.0.2 jp8 UTF版
* Zen Cart 1.5.1   日本語版


### はじめかた
WebPay公式はこちら→ https://webpay.jp/

+ 1.WebPayへ登録 or ログインしてから
+ 2.「ユーザー設定」より、APIキーを控えておき
+ 3.Zen Cartの管理画面の「モジュール＞支払い」からWebPayモジュールを【インストール】してAPIキーの内容を設定して保存する。

（詳細は Install 参照）

![WebPayのAPIキーをZen CartのWebPayモジュールへ登録する](https://raw.github.com/wiki/ARK-Web/zencart_mod_webpay/images/setup.png)


## Install

**※ファイル・DBのバックアップを取っておくこと！**

+ 1.https://github.com/ark-web/zencart_mod_webpay/ にアクセスして【Download ZIP】でダウンロードします。
+ 2.zipを解凍して htdocs/includes/ 配下をZen Cartへアップロードします。
+ 3.composerを利用できる場合は3-1へ、利用できない場合は3-2に進みます。
+ 3-1.composerを利用してWebPayのPHPライブラリ(https://webpay.jp/docs/libraries#php )をインストールします。
  + htdocs/includes/modules/payment/ に composer.json が同梱されているのでそれを利用します。成功すると、vendorディレクトリが作られます。

  ```
	$ cd htdocs/includes/modules/payment/
	$ php composer.phar install
  ```

  ※WebPayのPHPライブラリについてのライセンス規約は vendor/webpay/webpay/README.md をご一読ください。
+ 3-2.WebPayのPHPライブラリ(https://webpay.jp/docs/libraries#php )からソースファイル群のzipファイルを落としてきて配置します。(webpay-php-full-2.2.2.zip については動作確認済みです)
  + htdocs/includes/modules/payment/ にダウンロードした webpay-php-full-2.2.2.zip をアップロード後、解凍して webpay-php-full とリネームします。

  ```
	$ unzip webpay-php-full-2.2.2.zip
	$ mv webpay-php-full-2.2.2 webpay-php-full
  ```

  ※WebPayのPHPライブラリについてのライセンス規約は webpay-php-full/webpay/webpay/README.md をご一読ください。
+ 4.Zen Cart管理画面にログインして「モジュール＞支払い＞WebPay クレジットカード決済」をインストールします。
+ 5.編集の「公開可能鍵」と「非公開鍵」を設定します。
  + WebPayにログインして「ユーザー設定」からAPIキーに書いてある内容を設定してください。
  その他、任意で「適用地域」「オーダーステータス」「表示の順番」を変更します。


## Licence

TBD


## Author

[ark-web](https://github.com/ark-web)

