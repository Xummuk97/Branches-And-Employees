# Branches-And-Employees
Проект разработан на базе PHP фреймворка Laravel с использованием MySQL базы данных (phpMyAdmin, реляционная) и Boostrap.
Проект даёт возможность добавлять филиалы и сотрудников в них.

# Установка
- git clone https://github.com/Xummuk97/Branches-And-Employees.git
- cd Branches-And-Employees
- cp .env.example .env (Под Windows вместо cp использовать copy)
- Заполнить данные базы данных в файле .env
- composer install
- php artisan key:generate
- php artisan migrate
- php artisan serve
