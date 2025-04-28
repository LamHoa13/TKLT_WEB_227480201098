<?php
    $server = "localhost";
    $dbname = "sinhvien";
    $username = "student";
    $password ="123456";
    // Kết nối database sinhvien
    $connect mysqli connect($server, $username, $password, $dbname);
    // Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
    if (!$connect) {
        die("Không kết nối :". mysqli_connect_error());
        exit();
    }
    // Khai báo giá trị ban đầu, khi chưa submit câu lệnh Select sẽ báo lỗi
    $hoten = "";

    // Lấy giá trị POST từ form vừa submit
    if ($_SERVER["REQUEST_METHOD"] = "POST") {
        if(isset($_POST["txtHoten"])) {
            $msv = $_POST['txtHoten'];
    }
    // Xử lý, Browse dữ liệu trong table danhsach
    $sql = "SELECT * FROM danhsach WHERE hoten=$hoten";
        if ($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)){
                    echo $row['msv'];
                    echo $row['hoten'];
                    echo $row['nganhhoc'];
                    echo $row['tongdiem'];
                }
        //Giải phóng bộ nhớ của biến
        mysqli_free_result($result);
        }
        else
        {
            echo "No Records";
        }
    }
}
// Đóng kết nối database
mysqli_close($connect);
?>