<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        .container{
            margin: 0 auto;
            width: 600px;
            text-align: center;
        }
        table{
            border-collapse: collapse;
        }
        tr,th,td{
            border: 1px solid #CDCDCD;
            padding:10px 20px;
        }
    </style>
</head>
<?php
    $customerList = array(
        "1" => array("ten" => "Phạm Văn Huy",
                    "ngaysinh" => "1994-05-11",
                    "diachi" => "An Tiến-An Lão-HP",
                    "anh" => "images/nvhoathinh.png"
            ),
        "2" => array("ten" => "Hồ Ngọc Hà",
                    "ngaysinh" => "1966-05-11",
                    "diachi" => "Hồ Chí Minh City",
                    "anh" => "images/matcuoi.jpg"
            ),
        "3" => array("ten" => "Hồ Hoài Anh",
            "ngaysinh" => "1994-12-01",
            "diachi" => "Hà Nội City",
            "anh" => "images/tamcam.jpg"
        ),
        "4" => array("ten" => "Hồ Quang Hiếu",
            "ngaysinh" => "1956-10-03",
            "diachi" => "Hồ Chí Minh City",
            "anh" => "images/matcuoi.jpg"
        )
    );

    function searchByValues($customerList,$fromDate,$toDate){
      $flag = 0;
      foreach ($customerList as $customer){
          $dateValues = $customer["ngaysinh"];
          if($dateValues >= $fromDate && $dateValues <= $toDate){
              echo "<tr>";
              echo "<td>".$customer['ten']."</td>";
              echo "<td>".$customer['ngaysinh']."</td>";
              echo "<td>".$customer['diachi']."</td>";
              echo "<td><img src=".$customer['anh']." width='50px'></td>";
              echo "</tr>";
              $flag = 1;
          }
      }
        if($flag == 0){
            echo "Không tìm thấy kết quả phù hợp";
        }
    }
?>
<body>
    <div class="container">
        <h3>Danh sách khách hàng</h3>
        <table>
            <tr>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Ảnh đại diện</th>
            </tr>
            <?php foreach ($GLOBALS['customerList'] as $customer):?>
                <tr>
                    <td><?=$customer['ten'];?></td>
                    <td><?=$customer['ngaysinh'];?></td>
                    <td><?=$customer['diachi'];?></td>
                    <td><img src="<?=$customer['anh'];?>" width="50px"></td>
                </tr>
            <?php endforeach;?>
        </table>
        <br><br><br>
        <h4><T></T>ìm kiếm theo ngày sinh</h4>
        <form method="get" action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>">
            From :
            <input type="text" placeholder="yyyy-mm-dd" name="fromDate">
            To :
            <input type="text" placeholder="yyyy-mm-dd" name="toDate">
            <input type="submit" value="Search">

        </form>
        <br>
        <table>
            <tr>
                <th>Tên</th>
                <th>Ngày sinh</th>
                <th>Địa chỉ</th>
                <th>Ảnh đại diện</th>
            </tr>
            <?php
            if($_SERVER["REQUEST_METHOD"] == "GET"){
                $fromDate = $_GET['fromDate'];
                $toDate = $_GET['toDate'];
            }
            searchByValues($GLOBALS['customerList'],$fromDate,$toDate);
            ?>
        </table>

    </div>
</body>
</html>