/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });

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
        

$('.dropzone').html5imageupload();
        
         $('#uploadFile').Jcrop();
        
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


