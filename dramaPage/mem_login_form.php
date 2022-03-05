<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>드라마 게시판</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/login.css">
<script type="text/javascript" src="./js/login.js"></script>
</head>
<body> 
	<header>
    	<?php include "header.php";?>
    </header>
	<section>
		<div id="main_img_bar">
            <img src="./img/main_img.png">
        </div>
        <div id="main_content">
      		<div id="login_box">
	    		<div id="login_title">
		    		<span>로그인</span>
	    		</div>
	    		<div id="login_form">
          		<form  name="login_form" method="post" action="mem_login.php">		       	
                  	<ul>
                    <li><input type="text" name="id" placeholder="아이디" ></li>
                    <li><input type="password" id="pass" name="pass" placeholder="비밀번호" ></li> 
                  	</ul>
                  	<div id="login_btn">
					  <button>로그인</button>
                  	</div>		    	
           		</form>
        		</div> 
    		</div> 
        </div>
	</section> 
	<footer>
    	<?php include "footer.php";?>
    </footer>
</body>
</html>

