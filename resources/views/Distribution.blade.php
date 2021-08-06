<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
<link rel="stylesheet" href="css/distribution.css">
 <!-- for font awesome-->
 <script src="https://kit.fontawesome.com/c4ff59a1e2.js" crossorigin="anonymous"></script>
 <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
 <title>GSSM</title>
</head>
<body>
<!-- navbar -->
<nav>
    <div class="navbar"></div>
</nav>
<!-- form start -->
<div class="form-detail mt-5  row">
    <h5 class="border-head col-12">Distribution Application Form </h5>
    <div class="form-section col-12 ">
        <form class="radio-buttons ">
            <input type="radio" id="New-distribution"  >
            <label for="New-distribution">New Distribution</label>
            <input type="radio" id="existing distribution" >
            <label for="existing-distribution">Existing Distribution</label>        
        </form>
           
    </div>
    <!-- personal information start -->
    <div class="form-section2  col-12">
        <h5 >Personal Information</h5>
        <form class="row" >
<div class="row1 col-12 row">
    <label for="distribute-name " class="col-md-3 col-12 ">Distribute Name</label>
    <input type="text" id="distribute-name" class=" col-md-2 col-12 mr-5 " >
    <label for="applicant-name" class="col-md-3 col-12 ">Applicant Name</label>
    <input type="text" id="applicant-name"class="col-md-2 col-12">
</div>
<div class="row-2  col-12 row mt-1">
    <label for="cnic" class="col-md-3 col-12 ">CNIC</label>
    <input type="text" id="cnic"class=" col-md-2 col-12 mr-5">
    <label for="email" class="col-md-3 col-12 ">Email</label>
    <input type="text" id="email" class=" col-md-2 col-12 ">
</div>
<div class="row-3 col-12 row mt-1">
    <label for="mobile" class="col-md-3 col-12 ">Mobile</label>
           <input type="text" id="mobile" class="col-md-2 col-12  mr-5">
           <label for="firm-address" class="col-md-3 col-12 ">Address of your firm</label>
           <textarea cols="22" rows="2" id="firm-address"  class="col-md-2 col-12 "></textarea>

</div>
<!-- personal information end -->

<!-- select area start -->
       <div class="form-section2  col-12">
        <h5 >Select area where you intenting to work?</h5>
        <form class="row" >
<div class="row1 col-12 row">
    <label for="province " class="col-md-3 col-12 ">province</label>
    <select id="province"  class="col-md-2 col-12 mr-5 " >
        <option value="province ">AZAD KASHMIR</option>
        <option value="province">BALOCHISTAN</option>
        <option value="province">F.A.T.A</option>
        <option value="province">GILGIT BALISTAN</option>
        <option value="province">KHYBER PAKHUNKHAWA</option>
        <option value="province">PUNJAB</option>
        <option value="province">GILGIT SINDH</option>
    </select>
   
    <label for="applicanr-name" class="col-md-3 col-12  ">Division</label>
    <select id="applicant-name"  class="col-md-2 col-12 disabled " >
    </select>
   
</div>
<div class="row2 col-12 row mt-3">
    <label for="distribute-name " class="col-md-3 col-12 ">province</label>
    <select id="distribute-name"  class="col-md-2 col-12 mr-5 " >
    </select>
   
    <label for="applicant-name" class="col-md-3 col-12  ">Division</label>
    <select id="applicant-name"  class="col-md-2 col-12 disabled " >
    </select>
   
</div>

<div class="row-3 col-12 row mt-1">
    <label for="mobile" class="col-md-3 col-12 ">No of shops available in your interested area?    </label>
    <select id="mobile"  class="col-md-2 col-12 mr-5 " >
        <option value="mobile ">50-150</option>
        <option value="mobile">150-250</option>
        <option value="mobile">250-500</option>
        <option value="mobile">500-1000</option>
        <option value="mobile">1000+</option>
    </select>
    
           <label for="type" class="col-md-3 col-12 ">type</label>
           <select id="type"  class="col-md-2 col-12  " >
               <option value="type ">CSD</option>
               <option value="type">RGB</option>
               <option value="type">Confectionary</option>
               <option value="type">CSD+RGB</option>
           </select>
           
</div>     
<!-- select area end here -->

<!-- innvestment with gourmet food -->
<div class="form-section2  col-12">
    <h5 >Investment With Gourmet Foods    </h5>
    <form class="row" >
<div class="row1 col-12 row">
<label for="distribute-name " class="col-md-3 col-12 ">How much you Intending to invest with Gourmet Foods ?</label>
<select id="distribute-name"  class="col-md-2 col-12 mr-5 custom-select" >
    <option value="distribute-name ">100</option>
    <option value="distribute-name">200</option>
    <option value="distribute-name">300</option>
    <option value="distribute-name">400</option>
    <option value="distribute-name">500</option>
    <option value="distribute-name">1000+</option>
    <option value="distribute-name">100000+</option>
</select>
<label for="distribute-name " class="col-md-3 col-12 ">How much you can invest into market credit?</label>
<select id="distribute-name"  class="col-md-2 col-12 mr-5 custom-select" >
    <option value="distribute-name ">100</option>
    <option value="distribute-name">200</option>
    <option value="distribute-name">300</option>
    <option value="distribute-name">400</option>
    <option value="distribute-name">500</option>
    <option value="distribute-name">1000+</option>
    <option value="distribute-name">100000+</option>
</select>
</div>
<!-- investment with gourmet end -->
        
           <!-- experienced  section  start-->
           <div class="form-section2  col-12">
            <h5 >Experience with Gourmet Foods            </h5>
            <form class="row" >
    <div class="row1 col-12 ">
            <form class="radio-buttons ">
                <label >Previously worked as Distribution with Gourmet Foods?</label>
                <input type="radio" id="yes"  >
                 <label for="yes"> yes</label>       
                 <input type="radio" id="no"  >
                 <label for="no"> No</label>                 
            </form>
        
    </div>
    <div class="row-2  col-12 row mt-1">
        <label for="cnic" class="col-md-3 col-12 ">Distribute name</label>
        <input type="text" id="cnic"class=" col-md-2 col-12 mr-5">
        <label for="email" class="col-md-3 col-12 ">Area/City</label>
        <input type="text" id="email" class=" col-md-2 col-12 ">
    </div>
    <div class="row-3 col-12 row mt-1">
        <label for="date" class="col-md-3 col-12 ">From Date   </label>
               <input type="date" id="date" class="col-md-2 col-12  mr-5">
               <label for="date" class="col-md-3 col-12 ">To Date</label>
               <input type="date" id="date"  class="col-md-2 col-12 ">
    
    </div>
           <!-- experienced section end -->
    </div>
     <!-- Experience as Distribution section  start-->
     <div class="form-section2  col-12">
        <h5 >Experience as Distribution        </h5>
        <form class="row" >
<div class="row1 col-12 row ">
        <form class="col-md-6 col-12" >
            <label  >Previous Experience as Distirbution?</label>
            <input type="radio" id="yes"   >
             <label for="yes" > yes</label>       
             <input type="radio"  id="no"  >
             <label for="no" > No</label>                 
        </form>
        <label for="cnic" class="col-md-3 col-12 ml-5 ">Monthly Turn Over  </label>
        <input type="text" id="cnic"class=" col-md-2 col-12 ">    
</div>
<div class="row-2  col-12 row mt-1">
    <label for="mobile" class="col-md-3 col-12 ">Experience with No. of Shops    </label>
    <select id="mobile"  class="col-md-2 col-12  " >
        <option value="mobile ">50-150</option>
        <option value="mobile">150-250</option>
        <option value="mobile">250-500</option>
        <option value="mobile">500-1000</option>
        <option value="mobile">1000+</option>
        </select>
        <div class="chekbox col-md-5 col-12 ml-5">
            <label >Have you been a distributor of another FMCG in related section?</label>
        <input type="checkbox" id="coke" >
        <label for="coke">coke</label>
        <input type="checkbox" id="nestle" >
        <label for="nestle">nestle</label>
        <input type="checkbox" id="coke" >
        <label for="coke">Pepsi</label>
        <input type="checkbox" id="coke" >
        <label for="coke">NextCola</label>
        <label for="cnic" class="col-md-3 col-12 ">Other FMCG  </label>
        <input type="text" id="cnic"class=" col-md-2 col-12 ">    
        </div>
        
</div>

       <!-- Experience as Distribution section end -->
</div>
<!-- nature of business -->
<h5 class=" col-12">Business Type</h5>
<div class="form-section col-12 ">
    <form class="radio-buttons ">
        <input type="radio" id="New-distribution"  >
        <label for="New-distribution">sole proprietorship</label><br>
        <input type="radio" id="existing distribution" >
        <label for="existing-distribution">Partnership</label>        
    </form> 
</div>
<!-- business infrastructure start -->
<div class="form-section2  col-12">
    <h5 >   Distribution Infrastructure    </h5>
    <form class="row" >
<div class="row1 col-12 row">
<label for="province " class="col-md-3 col-12 ">How many Vehicles do you own for distributing in the market?</label>
<select id="province"  class="col-md-2 col-12 mr-5 " >
    <option value="province ">0</option>
    <option value="province ">1</option>
    <option value="province">2</option>
    <option value="province">3</option>
    <option value="province">4</option>
    <option value="province">5</option>
    <option value="province">6</option>
    <option value="province">7+</option>
</select>

<label for="applicanr-name" class="col-md-3 col-12  ">No. of dedicated vehicles for gourmet foods?</label>
<select id="applicant-name"  class="col-md-2 col-12" >
    <option value="province ">0</option>
    <option value="province ">1</option>
    <option value="province">2</option>
    <option value="province">3</option>
    <option value="province">4</option>
    <option value="province">5</option>
    <option value="province">6</option>
    <option value="province">7+</option>
</select>

</div>
<div class="row2 col-12 row mt-3">
<label for="distribute-name " class="col-md-3 col-12 ">No. sales staff?</label>
<select id="distribute-name"  class="col-md-2 col-12 mr-5 " >
    <option value="province ">0</option>
    <option value="province ">1</option>
    <option value="province">2</option>
    <option value="province">3</option>
    <option value="province">4</option>
    <option value="province">5</option>
    <option value="province">6</option>
    <option value="province">7+</option>
</select>

<label for="applicant-name" class="col-md-3 col-12  ">No. Of warehouses?</label>
<select id="applicant-name"  class="col-md-2 col-12 " >
    <option value="province ">0</option>
    <option value="province ">1</option>
    <option value="province">2</option>
    <option value="province">3</option>
    <option value="province">4</option>
    <option value="province">5</option>
    <option value="province">6</option>
    <option value="province">7+</option>
</select>

</div>

<div class="row-3 col-12 row mt-1">
<label for="mobile" class="col-md-3 col-12 ">Warehouse Capacity</label>
<input  type="text"class="col-md-2 col-12 mr-5" value="0">

       <label for="type" class="col-md-3 col-12 ">Warehouse Ownership</label>
       <div id="type"  class="col-md-2 col-12  " >
        <input type="radio" id="New-distribution"  >
        <label for="New-distribution">Own</label>
        <input type="radio" id="existing distribution" >
        <label for="existing-distribution">Rent</label>        
    </div>
</div>     
<!--business infrastructure end here -->
<!-- Reference start -->

<div class="form-section2  col-12 ">
    <h5>Reference  </h5>

<div class="row1 col-12 row ">
    <form class="col-md-5 col-12 " >
        <label>Refferal</label>
        <input type="radio" id="yes"   >
         <label for="yes" > yes</label>       
         <input type="radio"  id="no"  >
         <label for="no"  > No</label>                 
    </form>
    <label for="cnic" class="col-md-3 col-12  "  >Refferal Name </label>
    <input type="text" id="cnic"class=" col-md-2 col-12 ">    
</div>
<div class="row-2  col-12 row mt-1">
<label for="mobile" class="col-md-3 col-12 ">CellNo  </label>
<input type="text" id="mobile"  class="col-md-2 col-12 mr-5 " >
<label for="rel" class="col-md-3 col-12 ">  Relationship</label>
<input class="col-md-2 col-12  "  id="id" type="text">
    </div>
    
</div>
<!-- reference end -->
<input type="checkbox">
<label>I agree  with the gourmet terms and conditions & code of conduct of the Business</label>

    </form>
    <button class="btn btn-primary mt-4 col-12">Apply</button>
</div>




<!-- form section end -->


<!-- space -->
<div style="margin-top:90px"></div>
<!-- footer start -->
<div class="footer">Copyright © Gourmet Foods 2017. All rights reserved.</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>