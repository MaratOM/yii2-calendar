<?php

use yii\db\Migration;

class m160302_104556_create_clndr_calendar extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE IF NOT EXISTS `clndr_calendar` (
              `id` INT NOT NULL AUTO_INCREMENT,
              `text` TEXT NOT NULL,
              `creator` INT NOT NULL,
              `date_event` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
              PRIMARY KEY (`id`),
              INDEX `fk_evrnt_note_1_idx` (`creator` ASC),
              CONSTRAINT `fk_evrnt_note_1`
                FOREIGN KEY (`creator`)
                REFERENCES `clndr_user` (`id`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB CHARACTER SET UTF8
        ");
    }

    public function down()
    {
        $this->execute("
            DROP TABLE IF EXISTS `clndr_calendar`
        ");
    }
}
