<?php
    ...
    $sql = "INSERT INTO danhsach values"('14TH01', 'Nguyễn Thị Lan', '12/08/2000', 'Tin học', '25.5');
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Mẫu tin đã được thêm.";
    }
    else {
        echo "Không được thêm";
    }
?>