<?php
Yii::app()->user->logout();
$this->redirect(Yii::app()->controller->module->returnLogoutUrl);
