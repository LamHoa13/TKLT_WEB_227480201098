<?php
    $username = "student"; // Khai báo username
    $password = "123456"; // Khai báo password
    $server = "localhost"; // Khai báo server
    $dbname = "sinhvien"; // Khai báo database

    // Kết nối database sinhvien
    $connect mysqli_connect($server, $username, $password, $dbname);

    // Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
    if (!$connect) {
        die("Không kết nối :". mysqli_connect_error());
        exit();
    }

    // Khai báo giá trị ban đầu, khi chưa submit câu lệnh Insert sẽ bảo lỗi
    $msv = "";
    $hoten = "";
    $nganhhoc = "";
    $tongdiem = "";

    // Lấy giá trị POST từ form vừa submit
    if ($ SERVER["REQUEST_METHOD"] = "POST") {
        if(isset($_POST["txtMsv"])) {
            $msv = $_POST['txtMsv'];
        }
        if(isset($_POST["txtHoten"])) {
            $hoten = $_POST['txtHoten'];
            
        if(isset($_POST["txtNganhhoc"])) {
            $nganhhoc=$_POST["txtNganhhoc"];    
        } 
        if(isset($_POST["txtTongdiem"])) {
            $tongdiem = $_POST['txtTongdiem'];
        }
    // Xử lý, Insert dữ liệu vào table danhsach
        $sql = "INSERT INTO danhsach (msv, hoten, nganhhoc, tongdiem)
        VALUES ('$msv', '$hoten', '$nganhoc', '$tongdiem')";
        if (mysqli_query($connect, $sql)) {    
            echo "Thêm dữ liệu thành công";
        } else {
            echo "Error: ".$sql. "<br>". mysqli_error($connect);
            }
        }
        // Đóng kết nối database
        ysqli_close($connect);
?>
            
            