<?php
    ...
    $sql = "DELETE FROM danhsach WHERE msv = '14TH01'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Xoá thành công";
    }
    else {
        echo "Xoá thất bại";
    }
?>