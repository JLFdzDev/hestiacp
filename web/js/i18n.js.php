<?php
header("Content-Type: text/javascript");
session_start();

require_once($_SERVER['DOCUMENT_ROOT'].'/inc/i18n.php');

if (empty($_SESSION['language'])) {
    //$_SESSION['language'] = detect_user_language();
}
?>

App.i18n.ARE_YOU_SURE                           = '<?=_('Are you sure?')?>';
App.Constants.UNLIM_TRANSLATED_VALUE            = '<?=_('unlimited')?>';
App.Constants.NOTIFICATIONS_EMPTY               = '<?=_('no notifications')?>';
