## Getting Started

This project includes all the confuguration for the backend server like, php, mysql, nginx, symfony and all these are run with docker-compose file.

In order to run this project successfully, please follow the following steps

## Steps to follow

1. Go to php/Dockerfile and replace the last two lines `you@example.com` and `Your Name` with
   your email and name for git configuration.

2. Next run `docker-compose up -d --build` command.

3. Run `docker-compose exec php /bin/bash` to access php docker shell

4. Run `composer install`

5. Than copy `cp .env .env.local`

6. Replace `# DATABASE_URL="mysql://db_user:db_password@127.0.0.1:3306/db_name?serverVersion=5.7"` with `DATABASE_URL="mysql://junaid:password@mysql_database:3306/symfony_docker_assignment?serverVersion=5.7"` line.

7. Run `symfony console doctrine:migrations:migrate` to run migrations.

8. Run `symfony console doctrine:fixtures:load` to seet the database.
