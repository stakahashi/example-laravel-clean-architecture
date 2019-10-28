# Example Laravel Clean Architecture

## Get Started

### Install

```
$ git clone https://github.com/stakahashi/example-laravel-clean-architecture.git
$ cd example-laravel-clean-architecture; composer install
```

### .env

```
#DB_CONNECTION=mysql
#DB_HOST=127.0.0.1
#DB_PORT=3306
#DB_DATABASE=homestead
#DB_USERNAME=homestead
#DB_PASSWORD=secret
DB_CONNECTION=sqlite
```

### Database Configuration

```
$ touch database/database.sqlite
$ ./artisan migrate --seed
```

### Run

```
$ ./artisan serve
```

## Changed

```
app/
├── Entities
│   └── User.php
├── Http
│   ├── Controllers
│   │   ├── Controller.php
│   │   └── UsersController.php
│   ├── Kernel.php
├── Providers
│   ├── RepositoryServiceProvider.php
├── Repositories
│   ├── UserRepository.php
│   └── UserRepositoryInterface.php
└── UseCases
    └── User
        ├── GetAllUser.php
        └── SaveUser.php
```
