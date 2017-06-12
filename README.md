# ORCHEXTRA-CLIENT-PHP 

SDK para consumo de servicios de Autenticación de Orchextra-Client

## Instalación por composer

```
composer require emmelaineglz/orchextra-client-php
```

## Ejemplo de uso

```php
require "vendor/autoload.php";
use Gigigo\Orchextra\Auth;
```
## Instanciamos la clase

```php
$auth = new Auth();
```

## Hacemos referencia al método de Autentucación del Cliente y llamamos a los metodos que devuelven el Token y el tiempo de Expirado.

```php
$client = $auth->authClient('qwerty', 'qwerty');
echo $auth->getToken();
echo $auth->getExpiresIn();
```

## Para el login del Usuario, hacemos referencia el método de Autenticación del Usuario, y llamamos a los métodos que devuelven la información completa del Usuario.

```php
$user = $auth->loginUser('user1', '123456');
echo $user->getEmail();
echo $user->getName();
echo $user->getUsername();
```
