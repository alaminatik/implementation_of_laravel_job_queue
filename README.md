## implementation of laravel queue job, Integration with Laravel 10

## Clone this repo
```
https://github.com/alaminatik/implementation_of_laravel_job_queue
```

## Install composer packages
```
$ cd implementation_of_laravel_job_queue
$ composer install
```

## Create and setup .env file
```
make a copy of .env.example and rename to .env
$ copy .env.example .env
$ php artisan key:generate
put database credentials in .env file

Then put email credentials in .env file for email send to user

Now we will make configuration on queue driver so first of all, we will set queue driver "database". You can set as you want also we will define driver as redis too. So here define database driver on ".env" file.

QUEUE_CONNECTION=database
```

## Migrate and insert records
```
$ php artisan migrate

Next Update the run function of seeder file to 10000.

Then Run the command below to seed the data this will genarate 10000 users fake data in users table
php artisan db:seed

```

##  Run Final Artisan command 
```
Laravel includes an Artisan command that will start a queue worker and process new jobs as they are pushed onto the queue. You may run the worker using the below Artisan command.

$php artisan queue:work

Alternatively, you may run the queue:listen command. When using the queue:listen command, you don’t have to manually restart the worker when you want to reload your updated code or reset the application state. 

$php artisan queue:listen


Now you can run project using bellow command:

php artisan serve


Lets Test
```


Please visit my website.
[alaminmia.com](https://alaminmia.com) 
