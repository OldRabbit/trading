<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $second_name
 * @property string $address
 * @property string $passport
 * @property string $inn
 * @property int $card
 * @property string $duration
 * @property string $cvv
 * @property int $user_id
 *
 * @property User $user
 */
class Profile extends \yii\db\ActiveRecord
{
    public $duration1, $duration2;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['card', 'user_id', 'name', 'surname', 'second_name', 'address', 'passport', 'inn', 'cvv', 'duration'], 'required'],
            [['card', 'user_id', 'cvv'], 'integer'],
            [['name', 'surname', 'second_name'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 100],
            [['passport', 'inn'], 'string', 'max' => 200],
            [['duration'], 'string', 'max' => 6],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['duration1', 'duration2'], 'safe'],
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
            'address'       => Yii::t('app', 'Адрес'),
            'passport'      => Yii::t('app', 'Серия и номер паспорта'),
            'inn'           => Yii::t('app', 'ИНН'),
            'card'          => Yii::t('app', 'Номер карты'),
            'duration'      => Yii::t('app', 'Срок действия'),
            'duration1'     => Yii::t('app', 'Срок действия'),
            'cvv'           => Yii::t('app', 'CVV'),
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

    static function getProfileOrCreate()
    {
        $model = Profile::find()->where(['user_id' => Yii::$app->user->identity->id])->one();
        return $model !== null ? $model : new Profile();
    }
}
