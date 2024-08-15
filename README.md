# Rese
###### 概要:飲食店予約アプリ
<img src="https://github.com/user-attachments/assets/41964cd4-41d8-4635-a247-3660c737192a" width="100">

## 作成目的
###### 自社の飲食店予約サービスを持ちたい

## アプリケーションURL
###### 開発環境：http://localhost/
###### phpMyAdmin:http://localhost:8080

## 他のリポジトリ
###### なし

## 機能一覧
###### 会員登録：ユーザー登録機能。メールによる本人確認。
###### ログイン：メールアドレスとパスワードによる認証機能。
###### ログアウト：ログアウト機能。
###### ユーザー情報取得
###### ユーザーお気に入り店舗一覧取得
###### ユーザー店舗予約情報取得
###### 店舗一覧取得
###### 店舗詳細取得
###### お気に入り店舗追加
###### お気に入り店舗削除
###### 店舗予約情報追加
###### 店舗予約情報削除
###### エリア検索機能
###### ジャンル検索機能
###### 店名検索機能

## 使用技術
###### Docker version 26.1.1
###### Docker Compose version v2.27.0
###### nginx 1.21.1
###### PHP 7.4.9
###### Laravel 8.83.8
###### fortify 1.19
###### MySQL 8.0.26
###### MailHog

## テーブル設計
![Table_design](https://github.com/user-attachments/assets/7eb83b45-cbed-4f81-9d70-51f81db72245) width

## ER図
![ER](https://github.com/user-attachments/assets/f5fc6b97-d105-42d8-8177-1bcd56368654)
   
## 環境構築
###### Dockerビルド
###### 1. git clone git@github.com:TsuneoHakoyama/Rese.git
###### 2. docker compose up -d --build 
###### 
###### Laravel環境構築
###### 1. docker compose exec php bash
###### 2. composer install
###### 3. cp .env.develop .env
###### 4. php artisan key:generate
###### 4. php artisan migrate --seed
###### 5. composer require laravel/fortify
###### 6. php artisan vendor:publish --provider="Laravel\Fortify\FortifyServiceProvider"
