<?php

namespace TestMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

class Version20120721154223 extends AbstractMigration
{
    public function up(Schema $schema)
    {
	$this->_addSql("CREATE TABLE test_new (id_new INT)");
	$this->_addSql("ALTER TABLE test ADD  COLUMN cognome VARCHAR(50) NOT NULL AFTER nome ");
    }

    public function down(Schema $schema)
    {
	$this->_addSql("ALTER TABLE test DROP COLUMN cognome ");
	$this->_addSql("DROP TABLE test_new");
    }
}
