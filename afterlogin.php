<?php include('server.php'); ?>

<!DOCTYPE html>
<html  lang="ar" dir="rtl">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="mainEstateLibya.css">  
    <title>موقع عقارات ليبيا</title>
 </head>
<body>
  <!--******************************* header **********************************************-->
    <header>  
        <div class="topnav" id="myTopnav">

            <a href="mainEstateLibya.php">
              <img src="img/home.png" alt="logo" style="float: right;" width="30px" height="25px">
              عقارات ليبيا
            </a>

            <a href="mainEstateLibya.php" class="active"><strong>الرئيسية</strong></a> 
         
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

            <div class="dropdown" id="afterloginn">
            <button class="dropbtn"><strong>اسم المستخدم</strong>
            </button>
            <div class="dropdown-content">
              <a href="">حسابى</a>
              <a href="mainEstateLibya.php">تسجيل خروج</a>
            </div>
           </div>

            <a href="javascript:void(0);" style="font-size:15px" class="icon" onclick="manubar()">&#9776;</a>
            
           
           <!-- <section class="nav-container">
             <asside class="menu">
               <div class="menu-content">
             
               </div>
             </asside>
            </section>  -->

        </div>
    </header>
    <!--*********************************  End header  *************************************-->
     <!--********************************* img header   *************************************-->
     <div class="slideshow-container">
          <div class="mySlides fade">
                <img  src="img/27.jpg" width="100%" height="600px" >
          </div>

          <div class="mySlides fade">
                <img src="img/P-22.jpg" width="100%" height="600px" >
          </div>
                
          <div class="mySlides fade">
                 <img src="img/blog-4.jpg" width="100%" height="600px">
          </div>      
        </div>

        <script src="JS.js"></script>
     <!--******************************** End img header ***********************************-->
      
  <!--********************************* nav bar *******************************************-->
    <nav class="mynav">
        
      
    </nav>
  <!--********************************* End nav bar **************************************-->  
  
    <!--*********************************  services ****************************************-->
    <div class="services">
    <div class="section1-Header">
            <h1>خدماتنا</h1>
        </div>

       <div class="roww">
        
       <div class="columnn">
           <div class="cardd">  
           <span>
                     <img src="img/home1.png" alt="home" width="50px" height="50px">
                    </span>
                    <div >
                     <h2 class="mainoslightHome1">عروض بيع أو ايجار عقارات فى ليبيا</h2>
                    </div>
           </div>
         </div>

         <div class="columnn">
           <div class="cardd">  
               <span>
                     <img src="img/users.png" alt="users" width="50px" height="50px">
                    </span>
              <div >
                <h2>لدينا وكلاء العقاريين من ذوي الخبرة</h2>
             </div>
           </div>
         </div>

         <div class="columnn">
           <div class="cardd">  
           <span >
             <img src="img/placeholder.png" alt="placeholder" width="50px" height="50px">
           </span>
           <div>
            <h2>البحث عن الأماكن فى أى مكان فى ليبيا</h2>
          </div>
           </div>
         </div> 
       </div>  
    </div>
  <!--*******************************  End services ************************************* -->

  <!--********************************  section1  ****************************************-->
  <div class="section1" >
        
        <div class="section1-Header">
            <h1>عقارات مدرجة مؤخرا</h1>
        </div>

       <div class="row">
           <div class="column">
                <div class="card">
                   <img src="img/16386934_717703548399430_6576602048452795455_n.jpg" alt="photo" width="100%" height="280px">
                   <div class="conta">
                       <h2>مكتب عقارات طرابلس</h2>
                       <p class="title"> فيلا للبيع</p>
                       <p class="title">الموقع: طرابلس -الفرناج</p>
                       <p class="title">السعر 150000 دينار</p>
                       <b><button class="button">تفصيل</button></b>
                   </div>
                </div>
           </div>

           <div class="column">
                <div class="card">
                   <img src="img/34686481_613926732296107_1870791997841735680_n.jpg" alt="photo" width="100%" height="280px">
                   <div class="conta">
                       <h2>مكتب عقارات مصراته</h2>
                       <p class="title"> فيلا للبيع</p>
                       <p class="title">الموقع: مصراته -الدافنية</p>
                       <p  class="title">السعر 200000 دينار</p>
                       <b><button class="button">تفصيل</button></b>
                   </div>
                </div>
           </div>

           <div class="column">
                <div class="card">
                   <img src="img/16.jpg" alt="Topaz" width="100%" height="280px">
                   <div class="conta">
                       <h2>مكتب عقارات بنغازى</h2>
                       <p class="title">منزل للإيجار</p>
                       <p class="title">الموقع:بنغازى - عمر المختار</p>
                       <p class="title">السعر7000 دينار</p>
                       <b><button class="button">تفصيل</button></b>
                   </div>
                </div>
           </div>
       </div>
       <br>
       <br>
       <hr>

       <div class="section1-Header">
            <h1>عقارات متميزه</h1>
        </div>

       <div class="row">
            <div class="column">
                 <div class="card">
                    <img src="img/25176171336_3687073b10_z.jpg" alt="photo" width="100%" height="280px">
                    <div class="conta">
                        <h2>مكتب عقارات طرابلس</h2>
                        <p class="title">فيلا للإيجار</p>
                        <p class="title">الموقع: طرابلس - قرقارش</p>
                        <p class="title">السعر 130000 دينار</p>
                        <b><button class="button">تفصيل</button></b>
                    </div>
                 </div>
            </div>
 
            <div class="column">
                 <div class="card">
                    <img src="img/LPG-aerial-photography-19.jpg" alt="photo" width="100%" height="280px">
                    <div class="conta">
                        <h2 >مكتب عقارات غريان</h2>
                        <p class="title">فيلا للبيع</p>
                        <p class="title">الموقع: غريان - طريق الرئيسي</p>
                        <p class="title">السعر 200000 دينار</p>
                        <b><button class="button">تفصيل</button></b>
                    </div>
                 </div>
            </div>
 
            <div class="column">
                 <div class="card">
                    <img src="img/49589603_1211980222311769_4578177233339809792_n.jpg" alt="Topaz" width="100%" height="280px">
                    <div class="conta">
                        <h2>مكتب عقارات سرت</h2>
                        <p class="title">ارض للبيع</p>
                        <p class="title">الموقع: سرت - طريق الرئيسى</p>
                        <p class="title">السعر 80000 دينار</p>
                        <b><button class="button">تفصيل</button></b>
                    </div>
                 </div>
            </div>
        </div>
        </div>
   <!--*****************End section1**********************-->

  <!--******************* agents *****************************-->
    
    <div class="section5">
    <div class="section1-Header">
            <h1>الوكلاء العقاريين المميزين</h1>
        </div>
          <div class="flip-card">
                <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img src="img/T.png" alt="Avatar" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                          <h1>مكتب العقارات توباز</h1>
                          <p>يملك 250 عقار للبيع</p>
                          <p>يملك 200 عقار للإيجار</p>
                          <p>موقع طرابلس - عين زاره</p>
                        </div>
                </div>
          </div>
          <div class="flip-card">
                <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img src="img/62952f6babd2b403ee9b37cc6b2fe961d98271a745744c782c003c10428a4497.jpg.jpg" alt="Avatar" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                          <h1>مكتب عقارات ليبيا</h1>
                          <p>يملك 200 عقار للبيع</p>
                          <p>يملك 190 عقار للإيجار</p>
                          <p>موقع بنغازى - عمر المختار</p>
                        </div>
                </div>
          </div>
          <div class="flip-card">
                <div class="flip-card-inner">
                        <div class="flip-card-front">
                          <img src="img/e4e3077e5f5bd8c6439383e0.jpg.jpg" alt="Avatar" style="width:300px;height:300px;">
                        </div>
                        <div class="flip-card-back">
                          <h1>عقارات ليبيا</h1>
                          <p>يملك 150 عقار للبيع</p>
                          <p>يملك 200 عقار للإيجار</p>
                          <p>موقع طرابلس - فشلوم</p>
                        </div>
                </div>
          </div> 

    </div>

  <!--******************* End agents ************************-->
   
    
  <!--*******************footer************************-->      
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
				<p class="footer-company-name">
          حقوق محفوظ لصاحب موقع وليد فحيج &copy; 2019
        </p>
      </div>
  </footer>
  <!--**************************** End footer ********************-->

</body>
</html>

