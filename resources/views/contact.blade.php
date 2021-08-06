<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
<link rel="stylesheet" href="css/contact.css">
 <!-- for font awesome-->
 <script src="https://kit.fontawesome.com/c4ff59a1e2.js" crossorigin="anonymous"></script>
 <!-- for css animation  -->
 <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
 <!-- google fonts -->
 <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
 <title>Contact-gourmet</title>
</head>
<body>
    <header>
        <!-- ///////////////////////upper nav start////////////////////////// -->
        <nav>
        <div id="accordian">
        <div class="upper-nav  collapse " id="collapse-1">
            <div class=" upper-nav-detail d-flex  row ">
                <div class="left-upper col-lg-10 col-md-11 ">
                    <ul class="list-unstyled d-flex  align-items-center justify-content-between row ">
                        <li class="col-lg-3 col-md-6 col-12 pt-3"><i class="far fa-building">
                        </i> Gourmet Foods Unit-06 Main Defense Road Lahore</li>
                        <li class="col-lg-3 col-md-6 col-12 pt-3" title="UAN">
                            <a href="#" ><i class="fas fa-phone-alt"></i>042 111 -111-678</a>
                        </li>
                        <li class="col-lg-3 col-md-6 col-12 pt-3" title="Call us">
                            <a href="#"><i class="fas fa-phone-alt"></i>04232227777</a>
                        </li>
                        <li class="col-lg-3 col-md-6 col-12 pt-3" title="Contact Us">
                            <a href="#"><i class="far fa-envelope"></i><span>info@gourmetpakistan.com</span></a>
                        </li>
                    </ul>
                </div>
                <div class="right-upper d-flex align-items-center  pr-5 col-lg-2 col-md-6 col-6 mx-auto ">
                    <button class="btn  icon mr-3 " ><a href="#" >
                        <i class="fab fa-facebook-f"></i></a>
                    </button>  
                    <button class="btn btn-grey icon "><a href="#"><i class="fab fa-twitter"></i></a></button>
                 </div>
            </div>  
            
        </div>
        <div class="hide-nav d-flex justify-content-end row">
            <a href="#collapse-1" class="btn btn-link  col-4" data-parent="#accordian" data-toggle="collapse">
                <i class="fas fa-chevron-up"></i></a>
            </div>
        </div>
        </nav>
        <!-- ////////////////////////uper nav end//////////////////////////// -->
        
        
        <nav class ="navbar navbar-expand-lg navbar-light bg-light">
            <div class="left"> 
                <a href="/home.html" title="Chemkay Ghr Ghr Main"><img src="img/logo.png" class="logo "></a>
               </div>
            <button class ="navbar-toggler col-2 mr-4 " type ="button" data-toggle ="collapse" data-target ="#colNav">
                <span class ="navbar-toggler-icon"></span>
            </button>
            <div class ="collapse navbar-collapse" id ="colNav">
                <ul class="navbar-nav">
                    <li class=" nav-item ml-4"><a  class="nav-link" href="/">HOME</a></li>
                    <li class=" nav-item ml-4"><a class="nav-link"  href="about">ABOUT US</a></li>
                    <li class=" nav-item ml-4"><a class="nav-link" href="product">PRODUCTS</a></li>
                    <li class=" nav-item ml-4"><a class="nav-link"  href="store_locator"> STORES LOCATOR</a></li>
                    <li class=" nav-item dropdown ml-4">
                        <a class=" gnn-drop nav-link " data-toggle="dropdown"  href="#">GNN</a>
                        <div class="dropdown-menu ">
                            <a class="dropdown-item" href="#">Gicoh</a>
                            <a class="dropdown-item" href="#">TVCs</a>
                        </div>
                    </li>
                    <li class=" nav-item ml-4"><a class="nav-link"  href="career"> CAREER</a></li>
                    <li class=" nav-item ml-4"><a class="nav-link"  href="Distribution"> DISTRIBUTION FORM</a></li>
                    <li class=" nav-item ml-4"><a class="nav-link"  href="contact"> CONTACT US</a></li>
                </ul>
            </div>
            
        </nav>
        
        <div class=" mb-2 ">
                <form class="form-group d-flex align-items-center row justify-content-center ml-1 mr-1">
                <input class="form-control  col-md-11  col-5" type="text" placeholder="search..">
               <a href="#" class="btn btn-success col-md-1 col-2"><i class="fas fa-search  "></i></a> 
            </form>
           
        </div>
            
        </header>
        <!--///////////////////////////// second navigation section end here////////////////////////////////////// -->
        

<!-- ////////////////////////////about navbar start/////////////////////////////////////////////////////// -->
<nav class=" breadcrumb about-nav h-5 d-flex w-100 justify-content-between "> 
    <h4 class="breadcrumb pl-5">CONTACT US</h4>
    <ol class="breadcrumb d-flex">  
        <li class="breadcrumb-item home-link"><a href="home.html">Home</a></li>
        <li class="breadcrumb-item active">Contact</li>
    </ol>
  </nav>  
<!-- /////////////////////////////about navbar end here/////////////////////////////////////////////////// -->

<!-- /////////////////////////////////contact form section start/////////////////////////////////////////////////////// -->
<div class="container mx-auto row">
   <div class="contact-form col-md-6 col-12 ">
       <h3 class="display-5">Contact Us</h3>
       <p class="address-text mt-3">Note: Our shops are all self operated and currently we don't offer any franchise.For further information Feel Free To Contact Us.
    </p>
        <form  action ='signUp' method='POST' class="d-flex flex-column ">
            @csrf
        <input type="text" placeholder="Name" class="form-control form-control-lg" name="name">  <br>
        <input type="email" placeholder=" Your Email(required)" class="form-control form-control-lg" name="email"required>  <br>
        <input type="text" placeholder="Subject" class="form-control form-control-lg" name="subject"><br>         
    
        <textarea cols="30" rows="7" placeholder="Your Message" name="message"></textarea><br>
        <button class="btn rounded field-button mb-5" type="submit" >Send</button> 
        </form>
   </div>
   <div class="addresses col-md-6 col-12">
       <ul>
           <li>
            <i class="fas fa-map-marker-alt address-text"></i>
               <h4 class="display-5">Address</h4></li>
               <p class="address-text">Gourmet Foods Unit-06 Mauza Bhobhatian Main Defense Road Lahore </p>
           <li>
            <i class="fas fa-briefcase address-text"></i>
               <h4 class="display-5">Business Enquiries</h4>
               <p class="address-text">TEL: 0322-2227777</p>
               <p class="address-text">04232227777</p>
            <p style="color:orangered">info@gourmetpakistan.com</p>
            </li>
           <li> 
            <i class="fas fa-user-plus address-text"></i>
               <h4 class="display-5">Career/Employment</h4> 
               <p class="address-text">We're always looking for talented persons to join our team. </p>
               <p style="color:orangered">info@gourmetpakistan.com</p>
            </li>
       </ul>
   </div>
    </div>
<!-- /////////////////////////////////contact form section end///////////////////////////////////////////////////////// -->







<!-- //////////////////////////footer section start/////////////////////////////////// -->
<footer>
    <div class="line-break"></div>
    <div class="all-category row">
        <div class="gourmet-bottom d-flex flex-column  col-md-3 col-6 mt-2">
          <a href="#"><img src="img/gourmet-logo.png" class="card-img-top logo-img" ></a>  
           <span class="text-muted mt-3">&copy;2017 - 2018 developed by Gourmet Softtech. All Rights Reserved </span>
            <div class="icons">
              <button class="btn btn-grey icon "><a href="#"><i class="fab fa-facebook-f"></i></a></button>  
              <button class="btn btn-grey icon"><a href="#"><i class="fab fa-twitter"></i></a></button>
            </div>
        </div>

        <div class="category1 col-md-3 col-6 mt-2">
            <ul class="list-unstyled">
                <li>
                    <div class="media ">
                       <img src="img/bottle2.jpg" class="category">
                       <div class="media-body ml-3">
                        <p class="text-muted text-cate footer-links"><a href="#">Gourmet 250ml</a></p>
                           <h6 class=" footer-links"><a href="#">CSD</a></h6>
                       </div>
                    </div>
                    </li>
                    <li>
                       <div class="media " >
                          <img src="img/CSD2.png" class="category">
                          <div class="media-body ml-3">
                           <p class="text-muted footer-links"><a href="#">Bon Vivant Premium Cola</a></p>
                              <h6 class=" footer-links"><a href="#">CSD</a></h6>
                          </div>
                       </div>
                       </li>
                       <li>
                           <div class="media ">
                              <img src="img/CSD3.png" class="category">
                              <div class="media-body ml-3">
                               <p class="text-muted footer-links"><a href="#">Gourmet Lemon Up</a></p>
                                  <h6 class="footer-links"><a href="#">CSD</a></h6>
                              </div>
                           </div>
                           </li>
            </ul>
        </div>

        <div class="category1  col-md-3 col-6 mt-2">
           <ul class="list-unstyled">
               <li>
                   <div class="media ">
                      <img src="img/ice-cream.png" class="category">
                      <div class="media-body ml-3">
                       <p class="text-muted footer-links"><a href="#">Gourmet Banana Ice cream</a></p>
                          <h6 class="footer-links"><a href="#">ice-cream</a></h6>
                      </div>
                   </div>
                   </li>
                   <li>
                      <div class="media " >
                         <img src="img/ice-cream-2.png" class="category">
                         <div class="media-body ml-3">
                          <p class="text-muted footer-links"><a href="#">Gourmet Choclate Chip Ice cream</a></p>
                             <h6 class="footer-links"><a href="#">ice-cream</a></h6>
                         </div>
                      </div>
                      </li>
                      <li>
                          <div class="media " >
                             <img src="img/ice-cream-3.png" class="category">
                             <div class="media-body ml-3">
                              <p class="text-muted footer-links"><a href="#">Gourmet Coconut Ice Cream</a></p>
                                 <h6 class="footer-links"> <a href="#">ice-cream</a></h6>
                             </div>
                          </div>
                          </li>
           </ul>
       </div>

       <div class="company-list  col-md-3 col-6 mt-2">
           <h4 class="display-5">COMPANY</h4>
           <ul class="mt-3">
               <li class=" footer-links"><a href="#">About Us</a></li>
               <li class=" footer-links"><a href="#">Prodcts</a></li>
               <li class=" footer-links"><a href="#">GNN</a></li>
               <li class=" footer-links"><a href="#">Gicoh</a></li>
               <li class=" footer-links"><a href="#">Store Locatores</a></li>
               <li class=" footer-links"><a href="#">TVCs</a></li>
               <li class=" footer-links"><a href="#">Career</a></li>
               <li class=" footer-links"><a href="#">Catering</a></li>
               <li class=" footer-links"><a href="#">Distribution Application Form</a></li>
               <li class=" footer-links"><a href="#">Contact Us</a></li>
           </ul>
       </div>
      
    </div>
</footer>
<!-- create space -->
<div style="margin-top:50px"> </div>
<!-- /////////////////////////////footer section end here//////////////////////////////// -->


 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>