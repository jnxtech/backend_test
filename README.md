ขั้นตอนการ Run project

1.Open VS Code แล้วcloneด้วยลิงค์นี้  https://github.com/jnxtech/backend_test.git

2.Open Terminal แล้วรันคำสั่ง  composer install

3.In Terminal รันคำสั่ง  cp .env.example .env

4.สร้างtable ใน phpmyadmin ชื่อ  cryptotradingplatform 

5.In Terminal รันคำสั่ง  php artisan migrate:fresh --seed


ERD 

![Team document](https://github.com/freyjns/backend_test/assets/118885560/1d77d9bb-6f7f-467d-9f7d-14a7dc7e29a6)
