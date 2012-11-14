<?php

namespace TestMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

class Version20120721170322 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->_addSql("CREATE TABLE test_new_2 (id_new INT)");
//        $this->_addSql("ALTER TABLE test ADD  COLUMN citta VARCHAR(50) NOT NULL AFTER cognome ");
    }

    public function down(Schema $schema)
    {
//        $this->_addSql("ALTER TABLE test DROP COLUMN citta ");
        $this->_addSql("DROP TABLE test_new_2");
    }

}
