##laravel-demo

Run the following commands inside the virtual server to setup the database & dummy data for the form to work

##DB MIGRATION
#Steps to Create tables using artisan commands
EG:
```
php artisan make:migration create_tasks_table --create=tasks
```
The migration file would be created inside the [database/migrations](https://github.com/rmshah989/laravel-demo/tree/master/database/migrations) folder

#Steps to generate the DUMMY data
EG: 
```
php artisan make:seeder UsersTableSeeder
```

The seeder file would be created inside the [database/seeds](https://github.com/rmshah989/laravel-demo/tree/master/database/seeds) folder

(The above commands is just for information purposes the application has all the migration & seeder files)

#STEP to create the tables
```
php artisan migrate
```
Following tables would be created in your database
- migrations
- password_resets
- users
- services
- subjectarea
- enquiry

