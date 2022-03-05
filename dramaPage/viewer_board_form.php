<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>드라마 홈페이지</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/viewer.css">
<script>
  function check_input() {
      if (!document.board_form.subject.value)
      {
          alert("제목을 입력하세요.");
          document.board_form.subject.focus();
          return;
      }
      if (!document.board_form.content.value)
      {
          alert("내용을 입력하세요.");    
          document.board_form.content.focus();
          return;
      }
      document.board_form.submit();
   }
</script>
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
	<div id="main_img_bar">
        <img src="./img/main_img.png">
    </div>
   	<div id="board_box">
	    <h3 id="board_title">
	    		시청자 게시판 > 글 쓰기
		</h3>
	    <form  name="board_form" method="post" action="viewer_board_insert.php" enctype="multipart/form-data">
	    	 <ul id="board_form">
				<li>
					<span class="col1">닉네임 : </span>
					<span class="col2"><?=$usernick?></span>
				</li>		
	    		<li>
	    			<span class="col1">제목 : </span>
	    			<span class="col2"><input name="subject" type="text"></span>
	    		</li>	    	
	    		<li id="text_area">	
	    			<span class="col1">내용 : </span>
	    			<span class="col2">
	    				<textarea name="content"></textarea>
	    			</span>
	    		</li>
	    	    </ul>
	    	<ul class="buttons">
				<li><button type="button" onclick="check_input()">완료</button></li>
				<li><button type="button" onclick="location.href='viewer_board_list.php'">목록</button></li>
			</ul>
	    </form>
	</div>
</section> 
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
