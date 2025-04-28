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

    // Lấy giá trị POST từ form vừa submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["txtMsv"])) {
            $msv = $_POST["txtMsv"];
        }

        // Xử lý, Delete dữ liệu trong table danhsach
        $sql = "DELETE FROM danhsach WHERE msv='$msv'";
        if (mysqli_query($connect, $sql)) {
            echo "Xóa dữ liệu thành công";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($connect);
        }
    }
    // Đóng database
    mysqli_close($connect);
?>