### Laravel Basic

### Nội dung Bài 1

```
Giới thiệu lời mở đầu. Tạo sao lựa chọn Laravel.

```

### Nội dung Bài 8

```
Hướng dẫn tạo bảng cơ sở dữ liệu với migration. Truy vấn dữ liệu với Eloquent. Khái quát nhanh cơ bản không gian tên cho hàm và lớp (namespace) về quy trình làm việc theo mô hình MVC. 
```

### Nội dung Bài 9

```
Cấu trúc thư mục Laravel
- thư mục app: chứa nhưng code cốt lõi (core code) của ứng dụng.
- thư mục boootstrap: chứa những file khởi động của framework và những file cấu hình auto loading, route, và file cache.
- thư mục config: chứa tất cả các file cấu hình.
- thư mục database: chứa 2 thư mục migration (tạo và thao tác với database) và seeds(tạo dữ liệu mẫu).
- thư mục public: chứa file index.php (cổng đưa tất cả request vào project), ngoài ra còn chứ fiel css và javascript.
- resources: chứa file view.
- routes: chứa tất cả các điều khiển đường dẫn của ứng dụng (web.php, console.php, channels.php, api.php).
- storage: chứa những file sinh ra từ project (thư mục app), những file sinh ra từ framework và caches (thư mục framework), file logs, lưu trữ file hình ảnh người dùng (thư mục /storage/app/public).
- test: thư mục chứa file test, PHPUnit Test.
- vendor: chứa các thư viện composer.
- .env : chứa các config chính của Laravel.
- artisan: chưa tập lệnh php artisan của Laravel
- .gitattributes, .gitignore: file xử lí cho Git
- composer.json, composer.lock, composer-setup.php: File composer
- package.js: chứa các package cần dùng cho projects.
- webpack.mix.js: ile dùng để build các webpack.
```

### Nội dung Bài 14

```
Đơn giản hóa và tối ưu lại code. Thay vì CRUD 1 cách thủ công và dài dòng ta dùng đơn giản hóa lại từ Model. Hướng dẫn sử dụng Route::resource().
```

### Nội dung Bài 22

```
Khái niệm về Service Providers. Cách thức Laravel khởi tạo tất cả ứng dụng qua Service Providers .Thêm, đăng ký, khai báo 1 service providers qua thuộc tính bindings và singletons.

```

### Nội dung bài 28

```
   Hướng dẫn debug ứng dụng với package Laravel Telescope (composer require laravel/telescope --dev). Nắm bắt được các thông tin về các dữ liệu liên quan như truy vấn (Queries) và thời gian thực hiện (execute time) , lần truy cập bộ nhớ (cache), tất cả các yêu cầu HTTP đi vào ứng dụng (requests),....
```

### Nội dung Bài 31

```
   Tiếp cận, chiến lược tổ chức code.  
```
