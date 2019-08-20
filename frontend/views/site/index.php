<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
           <div class="col-sm-12 col-md-4">
               <div class="main-container">
                   <div class="user-info-block">
                       <div class="user-name">
                           <h3><?= Yii::$app->user->identity->username ?></h3>
                           <div class="type">
                               <p class="type-text">
                                   <?= Yii::t('app', 'Клиент') ?>
                               </p>
                           </div>
                       </div>
                       <hr>
                       <div class="flex">
                           <div class="balance-text main-text bold"><?= Yii::t('app', 'Баланс') ?></div>
                           <div class="margin-auto-left balance-amount main-color bold">$<?= Yii::$app->user->identity->balance ?></div>
                       </div>
                       <hr>
                       <div class="flex">
                           <div class="verify-text main-text bold"><?= Yii::t('app', 'Статус верификации') ?></div>
                           <div class="margin-auto-left verify-status main-color bold"><?= Yii::$app->user->identity->is_verify == 1 ? Yii::t('app', 'Верифицирован') : Yii::t('app', 'Не верифицирован') ?></div>
                       </div>
                       <hr>
                       <button class="btn btn-success full-width"><?= Yii::t('app', 'Вывод') ?></button>
                   </div>
               </div>
               <div class="main-container padding-0">
                   <div class="user-info-block">
                       <div class="info-title">
                           <h4><?= Yii::t('app', 'Информация об аккаунта') ?></h4>
                       </div>
                       <div class="info-main info-padding">
                           <div class="info-email bold">
                               <i class="fa fa-book" aria-hidden="true"></i> <?= Yii::t('app', 'Ваш email') ?>
                           </div>
                           <div class="info-email-value">
                               <?= Yii::$app->user->identity->email ?>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-sm-12 col-md-8">
               <ul class="nav nav-tabs" id="myTab" role="tablist">
                 <li class="nav-item active">
                   <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?= Yii::t('app', 'Создать заявку') ?></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?= Yii::t('app', 'Транзакции') ?></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><?= Yii::t('app', 'Верификация') ?></a>
                 </li>
               </ul>
               <div class="tab-content" id="myTabContent">
                 <div class="tab-pane fade show active in" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <?= $this->render('_item1', ['model' => $request]) ?>
                 </div>
                 <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <?= $this->render('_item2', ['model' => $transaction]) ?>
                </div>
                 <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <?= $this->render('_item3', ['model' => $profile]) ?>
                        
                    </div>
               </div>
           </div>
        </div>

    </div>
</div>
