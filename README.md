# Laravel-Ecomm Fashe

## 網站簡介
利用 Laravel 和 Bootstrap 實作一個購物電商網站，其購物主題為家具
* 請在終端機執行以下指令，clone專案並創立所有假資料以供瀏覽使用
  
  1.git clone https://github.com/hawuyi/Laravel-Ecommerce-FurnitureStore.git
  
  2.composer install         (安裝該專案的PHP套件)
  
  3.cp .env.example .env      (進行環境的設定)
  
  4.php artisan key:generate  (產生一組key以供部分加密使用)
  
  5.php artisan migrate       (資料庫遷移)
  
  6.php artisan db:seed       (假資料創建)

> 管理員（ Admin ）<BR>
> Email: john@gmail.com <BR>
> Password: 123456 <BR>

## 主要功能
* 用戶
	* 註冊、登入、登出	
* 管理後台
	* 商品管理(顏色、種類、敘述、圖片)
	* 訂單管理 (訂單狀態更改)
* 商品
	* 每個商品可以有多種顏色
	* 用戶端商品列表、詳情頁面
    * 購物車、願望清單計數  
	* 收藏商品、取消收藏
* 購物車與訂單
	* 將商品加入購物車
	* 購物車商品列表
	* 移除商品
	* 商品結帳
    * 結帳訂購者資料頁面

## 運用技術
    1. PHP
    2. Laravel Framework 開發
    3. MySQL 管理資料庫
    4. Bootstrap  
    5. Node.js
***
### 專案截圖
![](https://i.imgur.com/QfYxZ1x.png)
![](https://i.imgur.com/UH5iE6V.png)
![](https://i.imgur.com/9jRrBSP.png)
![](https://i.imgur.com/bYmlTaK.png)
![](https://i.imgur.com/xyUKoQA.png)
![](https://i.imgur.com/butkwL9.png)
![](https://i.imgur.com/Qa60Lda.png)
![](https://i.imgur.com/RM8zrWA.png)
