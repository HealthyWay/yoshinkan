<?php

class m130213_054432_create_users_table extends CDbMigration {

    public function up() 
    {
        $this->execute(
            "CREATE TABLE `Users` (
	`id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar(255) NOT NULL,
	`email` varchar(250) NOT NULL,
	`role` varchar(250) NOT NULL,
	`usrPass` varchar(250) NOT NULL,
        UNIQUE KEY `email` (`email`),
        KEY `role` (`role`),
        KEY `password` (`usrPass`)
        )
        ENGINE=InnoDB");
    }

    public function down() 
    {
        $this->dropTable('Users');
    }

    /*
      // Use safeUp/safeDown to do migration with transaction
      public function safeUp()
      {
      }

      public function safeDown()
      {
      }
     */
}