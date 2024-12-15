## Коммерческий проект Alfa Industry

Уникальный проект, написанный с нуля на современном стеке технологий с 
использованием лучших практик в разработке. Проект реализовывался в 
свободное от работы время.

## Стек технологий

#### Frontend: 
- HTML 
- CSS 
- SCSS
- Tailwind CSS
- Laravel Blade

#### Backend: 
- Laravel
- Eloquent
- Redis
- Milisearch
- Docker


## Развертывание и Deployment
### Требования
- Docker и Docker Compose
- Node.js и npm
### Установка и настройка
##### 1)  Запустить Docker
##### 2) Склонировать репозиторий 
```
git clone https://github.com/GGermanBoldyrev/alfa-industry.git
```
##### 3) Перейти в папку со склонированным проектом
```
cd alfa-industry
```
##### 4) Настроить .env файл
``` 
Установить CACHE_STORE=redis 
```
###### По умолчанию ключи redis будут сохраняться в таблицу с номером 1
##### 5) Запустить frontend 
```
npm run dev
```
##### 6) Запустить docker контейнеры 
```
./vendor/bin/sail up
```
##### 7) Выполнить миграции 
```
./vendor/bin/sail artisan migrate
```
##### 8) Запустить seeders 
```
./vendor/bin/sail artisan db:seed 
```
##### 9) Открыть localhost в браузере 
###### По умолчанию используется порт 80.
