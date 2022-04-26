<?php

define('APP_NOTICE_DOMAIN', config('shop.app_notice_domain'));
define('NOT_FOUND', APP_NOTICE_DOMAIN . 'ERROR.NOT_FOUND');
define('NOT_AUTHORIZED', APP_NOTICE_DOMAIN . 'ERROR.NOT_AUTHORIZED');
define('NOT_A_FREE_PRODUCT', APP_NOTICE_DOMAIN . 'ERROR.NOT_A_FREE_PRODUCT');
define('SOMETHING_WENT_WRONG', APP_NOTICE_DOMAIN . 'ERROR.SOMETHING_WENT_WRONG');
define('PAYMENT_FAILED', APP_NOTICE_DOMAIN . 'ERROR.PAYMENT_FAILED');
define('SHOP_NOT_APPROVED', APP_NOTICE_DOMAIN . 'ERROR.SHOP_NOT_APPROVED');
define('INSUFFICIENT_BALANCE', APP_NOTICE_DOMAIN . 'ERROR.INSUFFICIENT_BALANCE');
define('INVALID_CREDENTIALS', APP_NOTICE_DOMAIN . 'ERROR.INVALID_CREDENTIALS');
define('EMAIL_SENT_SUCCESSFUL', APP_NOTICE_DOMAIN . 'MESSAGE.EMAIL_SENT_SUCCESSFUL');
define('PASSWORD_RESET_SUCCESSFUL', APP_NOTICE_DOMAIN . 'MESSAGE.PASSWORD_RESET_SUCCESSFUL');
define('INVALID_TOKEN', APP_NOTICE_DOMAIN . 'MESSAGE.INVALID_TOKEN');
define('TOKEN_IS_VALID', APP_NOTICE_DOMAIN . 'MESSAGE.TOKEN_IS_VALID');
define('CHECK_INBOX_FOR_PASSWORD_RESET_EMAIL', APP_NOTICE_DOMAIN . 'MESSAGE.CHECK_INBOX_FOR_PASSWORD_RESET_EMAIL');
define('ACTION_NOT_VALID', APP_NOTICE_DOMAIN . 'ERROR.ACTION_NOT_VALID');
define('PLEASE_LOGIN_USING_FACEBOOK_OR_GOOGLE', APP_NOTICE_DOMAIN . 'ERROR.PLEASE_LOGIN_USING_FACEBOOK_OR_GOOGLE');
define('WITHDRAW_MUST_BE_ATTACHED_TO_SHOP', APP_NOTICE_DOMAIN . 'ERROR.WITHDRAW_MUST_BE_ATTACHED_TO_SHOP');
define('OLD_PASSWORD_INCORRECT', APP_NOTICE_DOMAIN . 'MESSAGE.OLD_PASSWORD_INCORRECT');
define('OTP_SEND_FAIL', APP_NOTICE_DOMAIN . 'ERROR.OTP_SEND_FAIL');
define('OTP_SEND_SUCCESSFUL', APP_NOTICE_DOMAIN . 'MESSAGE.OTP_SEND_SUCCESSFUL');
define('REQUIRED_INFO_MISSING', APP_NOTICE_DOMAIN . 'MESSAGE.REQUIRED_INFO_MISSING');
define('CONTACT_UPDATE_SUCCESSFUL', APP_NOTICE_DOMAIN . 'MESSAGE.CONTACT_UPDATE_SUCCESSFUL');
define('INVALID_GATEWAY', APP_NOTICE_DOMAIN . 'ERROR.INVALID_GATEWAY');
define('OTP_VERIFICATION_FAILED', APP_NOTICE_DOMAIN . 'ERROR.OTP_VERIFICATION_FAILED');
define('CONTACT_UPDATE_FAILED', APP_NOTICE_DOMAIN . 'ERROR.CONTACT_UPDATE_FAILED');
define('ALREADY_REFUNDED', APP_NOTICE_DOMAIN . 'ERROR.ALREADY_REFUNDED');
define('ORDER_ALREADY_HAS_REFUND_REQUEST', APP_NOTICE_DOMAIN . 'ERROR.ORDER_ALREADY_HAS_REFUND_REQUEST');
define('REFUND_ONLY_ALLOWED_FOR_MAIN_ORDER', APP_NOTICE_DOMAIN . 'ERROR.REFUND_ONLY_ALLOWED_FOR_MAIN_ORDER');
define('WRONG_REFUND', APP_NOTICE_DOMAIN . 'ERROR.WRONG_REFUND');
define('CSV_NOT_FOUND', APP_NOTICE_DOMAIN . 'ERROR.CSV_NOT_FOUND');
define('USER_NOT_FOUND', APP_NOTICE_DOMAIN . 'ERROR.USER_NOT_FOUND');
define('TOKEN_NOT_FOUND', APP_NOTICE_DOMAIN . 'ERROR.TOKEN_NOT_FOUND');
