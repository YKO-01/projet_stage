<!-- Main header start -->
<header class="main-header" >
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="http://thavasu.com/demo/property-listing/index.php">
                <img src="https://thumbs.dreamstime.com/b/real-estate-building-construction-logo-vector-design-real-estate-building-construction-logo-vector-design-company-logo-best-logo-ai10-198558324.jpg" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="global-investissement-sarl.php">الصفحة الرئيسية</a>
                    </li>
            <li class="nav-item"><a class="nav-link" href="land.php">الاراضي</a></li><li class="nav-item"><a class="nav-link" href="comercial.php">المحالات التجارية</a></li><li class="nav-item"><a class="nav-link" href="apartement.php">الشقق السكنية</a></li><!--<li class="nav-item"><a class="nav-link" href="header.html">الايجار</a></li><li class="nav-item"><a class="nav-link" href="http://thavasu.com/demo/property-listing/property-list.php?cat=land">Land</a></li><li class="nav-item"><a class="nav-link" href="http://thavasu.com/demo/property-listing/property-list.php?cat=villa">Home</a></li>
					
					<li class="nav-item">
                        <a class="nav-link" href="http://thavasu.com/demo/property-listing/agent-list.php">Agents</a>
                    </li> 
					 <li class="nav-item">
                        <a class="nav-link" href="new-projects.php">New Project</a>
                    </li> 
					<li class="nav-item">
                        <a class="nav-link" href="http://thavasu.com/demo/property-listing/news.php">News</a>
                    </li> 
					
					                     <li class="nav-item submit_property">
                        <a href="http://thavasu.com/demo/property-listing/post-ad.php" data-toggle="modal" data-target="#login" class="nav-link link-color"><i class="fa fa-plus"></i> الصفحة الرئيسية</a>
                    </li>-->
                                     </ul>
                                     <ul class="top-social-media pull-right list-left">
                                        <li class="nav-item"><a class="nav-link" href="" data-toggle="modal" data-target="#login">تسجيل الدخول</a></li><li class="nav-item"><a class="nav-link" href="" data-toggle="modal" data-target="#register">تسجيل</a></li>                     
                                        <li class="nav-item">
                                            <a class="nav-link" href="about-us.php" class="linkedin">مساعدة</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact-us.php" class="linkedin">اتصال</a>
                                        </li>
                                     </ul>
                                     
                    
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header avd-serbg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="http://thavasu.com/demo/property-listing/assets/images/close-icon.png"></span></button>
                    <h4 class="modal-title mode-tit text-center banner-font-1" style="color:#FFF;    width: 100%;" id="myModalLabel">تسجيل الدخول</h4>
                  </div>
      <div class="modal-body">
        <form id="lform" action="http://thavasu.com/demo/property-listing/session" method="post"> 
		          <div class="form-group">
            <label class="login-font">البريد الالكتروني</label>
            <input type="email" class="form-control" name="email" value="" required="">
          </div>
          
           <div class="form-group">
            <label class="login-font">كلمة السر</label>
            <input type="password" class="form-control" name="pass" maxlength="20" required="">
          </div>
		  
		  <div class="form-group text-center mt30">
             <input type="submit" class="btn bc3 btn-login" name="login" value="تسجيل الدخول">
          </div>
		  <div style="text-align: center;"><a href="" onclick="window.open('http:/''/2daybiz.com/products/2daybizusers/add.php?pro=property-listing', 'windowname1', 'scrollbars,resizable,width=480, height=250'); return false;"><span style="color:black;"><b>انقر هنا للحصول على رابط عرض المستخدم</b> </span></a> </div><br>
		  
          <div class="form-group">
            <small class="pull-left" style="float: right;">
              <a href="#" class="login-link" data-toggle="modal" data-target="#forgetpass" data-dismiss="modal" aria-label="Close">هل نسيت كلمة السر؟</a>
            </small>
            <small class="pull-right">
                ليس لديك حساب؟ <a href="#" class="login-link" data-toggle="modal" data-target="#register" data-dismiss="modal" aria-label="Close">سجل الان</a>
            </small>
          </div><br>
          
        </form>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="forgetpass" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header avd-serbg">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="http://thavasu.com/demo/property-listing/assets/images/close-icon.png"></span></button>
            <h4 class="modal-title mode-tit text-center banner-font-1" style="color:#FFF; width:100%;" id="myModalLabel">احصل على كلمة المرور</h4>
            </div>
      <div class="modal-body">
        <form action="" method="post">
			           <div class="form-group">
            <label class="login-font">عنوان بريد الكتروني</label>
            <input type="email" name="frg_mail" required="" class="form-control">
          </div>
		  
		  <div class="form-group text-center">
             <button style="margin-top:30px;" type="submit" name="forget" class="btn bc3 btn-login">ارسال</button>
          </div>
		  
          <div class="form-group text-center mt30">
            <small class="pull-left" style="float: right;">
                هل لديك حساب ؟ <a href="#" class="login-link" data-toggle="modal" data-target="#login" data-dismiss="modal" aria-label="Close">تسجيل الدخول من هنا</a>
            </small>
            <small class="pull-right">
                ليس لديك حساب ؟ <a href="#" class="login-link" data-toggle="modal" data-target="#register" data-dismiss="modal" aria-label="Close">سجل الان</a>
            </small>			
          </div><br>
          
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header avd-serbg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="http://thavasu.com/demo/property-listing/assets/images/close-icon.png"></span></button>
                    <h4 class="modal-title mode-tit text-center banner-font-1" style="color:#FFF; width:100%;" id="myModalLabel">تسجيل</h4>
                  </div>
				         <div class="modal-body">
        <form name="sform" id="rform" action="http://thavasu.com/demo/property-listing/signup" method="post">
          <div class="form-group">
            <label class="login-font">الاسم الكامل</label>
            <input type="text" class="form-control" name="fullname" value="" required="">
          </div>
          
          <div class="form-group">
            <label class="login-font">عنوان بريد الكتروني
						</label>
            <input type="email" id="email" class="form-control" name="email" value="" onchange="return chkemail()" required="">
          </div>
          
          <div class="form-group">
            <label class="login-font">رقم الهاتف المحمول</label>
            <input type="text" class="form-control" name="mobile" maxlength="15" onkeypress="return event.charCode >= 48 &amp;&amp; event.charCode <= 57" value="  " required="">
          </div>
          
           <div class="form-group">
            <label class="login-font">كلمة المرور</label>
            <input type="password" class="form-control" name="password" maxlength="20" value="" required="">
          </div>
		  
          <div class="form-group">
            <label class="login-font">تأكيد كلمة المرور
			</label>
            <input type="password" id="cpass" class="form-control" name="cpassword" maxlength="20" value="" required="">
          </div>
          
		  <input type="checkbox" name="terms" required=""> <label> أوافق على <a target="_blank" class="login-link" href="terms-condition">Terms &amp; الشروط والأحكام </a> </label>
		           
          <div class="form-group text-center mt30">
             <input type="submit" class="btn bc3 btn-login" name="signup" value="تسجيل" onclick="return reg_valid();">
          </div>
		  
		  <div class="form-group">
            <small class="pull-right">هل لديك حساب ؟ <a href="#" class="login-link" data-toggle="modal" data-target="#login" data-dismiss="modal" aria-label="Close">تسجيل الدخول من هنا</a></small><br>
          </div>
		  
        </form>
      </div>
    </div>
  </div>
</div>
<script>
function chkemail() {
var x = document.getElementById("email").value;
  $.ajax({url: "http://thavasu.com/demo/property-listing/checkmail.php",
        type: 'POST',
        data: {reg_email:x} ,
		success: function(result){
		 if(result==1)
		{
			swal("Oops!","Email Id already Exists ","error");
			document.getElementById("email").value="";
			document.getElementById("email").focus();
			return false;
		} if(result==0){
			return true;
		} 		
    }});
}

function reg_valid() {
	var mailformat =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var fullname = document.sform.fullname.value;
	var email = document.sform.email.value;
	var mobile = document.sform.mobile.value;
	var password = document.sform.password.value;
	var cpassword = document.sform.cpassword.value;
	var terms = document.sform.terms;
	
	if(!email.match(mailformat))  {  
		
		alert("enter a valid email address eg:abc@xyz.com");  
		document.getElementById("email").focus();  
		return false;  
	}  
	
	if(fullname!="" && email!="" && mobile!="" && password!="" && cpassword!="") {
		if(password!=cpassword){
			swal("Oops!","Confirm password does not match","error");
			document.getElementById("cpass").value="";
			return false;
		}	
		if(!terms.checked){
			swal("Oops!","Before SignUp Agree the Terms & Conditions","error");		
			return false;
		}
	}
}
</script>
 <script type="text/javascript">
var autocomplete;
 
 function initAutocomplete() {
	autocomplete = new google.maps.places.Autocomplete(
		(document.getElementById('autocomplete')),
		{types: ['(cities)']});
  }</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsOrfIpDIZyYfD_1zWx-fYeE9KoWAN7Ck&amp;libraries=places&amp;callback=initAutocomplete" async="" defer=""></script>