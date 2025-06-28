環境構築

Docker ビルド
1. git clone <https://github.com/pokimaru3/-Tokaji-Suzuka--kadai1.git>
2. DockerDesktopアプリを立ち上げる
3. docker-compose up -d --build
   
Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. 「.env.example」ファイルをコピーして「.env」を作成し、DBの設定を変更
DB_HOST=mysql
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass

1. アプリケーションキーの作成
php artisan key:generate

1. マイグレーションの実行
php artisan migrate

1. シーディングの実行
php artisan db:seed

ER図　（未）

URL

* 開発環境：http://localhost/
* phpMyAdmin:：http://localhost:8080/
