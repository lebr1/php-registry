# php-registry
Another PHP implementation of the registry pattern

# Installation

## By [Packagist](https://packagist.org/packages/lebr1/php-registry)

```
cd <your project>
composer require 'lebr1/php-registry:dev-master'
```

# Usage

```
$registry = Lebr1\Registry\ArrayRegistry::getInstance();
$registry->set('person','John Doe');
$person = $registry->get('person');
if ($registry->has('person')) {
   ...
}
```