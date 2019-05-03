<?php include('server.php'); ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="signup.css">
     <link rel="stylesheet" type="text/css" href="mainEstateLibya.css">
     <title>تسجيل حساب جديد</title>
 </head>
 <body>
 <header>  
        <div class="topnav" id="myTopnav">
            <a href="mainEstateLibya.php">
              <img src="img/home.png" alt="logo" style="float: right;" width="30px" height="25px">
              عقارات ليبيا
            </a>
            <a href="mainEstateLibya.php" ><strong>الرئيسية</strong></a> 
         <div class="dropdown">
             <button class="dropbtn"><strong>الخصائص</strong>
                 <i class="fa fa-caret-down"></i>
             </button>
             <div class="dropdown-content">
                 <a href="#البحث بواسطة السعر">البحث بواسطة السعر</a>
                 <a href="#البحث بواسطة المدينة">البحث بواسطة المدينة</a>
                 <a href="#البحث بواسطة النوع">البحث بواسطة النوع</a>
             </div>
         </div>
         <a href="agents.php"><strong>الوكلاء العقاريين</strong></a>
         <li><a href="#ContactUs"><strong>اتصال بنا</strong></a></li>
         <li><a href="about.php"><strong>حول الموقع</strong></a></li> 
         <li><a href="signup.php"  class="active"><strong>انشئ حساب جديد</strong></a></li>
         <li><a href="mainEstateLibya.php"><strong>تسجيل الدخول</strong></a></li>
          <!--  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>-->
          <a href="javascript:void(0);" style="font-size:15px" class="icon" onclick="manubar()">&#9776;</a>
        </div>
    
        <div class="slideshow-container">
                <div class="mySlides fade">
                      <img  src="img/تصميم-موقع-شركة-عقارات.jpg" width="100%" height="470px" >
                 </div>      
              </div>
        <script src="JS.js"></script>
    </header>
     <div class="header">
         <h2>تسجيل حساب جديد</h2>    
     </div>
     <form method="post" action="signup.php">
         <!-- display validation errors  here-->
         <?php include('errors.php'); ?>
         <div class="input-group">
            <label>اسم المستخدم</label>
            <input type="text" name="username" placeholder="اسم المستخدم"  value="<?php echo $username; ?>">
         </div>
         <div class="input-group">
                <label>البريد الإلكترونى</label>
                <input type="text" name="email" placeholder="البريد الإلكترونى" value="<?php echo $email; ?>">
         </div>
         <div class="input-group">
                <label>كلمة المرور</label>
                <input type="password" placeholder="كلمة المرور" name="password">
         </div>
         <div class="input-group">
                <label>تأكيد كلمة المرور</label>
                <input type="password"  placeholder="تأكيد كلمة المرور" name="Confirm_Password">
         </div>
         <div class="input-group">
               <button type="submit" name="register"  class="btn">تسجيل</button>
         </div>
     </form>
     
     
     <footer class="footer-distributed" id="ContactUs">

			<div class="footer-left">
            <p class="footer-company-about">
					<span>حول الموقع</span>
                      هذ موقع إعداد وليد الشيبانى فحيج
                      يعتبر مشروع فصلى تم إعداده فى خريف 2018
                      موقع للبيع وايجار العقارات فى ليبيا
                </p>
			</div>

			<div class="footer-center">
                <div>
					<i class="fa fa-map-marker"></i>
					<p>اتصال بنا</p>
				</div>
				<div>
					<i class="fa fa-phone"></i>
					<p>0921234567 رقم هاتف</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="walid25397@gmail.com">walid25397@gmail.com</a></p>
				</div>
			</div>

			<div class="footer-right">
				
                <h3> ليبيا <span> عقارات </span></h3>
				<p class="footer-links">
                    
                    <a href="#">الصفحة الرئيسية</a>
					
                    <a href="#">الوكلاء العقاريين</a>
					
					<a href="#">حول الموقع</a>
					
                    <a href="#">اتصال بنا</a>
					 
                    <a href="#">انشئ حساب جديد</a>
							
				</p>
				<p class="footer-company-name">حقوق محفوظ لصاحب موقع وليد فحيج &copy; 2019</p>
        	</div>

		</footer>
 </body>
 </html>