function getBaseURL(){var e=location.href,t=e.substring(0,e.indexOf("/",14));if(-1!=t.indexOf("http://localhost")){var e=location.href,a=location.pathname,s=e.indexOf(a),n=e.indexOf("/",s+1);return e.substr(0,n)+"/"}return t+"/"}function selectFileWithKCFinder(e,t){window.KCFinder={callBack:function(a){document.getElementById(e).value=a,$("#"+t).show(),$("#"+t).fadeIn("fast").attr("src",a),window.KCFinder=null}},window.open(getBaseURL()+"js/kcfinder/browse.php?type=images","kcfinder_textbox","status=0, toolbar=0, location=0, menubar=0, directories=0, resizable=1, scrollbars=0, width=800, height=600"),""==$("#"+e).val()?$("#"+t).hide():$("#"+t).show()}function integratedCKEDITOR(e,t){if($("#"+e).length){CKEDITOR.replace(e,{height:t,language:"vi",format_tags:"p;h1;h2;h3;pre",filebrowserBrowseUrl:"http://localhost:8080/bdsbe/js/kcfinder/browse.php?type=files",filebrowserImageBrowseUrl:"http://localhost:8080/bdsbe/js/kcfinder/browse.php?type=images",filebrowserFlashBrowseUrl:"http://localhost:8080/bdsbe/js/kcfinder/browse.php?type=flash",filebrowserUploadUrl:"http://localhost:8080/bdsbe/js/kcfinder/upload.php?type=files",filebrowserImageUploadUrl:"http://localhost:8080/bdsbe/js/kcfinder/upload.php?type=images",filebrowserFlashUploadUrl:"http://localhost:8080/bdsbe/js/kcfinder/upload.php?type=flash",extraAllowedContent:"div"}).on("instanceReady",function(){this.dataProcessor.writer.selfClosingEnd=">";var e=CKEDITOR.dtd;for(var t in CKEDITOR.tools.extend({},e.$nonBodyContent,e.$block,e.$listItem,e.$tableContent))this.dataProcessor.writer.setRules(t,{indent:!0,breakBeforeOpen:!0,breakAfterOpen:!0,breakBeforeClose:!0,breakAfterClose:!0})})}}function integrateSearch(e,t){$("#"+e).click(function(){""!=$("#txtSearch").val().trim()&&$("#txtSearch").val().trim().replace(/ +(?= )/g,"")!=$("input[name='hdKeyword']").val()&&$("#"+t).submit()})}function isEmpty(e){return""!==e&&void 0!==e&&e.length>0&&null!==e}var token=$('meta[name="csrf-token"]').attr("content");$(".remove-image").click(function(){$(this).parent().remove()}),$(document).ready(function(){function e(){var e=new FormData($(this).get(0));e.append("email",$("#email").val()),e.append("password",$("#password").val()),$.ajax({type:"POST",url:getBaseURL()+"sml_login",dataType:"json",processData:!1,contentType:!1,data:e,success:function(e){e.success?window.location=getBaseURL()+"sml_admin/dashboard":($(".log-status").addClass("wrong-entry"),$(".alert").html("Đăng Nhập Thất Bại"),$(".alert").fadeIn(500),setTimeout("$('.alert').fadeOut(1500);",3e3))}})}function t(e){return""!==e&&void 0!==e&&e.length>0&&null!==e}var a=$("#email").val(),s=$("#password").val();console.log("First tbEmail"+a),console.log("First tbPass"+s),$(".log-btn").click(function(){var e=new FormData($(this).get(0));e.append("email",$("#email").val()),e.append("password",$("#password").val()),$.ajax({type:"POST",url:getBaseURL()+"sml_login",dataType:"json",processData:!1,contentType:!1,data:e,success:function(e){e.success?window.location=getBaseURL()+"sml_admin/dashboard":($(".log-status").addClass("wrong-entry"),$(".alert").html("Đăng Nhập Thất Bại"),$(".alert").fadeIn(500),setTimeout("$('.alert').fadeOut(1500);",3e3))}})}),$(".form-control").keypress(function(){$(".log-status").removeClass("wrong-entry")}),$("input#email[type=text]").on("keydown",function(a){var s=$("#email").val(),n=$("#password").val();if(13==a.which){if(a.preventDefault(),!t(s)||!t(n))return t(s)||$(".frm-email.log-status").addClass("wrong-entry"),t(n)||$(".frm-pass.log-status").addClass("wrong-entry"),$(".alert").html("Vui Lòng Nhập Đầy Đủ Thông Tin"),$(".alert").fadeIn(500),setTimeout("$('.alert').fadeOut(1500);",3e3),void setTimeout("$('.alert').fadeOut(1500);",3e3);e()}}),$("input#password[type=password]").on("keydown",function(a){var s=$("#email").val(),n=$("#password").val();if(13==a.which){if(a.preventDefault(),!t(s)||!t(n))return t(s)||$(".frm-email.log-status").addClass("wrong-entry"),t(n)||$(".frm-pass.log-status").addClass("wrong-entry"),$(".alert").html("Vui Lòng Nhập Đầy Đủ Thông Tin"),$(".alert").fadeIn(500),void setTimeout("$('.alert').fadeOut(1500);",3e3);e()}})});