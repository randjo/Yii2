<?php

use yii\db\Migration;

/**
 * Handles adding creator_id to table `comments`.
 * Has foreign keys to the tables:
 *
 * - `users`
 */
class m170617_224733_add_creator_id_column_to_comments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('comments', 'creator_id', $this->integer()->notNull());

        // creates index for column `creator_id`
        $this->createIndex(
            'idx-comments-creator_id',
            'comments',
            'creator_id'
        );

        // add foreign key for table `users`
        $this->addForeignKey(
            'fk-comments-creator_id',
            'comments',
            'creator_id',
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
            'fk-comments-creator_id',
            'comments'
        );

        // drops index for column `creator_id`
        $this->dropIndex(
            'idx-comments-creator_id',
            'comments'
        );

        $this->dropColumn('comments', 'creator_id');
    }
}
