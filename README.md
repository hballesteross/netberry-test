# pasos para la instalacion

#1 git clone https://github.com/hballesteross/netberry-test.git
#2 cd netberry-test
#3 composer install
#4 cp .env.example .env
#5 php artisan key:generate
#6 php artisan migrate:fresh --seed
#7 php artisan serve