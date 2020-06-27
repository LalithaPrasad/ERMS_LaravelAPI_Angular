This is the mini-project Employee Record Management System using Lalravel API
and Angular-CLI 9. Angular app is provided in a separate directory only for
purposes of perusal. It was built using the command

    ng build 

and the resulting contents of dist folder were integrated into Laravel app.

Currently the app is configured to run with a sqlite database. To create
a database, first create the database file with the command

    touch <db_file name>

in the database folder. Then provide the absolute path to the db_file in .env
file for the parameter DB_DATABASE. Now run the command

    php artisan migrate

To run the app, issue the following command

    php artisan serve

and interact through the browser.

Good luck!
