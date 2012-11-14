<?php

namespace TestMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

class Version20121114140832 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->_addSql("ALTER TABLE test ADD  COLUMN citta VARCHAR(50) NOT NULL AFTER cognome ");

    }

    public function down(Schema $schema)
    {
        $this->_addSql("ALTER TABLE test DROP COLUMN citta ");

    }
}
