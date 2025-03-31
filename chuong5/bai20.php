<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập thành viên</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .input-group {
            position: relative;
        }

        .input-group input {
            padding-right: 40px; /* Space for the icon */
        }

        .input-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: #aaa;
        }

        .password-toggle {
            cursor: pointer;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            display: block;
            margin-bottom: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .signup-link {
            text-align: center;
            color: #777;
        }

        .signup-link a {
            color: #007bff;
            text-decoration: none;
        }

        .signup-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Đăng nhập thành viên</h2>
        <form id="loginForm">
            <div class="form-group">
                <label for="email">Email name</label>
                <div class="input-group">
                    <input type="text" id="email" name="email" placeholder="@ blu.edu.vn">
                    <span class="input-icon">✉</span>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <input type="password" id="password" name="password">
                    <span class="input-icon password-toggle" onclick="togglePasswordVisibility()">👁</span>
                </div>
            </div>
            <div class="form-group">
                <label for="maso">Mã số</label>
                <input type="text" id="maso" name="maso">
            </div>
            <button type="button" onclick="login()">Đăng nhập</button>
            <button type="button">Đăng ký</button>
        </form>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
            const toggleIcon = document.querySelector(".password-toggle");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.textContent = "👁‍🗨";
            } else {
                passwordInput.type = "password";
                toggleIcon.textContent = "👁";
            }
        }

        function login() {
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const maso = document.getElementById("maso").value;

            // **Lưu ý quan trọng:**
            // Đoạn mã JavaScript này chỉ mô phỏng logic kiểm tra đăng nhập và
            // tạo cookie ở phía client. Trong một ứng dụng thực tế, bạn cần
            // thực hiện việc kiểm tra thông tin đăng nhập với dữ liệu trên
            // máy chủ (ví dụ: đọc từ file users.ini) và tạo cookie bảo mật
            // ở phía máy chủ sau khi xác thực thành công.

            // **Mô phỏng kiểm tra đăng nhập (chỉ ở client):**
            // Trong thực tế, bạn sẽ gửi dữ liệu này lên server để kiểm tra.
            if (email === "test@blu.edu.vn" && password === "123456" && maso === "BLU001") {
                // **Mô phỏng tạo cookie (chỉ ở client):**
                document.cookie = "loggedIn=true; max-age=" + (3 * 60); // Lưu cookie trong 3 phút (180 giây)
                alert("Đăng nhập thành công!");
                // Sau khi đăng nhập thành công, bạn có thể chuyển hướng người dùng đến trang khác.
                // window.location.href = "/dashboard.html";

                // Thiết lập tự động đăng xuất sau 3 phút
                setTimeout(logout, 3 * 60 * 1000);
            } else {
                alert("Thông tin đăng nhập không chính xác.");
            }
        }

        function logout() {
            // Xóa cookie bằng cách đặt max-age về 0
            document.cookie = "loggedIn=; max-age=0";
            alert("Đã tự động đăng xuất.");
            // Có thể chuyển hướng người dùng về trang đăng nhập
            // window.location.href = "/login.html";
        }

        // Kiểm tra cookie khi trang tải để duy trì đăng nhập (nếu có)
        function checkLoginStatus() {
            const cookies = document.cookie.split(';');
            for (let i = 0; i < cookies.length; i++) {
                let cookie = cookies[i].trim();
                if (cookie.startsWith("loggedIn=true")) {
                    // Người dùng đã đăng nhập, có thể thực hiện các hành động tương ứng
                    console.log("Người dùng vẫn đang đăng nhập.");
                    // Thiết lập lại thời gian tự động đăng xuất
                    setTimeout(logout, 3 * 60 * 1000);
                    return;
                }
            }
            console.log("Người dùng chưa đăng nhập hoặc đã hết phiên.");
        }

        // Gọi hàm kiểm tra trạng thái đăng nhập khi trang được tải
        window.onload = checkLoginStatus;
    </script>
</body>
</html>