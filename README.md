# Laravel 11 將可識別個人身份的資訊進行監視

引入 neelkanthk 的 laravel-surveillance 套件來擴增對惡意用戶、IP 地址和匿名瀏覽器指紋進行監視，寫入監視日誌並判斷使用者是否允許訪問應用程式。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 執行 __Artisan__ 指令的 __surveillance:enable__ 來開啟監視。
```sh
$ php artisan surveillance:enable {fingerprint 數位指紋／ip IP 地址／userid 使用者編號}
```
- 執行 __Artisan__ 指令的 __surveillance:disable__ 來關閉監視。
```sh
$ php artisan surveillance:disable {fingerprint 數位指紋／ip IP 地址／userid 使用者編號}
```
- 執行 __Artisan__ 指令的 __surveillance:block__ 來阻擋訪問。
```sh
$ php artisan surveillance:block {fingerprint 數位指紋／ip IP 地址／userid 使用者編號}
```
- 執行 __Artisan__ 指令的 __surveillance:unblock__ 來開放訪問。
```sh
$ php artisan surveillance:unblock {fingerprint 數位指紋／ip IP 地址／userid 使用者編號}
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。

----

## 畫面截圖
![](https://i.imgur.com/brKU77b.png)
> 對特定 IP 地址開啟監視

![](https://i.imgur.com/W9fqM0D.png)
> 紀錄監視的條件

![](https://i.imgur.com/u0vCyH3.png)
> 紀錄監視特定 IP 地址的所有訪問
