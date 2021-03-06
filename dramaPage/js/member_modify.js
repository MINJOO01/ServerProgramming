   function check_input()
   {
      if (!document.mem_form.pass.value)
      {
          alert("비밀번호를 입력하세요.");    
          document.mem_form.pass.focus();
          return;
      }

      if (!document.mem_form.pass_confirm.value)
      {
          alert("비밀번호확인을 입력하세요.");    
          document.mem_form.pass_confirm.focus();
          return;
      }

      if (!document.mem_form.nick.value)
      {
          alert("닉네임을 입력하세요.");    
          document.mem_form.nick.focus();
          return;
      }

      if (!document.mem_form.email1.value)
      {
          alert("이메일 주소를 입력하세요.");    
          document.mem_form.email1.focus();
          return;
      }

      if (!document.mem_form.email2.value)
      {
          alert("이메일 주소를 입력하세요.");    
          document.mem_form.email2.focus();
          return;
      }

      if (document.mem_form.pass.value != 
            document.mem_form.pass_confirm.value)
      {
          alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요.");
          document.mem_form.pass.focus();
          document.mem_form.pass.select();
          return;
      }

      document.mem_form.submit();
   }

   function reset_form()
   {
      document.mem_form.id.value = "";  
      document.mem_form.pass.value = "";
      document.mem_form.pass_confirm.value = "";
      document.mem_form.name.value = "";
      document.mem_form.email1.value = "";
      document.mem_form.email2.value = "";
	  
      document.mem_form.id.focus();

      return;
   }
