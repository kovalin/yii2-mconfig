<?php
/**
 * @author Anton Kovalin <9820498@gmail.com>
 */

use yii\db\Migration;

/**
 * Handles the creation of table `mconfig`.
 */
class m180625_101026_create_mconfig_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('mconfig', [
            'id' => $this->primaryKey(),
            'param' => $this->string(128)->notNull()->unique(),
            'val' => $this->text(),
            'default' => $this->text(),
            'label' => $this->string(255),
            'type' => $this->string(128),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('mconfig');
    }
}
