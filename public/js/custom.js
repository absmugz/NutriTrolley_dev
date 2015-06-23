/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
        
        $('.selectpicker').selectpicker();
        
$('#upload_file').submit(function(e) {
      e.preventDefault();
      $.ajaxFileUpload({
         url         :'./membership/upload_file/', 
         secureuri      :false,
         fileElementId  :'userfile',
         dataType    : 'json',
         data        : {
            'title'           : $('#title').val()
         },
         success  : function (data, status)
         {
            if(data.status != 'error')
            {
               $('#files').html('<p>Reloading files...</p>');
               refresh_files();
               $('#title').val('');
            }
            alert(data.msg);
         }
      });
      return false;
   });
});


