Переделка тестового задания http://c90814qu.beget.tech/
Система учета и планирования отпусков сотрудников

Установка

composer install
vendor/bin/phinx init

Прописать в phinx.yml данные для доступа к БД

Миграции

/vendor/bin/phinx create MyMigrationName - создание
/vendor/bin/phinx migrate - выполнить миграцию