<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contacts}}`.
 */
class m200417_072149_create_contacts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contacts}}', [
            `contact_id` INT NOT NULL AUTO_INCREMENT,
	`contact_user` INT NOT NULL,
	`all_phones` JSON NOT NULL,
	`contact_name` VARCHAR(50) NULL,
	`contact_surname` VARCHAR(50) NULL,
	PRIMARY KEY (`id`),
	COLLATE='utf8_general_ci';
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contacts}}');
    }
}
