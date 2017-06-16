<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $post_id
 * @property string $post_title
 * @property string $post_description
 * @property integer $author_id
 * @property string $password
 * @property Comments[] $comments
 */
class Posts extends \yii\db\ActiveRecord
{
    public $password_repeat;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_title', 'post_description', 'author_id', 'password'], 'required'],
            [['post_description'], 'string'],
            [['author_id'], 'integer'],
            [['post_title', 'password'], 'string', 'max' => 100],
            
            ['password_repeat', 'required'],
            ['password', 'compare'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Post ID',
            'post_title' => 'Post Title',
            'post_description' => 'Post Description',
            'author_id' => 'Author ID',
            'password' => 'Password',
            'password_repeat' => 'Confirm Password',
        ];
    }
    
    /** 
    * @return \yii\db\ActiveQuery 
    */ 
   public function getComments() 
   { 
       return $this->hasMany(Comments::className(), ['post_id' => 'post_id']); 
   }
}
