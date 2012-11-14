English
=============
Usage:

Generate a new migration
<code>./doctrine migration:generate</code>

Print migration status
<code>./doctrine migration:status</code>

Migrate to latest version
<code>./doctrine migration:migrate</code>

Rollback to previous version(n)
<code>./doctrine migration:migrate n</code>

Italian
=============
Semplice repository per provare l'utilizzo di doctrine migration

Comandi:

Generare la classe della versione attuale:
<code>php bin/doctrine-migrations.phar --db-configuration=config/migration-db.php --configuration=config/migrations.yml migration:generate</code>


Controllare lo stato:
<code>php bin/doctrine-migrations.phar --db-configuration=config/migration-db.php --configuration=config/migrations.yml migration:status</code>


Migrare alla nuova versione:
<code>php bin/doctrine-migrations.phar --db-configuration=config/migration-db.php --configuration=config/migrations.yml migration:migrate</code>


Rollback alla versione precedente:
<code>php bin/doctrine-migrations.phar --db-configuration=config/migration-db.php --configuration=config/migrations.yml migration:migrate 0</code>


Documentazione:
http://docs.doctrine-project.org/projects/doctrine-migrations/en/latest/index.html
