<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 * Has foreign keys to the tables:
 *
 * - `posts`
 */
class m170617_181652_create_comments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->notNull(),
            'description' => $this->text()->notNull(),
            'post_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `post_id`
        $this->createIndex(
            'idx-comments-post_id',
            'comments',
            'post_id'
        );

        // add foreign key for table `posts`
        $this->addForeignKey(
            'fk-comments-post_id',
            'comments',
            'post_id',
            'posts',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `posts`
        $this->dropForeignKey(
            'fk-comments-post_id',
            'comments'
        );

        // drops index for column `post_id`
        $this->dropIndex(
            'idx-comments-post_id',
            'comments'
        );

        $this->dropTable('comments');
    }
}
