<?php
    $username = "student";     // Khai báo username
    $password = "123456";      // Khai báo password
    $server   = "localhost";   // Khai báo server
    $dbname   = "sinhvien";    // Khai báo database

    // Kết nối database sinhvien
    $connect = mysqli_connect($server, $username, $password, $dbname);

    // Nếu kết nối bị lỗi thì xuất báo lỗi và thoát
    if (!$connect) {
        die("Không kết nối: " . mysqli_connect_error());
        exit();
    }

    // Khai báo giá trị ban đầu, khi chưa submit câu lệnh Update sẽ báo lỗi
    $msv = "";
    $hoten = "";

    // Lấy giá trị POST từ form vừa submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["txtMsv"])) {
            $msv = $_POST["txtMsv"];
        }
        if (isset($_POST["txtHoten"])) {
            $hoten = $_POST["txtHoten"];
        }

        // Xử lý, Update dữ liệu trong table danhsach
        $sql = "UPDATE danhsach SET hoten= '$hoten' WHERE msv='$msv'";
        if (mysqli_query($connect, $sql)) {
            echo "Cập nhật dữ liệu thành công";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
    }

    // Đóng database
    mysqli_close($connect);
?>