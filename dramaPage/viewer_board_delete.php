<?php

    $num = $_GET["num"];
    $page = $_GET["page"];

    $con = mysqli_connect("localhost", "root", "", "dramaproject");
    $sql = "select * from board where num = $num";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $sql = "delete from board where num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = 'viewer_board_list.php?page=$page';
	     </script>
	   ";
?>
