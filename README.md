# wow-news
simple News Web Application using php 7.4

## Setup
1. create db and add configurations in `config\app.json`
   ```json
        {
            "db": {
                "host": "127.0.0.1",
                "name": "news_db",
                "user": "root",
                "password": "root",
                "charset": "utf8"
            }
        }
    ```
2. migrate
    #### in project root:
    ```shell
    php migrate.php
    ```
3. seed db
    #### in project root:
    ```shell
    php seed.php
    ```
    > seeding is using `tebazil/db-seeder`