<?php

namespace TestMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

class Version20121114135042 extends AbstractMigration
{
    public function up(Schema $schema)
    {
	$this->_addSql("CREATE TABLE test (nome INT)");
    }

    public function down(Schema $schema)
    {
        $this->_addSql("DROP TALE test ");
    }
}
