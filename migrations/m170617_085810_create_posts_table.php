<?php

use yii\db\Migration;

/**
 * Handles the creation of table `posts`.
 * Has foreign keys to the tables:
 *
 * - `users`
 */
class m170617_085810_create_posts_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('posts', [
            'id' => $this->primaryKey(),
            'title' => $this->string(100)->notNull(),
            'description' => $this->text()->notNull(),
            'author_id' => $this->integer()->notNull(),
        ]);

        // creates index for column `author_id`
        $this->createIndex(
            'idx-posts-author_id',
            'posts',
            'author_id'
        );

        // add foreign key for table `users`
        $this->addForeignKey(
            'fk-posts-author_id',
            'posts',
            'author_id',
            'users',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `users`
        $this->dropForeignKey(
            'fk-posts-author_id',
            'posts'
        );

        // drops index for column `author_id`
        $this->dropIndex(
            'idx-posts-author_id',
            'posts'
        );

        $this->dropTable('posts');
    }
}
