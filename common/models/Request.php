<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property string $name
 * @property string $second_name
 * @property string $surname
 * @property string $company
 * @property double $amount
 * @property string $method
 * @property double $lose
 * @property string $comment
 * @property int $is_invest
 * @property string $date
 * @property int $user_id
 *
 * @property User $user
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amount', 'lose', 'is_invest', 'name', 'second_name', 'surname', 'company', 'method', 'comment', 'date'], 'required'],
            [['amount', 'lose'], 'number'],
            [['is_invest', 'user_id'], 'integer'],
            [['date'], 'safe'],
            [['name', 'second_name', 'surname', 'company', 'method'], 'string', 'max' => 50],
            [['comment'], 'string', 'max' => 200],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('app', 'ID'),
            'name'          => Yii::t('app', 'Имя'),
            'second_name'   => Yii::t('app', 'Отчество'),
            'surname'       => Yii::t('app', 'Фамилия'),
            'company'       => Yii::t('app', 'Компания'),
            'amount'        => Yii::t('app', 'Суммы'),
            'method'        => Yii::t('app', 'Способ оплаты'),
            'lose'          => Yii::t('app', 'Сумма утраты'),
            'comment'       => Yii::t('app', 'Комментарий'),
            'is_invest'     => Yii::t('app', 'Были ли у вас подключены услуги инвестирования?'),
            'date'          => Yii::t('app', 'Дата'),
            'user_id'       => Yii::t('app', 'User ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
