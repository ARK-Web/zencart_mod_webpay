# zencart_mod_webpay

Zen Cart WebPay���σ��W���[��
====

ark-web/zencart_mod_webpay - Zen Cart�œ��삷��WebPay���σ��W���[���ł��B

���̌��σ��W���[���ł́A�ʏ�ۋ��ɂ̂ݑΉ����܂��B����ۋ��Ή��� info@ark-web.jp �܂ł����k���������B


### �����
* PHP 5.4 �ȏ�K�{
* WebPay�񋟂�PHP���C�u�����iInstall �Q�Ɓj


### ����m�F�ϊ��F
* Zen Cart 1.3.0.2 jp8 UTF��
* Zen Cart 1.5.1   ���{���


### �͂��߂���
WebPay�����͂����灨 https://webpay.jp/

+ 1.WebPay�֓o�^ or ���O�C�����Ă���
+ 2.�u���[�U�[�ݒ�v���AAPI�L�[���T���Ă���
+ 3.Zen Cart�̊Ǘ���ʂ́u���W���[�����x�����v����WebPay���W���[�����y�C���X�g�[���z����API�L�[�̓��e��ݒ肵�ĕۑ�����B

�i�ڍׂ� Install �Q�Ɓj

![WebPay��API�L�[��Zen Cart��WebPay���W���[���֓o�^����](https://raw.github.com/wiki/ARK-Web/zencart_mod_webpay/images/setup.png)


## Install

**���t�@�C���EDB�̃o�b�N�A�b�v������Ă������ƁI**

+ 1.https://github.com/ARK-Web/zencart_mod_webpay/ �ɃA�N�Z�X���āyDownload ZIP�z�Ń_�E�����[�h���܂��B
+ 2.zip���𓀂��� htdocs/includes/ �z����Zen Cart�փA�b�v���[�h���܂��B
+ 3.composer�𗘗p�ł���ꍇ��3-1�ցA���p�ł��Ȃ��ꍇ��3-2�ɐi�݂܂��B
+ 3-1.composer�𗘗p����WebPay��PHP���C�u����(https://webpay.jp/docs/libraries#php)���C���X�g�[�����܂��B
  + htdocs/includes/modules/payment/ �� composer.json ����������Ă���̂ł���𗘗p���܂��B��������ƁAvendor�f�B���N�g��������܂��B

  ```
	$ cd htdocs/includes/modules/payment/
	$ php composer.phar install
  ```

  ��WebPay��PHP���C�u�����ɂ��Ẵ��C�Z���X�K��� vendor/webpay/webpay/README.md ������ǂ��������B
+ 3-2.WebPay��PHP���C�u����(https://webpay.jp/docs/libraries#php)����\�[�X�t�@�C���Q��zip�t�@�C���𗎂Ƃ��Ă��Ĕz�u���܂��B(webpay-php-full-2.2.2.zip �ɂ��Ă͓���m�F�ς݂ł�)
  + htdocs/includes/modules/payment/ �Ƀ_�E�����[�h���� webpay-php-full-2.2.2.zip ���A�b�v���[�h��A�𓀂��� webpay-php-full �ƃ��l�[�����܂��B

  ```
	$ unzip webpay-php-full-2.2.2.zip
	$ mv webpay-php-full-2.2.2 webpay-php-full
  ```

  ��WebPay��PHP���C�u�����ɂ��Ẵ��C�Z���X�K��� webpay-php-full/webpay/webpay/README.md ������ǂ��������B
+ 4.Zen Cart�Ǘ���ʂɃ��O�C�����āu���W���[�����x������WebPay �N���W�b�g�J�[�h���ρv���C���X�g�[�����܂��B
+ 5.�ҏW�́u���J�\���v�Ɓu����J���v��ݒ肵�܂��B
  + WebPay�Ƀ��O�C�����āu���[�U�[�ݒ�v����API�L�[�ɏ����Ă�����e��ݒ肵�Ă��������B
  ���̑��A�C�ӂŁu�K�p�n��v�u�I�[�_�[�X�e�[�^�X�v�u�\���̏��ԁv��ύX���܂��B


## Licence

TBD


## Author

[ark-web](https://github.com/ark-web)

