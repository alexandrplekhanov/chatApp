<?php

/* @var $this yii\web\View */

use common\models\User;

$this->title = 'My Yii Application';
?>
<style>
    .admin {
        color: red;
    }
    .row {
        border: 6px solid green;
        padding: 20px;
    }
    .message {
        border: 2px solid #0f0f0f;
        padding: auto;
    }
    .blocked-message {
        background-color: #e4606d;
    }
</style>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <?php foreach ($messages  as $message) : ?>
                <div class="message">
                    <h2><?= User::findOneById($message->user_id)->username;?></h2>
                    <h5><?= $message->send_at?></h5>
                    <? if (User::findOneById($message->user_id)->is_admin == true) { ?>
                        <p class="admin"><?= $message->text ?> </p>
                    <? } elseif ($message->active == false) { ?>
                        <p class="blocked-message"><?= $message->text; }?> </p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
