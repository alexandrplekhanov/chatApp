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
        border-radius: 10px;
        padding: 20px;
        background-color: #9acfea;
    }
    .message {
        border: 2px solid #0f0f0f;
        border-radius: 5px;
        padding: 10px;
    }
    .blocked-message {
        background-color: #e4606d;
    }
    span {
        font-size: 25px;
        background-color: white;
    }
    p {
        font message-box;
    }
</style>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <?php foreach ($messages  as $message) : ?>
                <div class="message">
                    <h5>
                        <span><?= User::findOneById($message->user_id)->username;?></span>
                        <?= $message->send_at?>
                    </h5>
                    <? if (User::findOneById($message->user_id)->is_admin == true) { ?>
                        <p class="admin"><?= $message->text ?> </p>
                    <? } elseif ($message->active == false) { ?>
                        <p class="blocked-message"><?= $message->text; }?> </p>
                </div><br>
            <?php endforeach; ?>
        </div>
    </div>
</div>
