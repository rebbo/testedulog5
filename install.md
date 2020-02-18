 composer create-project symfony/website-skeleton edulog
 
 Installation de doctrine
 
 composer require symfony/orm-pack
 
 composer require --dev symfony/maker-bundle
 php ../composer.phar require symfony/orm-pack
 php bin/console make:entity
 php bin/console make:migration
 php bin/console doctrine:migrations:migrate
 php ./composer.phar require symfony/form