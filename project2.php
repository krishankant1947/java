<?php
$array=array();
require "config 2.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $fieldname=[
      'email','roll_no','username','neet_score','date','registration_id','father_name','mother_name','gender','church','stateofdomicile',
      'landline_number','alternative_number','mobile_number','mbbs_church','bds_church'
   ];
   
   for($a=0; $a <count($fieldname); $a++){
      // printf("%s",$fieldname);
      //   echo $fieldname[$a];p
      if(empty($_POST[$fieldname[$a]])){     
      $array[]= ucwords ("enter your $fieldname[$a] ") ;
      }
   }
   var_dump(empty($array));
   //  print_r($array);
   if(empty($array)){
         $sql= "insert into studentdata(username,roll_no,neet_score,registration_id,father_name,mother_name,date,gender,church,email,stateofdomicile,Address,landline_number,alternative_number,mobile_number,mbbs_church,bds_church) 
      values(:username,:roll_no,:neet_score,:registration_id,:father_name,:mother_name,:date,:gender,:church,:email,:stateofdomicile,:Address,:landline_number,:alternative_number,:mobile_number,:mbbs_church,:bds_church)";
      $stmt=$pdo->prepare($sql);
      $stmt->execute([
         "username"=>$_POST['username'],
         "roll_no"=>$_POST['roll_no'],
         "neet_score"=>$_POST['neet_score'],
         "registration_id"=>$_POST['registration_id'],
         "father_name"=>$_POST['father_name'],
         "mother_name"=>$_POST['mother_name'],
         "date"=>$_POST['date'],
         "gender"=>$_POST['gender'],
         "church"=>$_POST['church'],
         "email"=>$_POST['email'],
         "stateofdomicile"=>$_POST[ 'stateofdomicile'],
         "Address"=>$_POST['Address'],
         "landline_number"=>$_POST['landline_number'],
         "alternative_number"=>$_POST['alternative_number'],
         "mobile_number"=>$_POST['mobile_number'],
         "mbbs_church"=>$_POST['mbbs_church'],
         "bds_church"=>$_POST['bds_church']
      ]);
   }
   
}



?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.7.1.min.js"
          integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   </head>
   <body class="bg-primary-subtle">
      <form action="" method="post" novalidate onsubmit="return submitCallback(event)">
         <div class="navbar" style="position: relative;">
            <ul class="navbar-nav nav-right">
               <li class="nav-item mx-5">
                  <img src="https://cmc.thewebking.in/bible-test-2024/assets/school_logo.png" alt="collage" width="90%">
               </li>
            </ul>
            <h1 class="btn btn-warning btn-lg fs-3"> Christian Medical College, Ludhiana</h1>
            <ul class="navbar-nav nav-right">
               <li class="nav-item mx-5">
                  <img src="https://cmc.thewebking.in/bible-test-2024/assets/school_logo.png" alt="collage" width="90%">
               </li>
            </ul>
         </div>
         <div class="card mt-4 mx-5">
            <div class="card-body bg-body-secondary">
               <?php
                   if(!empty($array)){
                     echo '<div class="alert alert-danger">';
                    for($a = 0; $a < count($array); $a++){
                       echo $array[$a].'<br/>';
                    }
                    echo '</div>';
                  }
               ?>
               <div class="row">
                  <div class="col-12">
                     <label class="fw-medium" for="nameid" >Name of applicant(Full name as Matriculation certificate)</label>
                     <input type="text" class="form-control mt-2 " name="username" required id="nameid" >
                  </div>
               </div>
               <h3>NEET DETAILS</h3>
               <div class="row">
                  <div class="col-4">
                     <label class="fw-medium" for="roll_number">Roll Number</label>
                     <input type="text" name="roll_no" class="form-control mt-2" required id="roll_number">
                  </div>
                  <div class="col-4">
                     <label class="fw-medium" for="Score">Neet Score</label>
                     <input type="text" name="neet_score" class="form-control mt-2" required id="Score">
                  </div>
                  <div class="col-4">
                     <label class="fw-medium" for="AIR">All India Rank</label>
                     <input type="text" name="AIR1" class="form-control mt-2" required id="AIR">
                  </div>
               </div>
               </br>
               <div class="row my-2">
                  <div class="col-12">
                     <label class="fw-medium" for="bfuhs">BFUHS REGISTRATION ID</label>
                     <input type="text" class="form-control mt-2" required id="bfuhs" name="registration_id">
                  </div>
               </div>
               </br>
               <h3>PERSONAL DETAILS</h3>
               <div class="row">
                  <div class="col-4">
                     <label class="fw-medium" for="fnameid">Father Name</label>
                     <input type="text" class="form-control mt-2" name="father_name" required id="fnameid" >
                  </div>
                  <div class="col-4">
                     <label class="fw-medium" for="Mnameid">Mother Name</label>
                     <input type="text" class="form-control mt-2" name="mother_name" required id="Mnameid" >
                  </div>
                  <div class="col-4">
                     <label class="fw-medium" for="dateofbirth">Date of birth</label>
                     <input type="date" class="form-control mt-2" name="date" required id="dateofbirth" >
                  </div>
               </div>
               <div class="row my-2">
                  <div class="col-4">
                     <label class="fw-medium" for="input_gender">Gender</label>
                     <select required id="input_gender" class="form-control mt-2" name="gender">
                        <option value=""> -- select -- </option>
                        <option value="male"> Male</option>
                        <option value="female"> Female</option>
                        <option value="transgender"> Other (Transgender)</option>
                     </select>
                  </div>
                  <div class="col-8">
                     <label class="fw-medium" for="religions">RELIGION</label>
                     <input type="text" name="religion12" required id="religions" value="CHRISTIAN" readonly="" class="form-control mt-2">
                  </div>
               </div>
               <div class="row my-2">
                  <div class="COL-12">
                     <label class="fw-medium" for="mamber">Mamber of which church</label>
                     <input type="text" name="church" required id="mamber" class="form-control mt-2">
                  </div>
               </div>
               <div class="row my-2">
                  <div class="col-4">
                     <label class="fw-medium" for="duration">Duration of Membership</label>
                     <input type="text" name="Durationmamber" required id="duration" class="form-control mt-2">
                  </div>
                  <div class="col-4">
                     <label class="fw-medium" for="Baptism">Date of Baptism</label>
                     <input type="date" name="dateofbaptism" required id="Baptism" class="form-control mt-2">
                  </div>
                  <div class="col-4"></div>
               </div>
               <div class="row my-2">
                  <div class="col-12">
                     <label class="fw-medium" for="Damicile">State of Damicile</label>
                     <select name="stateofdomicile" required id="Damicile"  class="form-control mt-2">
                        <option value=""> -- select -- </option>
                        <option value="ANDAMAN &amp; NICOBAR ISLANDS">ANDAMAN &amp; NICOBAR ISLANDS</option>
                        <option value="ANDHRA PRADESH">ANDHRA PRADESH</option>
                        <option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option>
                        <option value="ASSAM">ASSAM</option>
                        <option value="BIHAR">BIHAR</option>
                        <option value="CHANDIGARH">CHANDIGARH</option>
                        <option value="CHATTISGARH">CHATTISGARH</option>
                        <option value="DADRA &amp; NAGAR HAVELI">DADRA &amp; NAGAR HAVELI</option>
                        <option value="DAMAN &amp; DIU">DAMAN &amp; DIU</option>
                        <option value="DELHI">DELHI</option>
                        <option value="GOA">GOA</option>
                        <option value="GUJARAT">GUJARAT</option>
                        <option value="HARYANA">HARYANA</option>
                        <option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option>
                        <option value="JAMMU &amp; KASHMIR">JAMMU &amp; KASHMIR</option>
                        <option value="JHARKHAND">JHARKHAND</option>
                        <option value="KARNATAKA">KARNATAKA</option>
                        <option value="KERALA">KERALA</option>
                        <option value="LADAKH">LADAKH</option>
                        <option value="LAKSHDWEEP">LAKSHDWEEP</option>
                        <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                        <option value="MAHARASHTRA">MAHARASHTRA</option>
                        <option value="MANIPUR">MANIPUR</option>
                        <option value="MEGHALAYA">MEGHALAYA</option>
                        <option value="MIZORAM">MIZORAM</option>
                        <option value="NAGALAND">NAGALAND</option>
                        <option value="ODISHA">ODISHA</option>
                        <option value="PONDICHERY">PONDICHERY</option>
                        <option value="PUNJAB">PUNJAB</option>
                        <option value="RAJASTHAN">RAJASTHAN</option>
                        <option value="SIKKIM">SIKKIM</option>
                        <option value="TAMIL NADU">TAMIL NADU</option>
                        <option value="TELANGANA">TELANGANA</option>
                        <option value="TRIPURA">TRIPURA</option>
                        <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                        <option value="UTTARAKHAND">UTTARAKHAND</option>
                        <option value="WEST BENGAL">WEST BENGAL</option>
                     </select>
                  </div>
               </div>
               <div class="row my-2">
                  <div class="col-12">
                     <label class="fw-medium" for="Correspondence_Address">Correspondence Address</label>
                     <textarea name="Address" required id="Correspondence_Address" class="form-control mt-2"></textarea>
                  </div>
               </div>
               <div class="row my-2">
                  <div class="col-4">
                     <label class="fw-medium" for="landlinenumber">Landline Number</label>
                     <input type="text" name="landline_number" required id="landlinenumber" class="form-control mt-2">
                  </div>
                  <div class="col-4">
                     <label class="fw-medium" for="MobileNumber">Mobile</label>
                     <input type="text" name="mobile_number" class="form-control mt-2 required id="MobileNumber">
                  </div>
                  <div class="col-4">
                     <label class="fw-medium" for="Alternative">Alternative</label>
                     <input type="text" name="alternative_number" class="form-control mt-2 required id="Alternativ">
                  </div>
               </div>
               <div class="row my-2">
                  <div class="col-12">
                     <label class="fw-medium" for="email">Email Address (This will be the login id)</label>
                     <input type="email" name="email" class="form-control mt-2" required id="email">
                  </div>
               </div>
               <div class="row my-4">
                  <div class="col-4">
                     <lable for="mbbs" class="fw-medium">Course Appling For</lable>
                     <label for="mbbs" class="my-2 d-block fw-medium">MBBS
                     <input type="radio" name="course2" required id="mbbs" values="MBBS"></label>
                     <label for="bds" class="my-2 d-block fw-medium" >BDS
                     <input type="radio" name="course2" required id="bds" values="BDS"></label>
                     <label for="mbbs & BDS" class="my-2 d-block fw-medium">MBBS & BDS
                     <input type="radio" name="course2" required id="mbbs & bds" values="MBBS $ BDS"></label>
                  </div>
                  <div class="col-4"></div>
                  <div class="col-4"></div>
               </div>
               <h5 style="text-decoration-line: underline;">
               Name of church/member body with whom the candidate is siging the service argreement with</h5 style="underline">
               <div class="row my-2">
                  <div class="col-12">
                     <label class="fw-medium" for="mbbschurch"> MBBS</label>
                     <select required id="mbbschurch" name="mbbs_church" type="text" class="form-control mt-2">
                        <option value=""> --- SELECT --- </option>
                        <option value="SYNODICAL BOARD OF HEALTH SERVICES CHURCH OF NORTH INDIA">SYNODICAL BOARD OF HEALTH SERVICES CHURCH OF NORTH INDIA</option>
                        <option value="CHURCH OF SOUTH INDIA ">CHURCH OF SOUTH INDIA </option>
                        <option value="COUNCIL OF BAPTIST CHURCHES IN NORTH EAST INDIA">COUNCIL OF BAPTIST CHURCHES IN NORTH EAST INDIA</option>
                        <option value="COUNCIL OF MEDICAL WORK, METHODIST CHURCH IN INDIA">COUNCIL OF MEDICAL WORK, METHODIST CHURCH IN INDIA</option>
                        <option value="DIOCESE OF AMRITSAR (CNI) ">DIOCESE OF AMRITSAR (CNI) </option>
                        <option value="DIOCESE OF CHANDIGARH (CNI) ">DIOCESE OF CHANDIGARH (CNI) </option>
                        <option value="EASTERN REGIONAL BOARD OF HEALTH SERVICES (CNI)">EASTERN REGIONAL BOARD OF HEALTH SERVICES (CNI)</option>
                        <option value="EMMANUEL HOSPITAL ASSOCIATION">EMMANUEL HOSPITAL ASSOCIATION</option>
                        <option value=" EVANGELICAL LUTHERAN CHURCH IN M.P"> EVANGELICAL LUTHERAN CHURCH IN M.P</option>
                        <option value="GUJARAT CHRISTIAN SERVICE SOCIETY">GUJARAT CHRISTIAN SERVICE SOCIETY</option>
                        <option value="JEYPORE EVANGELICAL LUTHERAN CHURCH">JEYPORE EVANGELICAL LUTHERAN CHURCH</option>
                        <option value="MALANKARA ORTHODOX SYRIAN CHURCH (CATHOLICATE OF THE EAST )">MALANKARA ORTHODOX SYRIAN CHURCH (CATHOLICATE OF THE EAST )</option>
                        <option value="MAR THOMA SYRIAN CHURCH OF MALABAR">MAR THOMA SYRIAN CHURCH OF MALABAR</option>
                        <option value="MENNONITE MEDICAL BOARD">MENNONITE MEDICAL BOARD</option>
                        <option value="METHODIST CHURCH IN INDIA">METHODIST CHURCH IN INDIA</option>
                        <option value="METHODIST HEALTH SERVICES, AGRA CONFERENCE">METHODIST HEALTH SERVICES, AGRA CONFERENCE</option>
                        <option value=" MIRAJ MEDICAL CENTRE"> MIRAJ MEDICAL CENTRE</option>
                        <option value="MIZORAM PRESBYTERIAN CHURCH SYNOD">MIZORAM PRESBYTERIAN CHURCH SYNOD</option>
                        <option value="NORTHERN INDIA METHODIST HEALTH SERVICES ">NORTHERN INDIA METHODIST HEALTH SERVICES </option>
                        <option value="POONA CHRISTIAN MEDICAL ASSOCIATION">POONA CHRISTIAN MEDICAL ASSOCIATION</option>
                        <option value="THE SALVATION ARMY">THE SALVATION ARMY</option>
                        <option value="SEVENTH - DAY ADVENTIST CHURCH">SEVENTH - DAY ADVENTIST CHURCH</option>
                        <option value="ST. STEPHEN'S HOSPITAL">ST. STEPHEN'S HOSPITAL</option>
                        <option value="THE LEPROSY MISSION">THE LEPROSY MISSION</option>
                        <option value="UNITED EVANGELICAL LUTHERAN CHURCHES IN INDIA">UNITED EVANGELICAL LUTHERAN CHURCHES IN INDIA</option>
                        <option value="UP REGIONAL BOARD OF HEALTH SERVICES (CNI)">UP REGIONAL BOARD OF HEALTH SERVICES (CNI)</option>
                        <option value="WESTERN REGIONAL BOARD OF HEALTH SERVICES (CNI)">WESTERN REGIONAL BOARD OF HEALTH SERVICES (CNI)</option>
                        <option value="CHRISTIAN MEDICAL COLLEGE, LUDHIANA (ONLY FOR 2G)">CHRISTIAN MEDICAL COLLEGE, LUDHIANA (ONLY FOR 2G)</option>
                     </select>
                  </div>
               </div>
               <div class="row">
                 <div class="col-12">
                 <label class="fw-medium" for="bdschurch">BDS</label>
                  <select required id="bdschurch" name="bds_church" type="text" class="form-control mt-2">
                     <option value=""> --- SELECT --- </option>
                     <option value="SYNODICAL BOARD OF HEALTH SERVICES CHURCH OF NORTH INDIA">SYNODICAL BOARD OF HEALTH SERVICES CHURCH OF NORTH INDIA</option>
                     <option value="CHURCH OF SOUTH INDIA ">CHURCH OF SOUTH INDIA </option>
                     <option value="COUNCIL OF BAPTIST CHURCHES IN NORTH EAST INDIA">COUNCIL OF BAPTIST CHURCHES IN NORTH EAST INDIA</option>
                     <option value="COUNCIL OF MEDICAL WORK, METHODIST CHURCH IN INDIA">COUNCIL OF MEDICAL WORK, METHODIST CHURCH IN INDIA</option>
                     <option value="DIOCESE OF AMRITSAR (CNI) ">DIOCESE OF AMRITSAR (CNI) </option>
                     <option value="DIOCESE OF CHANDIGARH (CNI) ">DIOCESE OF CHANDIGARH (CNI) </option>
                     <option value="EASTERN REGIONAL BOARD OF HEALTH SERVICES (CNI)">EASTERN REGIONAL BOARD OF HEALTH SERVICES (CNI)</option>
                     <option value="EMMANUEL HOSPITAL ASSOCIATION">EMMANUEL HOSPITAL ASSOCIATION</option>
                     <option value=" EVANGELICAL LUTHERAN CHURCH IN M.P"> EVANGELICAL LUTHERAN CHURCH IN M.P</option>
                     <option value="GUJARAT CHRISTIAN SERVICE SOCIETY">GUJARAT CHRISTIAN SERVICE SOCIETY</option>
                     <option value="JEYPORE EVANGELICAL LUTHERAN CHURCH">JEYPORE EVANGELICAL LUTHERAN CHURCH</option>
                     <option value="MALANKARA ORTHODOX SYRIAN CHURCH (CATHOLICATE OF THE EAST )">MALANKARA ORTHODOX SYRIAN CHURCH (CATHOLICATE OF THE EAST )</option>
                     <option value="MAR THOMA SYRIAN CHURCH OF MALABAR">MAR THOMA SYRIAN CHURCH OF MALABAR</option>
                     <option value="MENNONITE MEDICAL BOARD">MENNONITE MEDICAL BOARD</option>
                     <option value="METHODIST CHURCH IN INDIA">METHODIST CHURCH IN INDIA</option>
                     <option value="METHODIST HEALTH SERVICES, AGRA CONFERENCE">METHODIST HEALTH SERVICES, AGRA CONFERENCE</option>
                     <option value=" MIRAJ MEDICAL CENTRE"> MIRAJ MEDICAL CENTRE</option>
                     <option value="MIZORAM PRESBYTERIAN CHURCH SYNOD">MIZORAM PRESBYTERIAN CHURCH SYNOD</option>
                     <option value="NORTHERN INDIA METHODIST HEALTH SERVICES ">NORTHERN INDIA METHODIST HEALTH SERVICES </option>
                     <option value="POONA CHRISTIAN MEDICAL ASSOCIATION">POONA CHRISTIAN MEDICAL ASSOCIATION</option>
                     <option value="THE SALVATION ARMY">THE SALVATION ARMY</option>
                     <option value="SEVENTH - DAY ADVENTIST CHURCH">SEVENTH - DAY ADVENTIST CHURCH</option>
                     <option value="ST. STEPHEN'S HOSPITAL">ST. STEPHEN'S HOSPITAL</option>
                     <option value="THE LEPROSY MISSION">THE LEPROSY MISSION</option>
                     <option value="UNITED EVANGELICAL LUTHERAN CHURCHES IN INDIA">UNITED EVANGELICAL LUTHERAN CHURCHES IN INDIA</option>
                     <option value="UP REGIONAL BOARD OF HEALTH SERVICES (CNI)">UP REGIONAL BOARD OF HEALTH SERVICES (CNI)</option>
                     <option value="WESTERN REGIONAL BOARD OF HEALTH SERVICES (CNI)">WESTERN REGIONAL BOARD OF HEALTH SERVICES (CNI)</option>
                     <option value="CHRISTIAN MEDICAL COLLEGE, LUDHIANA (ONLY FOR 2G)">CHRISTIAN MEDICAL COLLEGE, LUDHIANA (ONLY FOR 2G)</option>
                  </select>
                 </div>
               </div>
               <label>Bible test Center</label>
               <div class="row">
                  <div class="col-6">
                     <h5>1st Choice</h5>
                     <small>Ludhiana</small>
                  </div>
                  <div class="col-6">
                     <h5>2nd Choice</h5>
                     <small>N/A</small>
                  </div>
               </div>
               <div class="row my-2">
                  <div class="col-2 my-3">
                    <h3>Course</h3>
                  </div>
                  <div class="col-1"></div>
                  <div class="col-9 my-2">
                     <label>CATEGORY THE CANDIDATE IS APPLYING ON (Refer to the foot note & Confirm the appropriate category based on Domicile, as per eligibility)</label>
                  </div>
               </div>
               <div class="row ">
                  <div class="col-2">
                     <label>MBBS</label>
                  </div>
                  <div class="col-1"></div>
                  <div class="col-9">
                  <label for="mbbs">2A
                     <input type="radio" name="course2" class="mx-3" required id="mbbs" values="MBBS"></label>
                     <label for="bds" >2B
                     <input type="radio" name="course2" class="mx-3" required id="bds" values="BDS"></label>
                     <label for="mbbs & BDS">2C
                     <input type="radio" name="course2" class="mx-3" required id="mbbs & bds" values="MBBS $ BDS"></label>
                     <label for="mbbs">2D
                     <input type="radio" name="course2" class="mx-3" required id="mbbs" values="MBBS"></label>
                     <label for="bds" >2E
                     <input type="radio" name="course2" class="mx-3" required id="bds" values="BDS"></label>
                     <label for="mbbs & BDS">2F
                     <input type="radio" name="course2" class="mx-3" required id="mbbs & bds" values="MBBS $ BDS"></label>
                     <label for="mbbs & BDS">2G
                     <input type="radio" name="course2" class="mx-3" required id="mbbs & bds" values="MBBS $ BDS"></label>
                  </div>
               </div>
               <div class="row my-3 ">
                  <div class="col-2">
                     <label>BDS</label>
                  </div>
                  <div class="col-1"></div>
                  <div class="col-9">
                  <label for="mbbs">2A
                     <input type="radio" name="course3" class="mx-3" required id="mbbs" values="MBBS"></label>
                     <label for="bds" >2B
                     <input type="radio" name="course3" class="mx-3" required id="bds" values="BDS"></label>
                     <label for="mbbs & BDS">2C
                     <input type="radio" name="course3" class="mx-3" required id="mbbs & bds" values="MBBS $ BDS"></label>
                     <label for="mbbs">2D
                     <input type="radio" name="course3" class="mx-3" required id="mbbs" values="MBBS"></label>
                     <label for="bds" >2E
                     <input type="radio" name="course3" class="mx-3" required id="bds" values="BDS"></label>
                     <label for="mbbs & BDS">2F
                     <input type="radio" name="course3" class="mx-3" required id="mbbs & bds" values="MBBS $ BDS"></label>
                     <label for="mbbs & BDS">2G
                     <input type="radio" name="course3" class="mx-3" required id="mbbs & bds" values="MBBS $ BDS"></label>
                  </div>
               </div>
               <div>
                  <div>Foot Note : State of Domicile</div>
                  <div>A - Punjab ;</div>
                  <div>B - Andhra Pradesh, Karnataka, Kerala, Puducherry, Tamil Nadu, Telengana;</div>
                  <div>C - Goa, Maharashtra, Gujarat, Daman & Diu, Dadra & Nagar Haveli, Rajasthan, Lakshadweep;</div>
                  <div>D - Madhya Pradesh, Chhatisgarh, Orissa, Jharkhand, West Bengal, Andaman & Nicobar Islands;</div>
                  <div>E - Uttar Pradesh, Bihar, Uttarakhand, Arunachal Pradesh, Assam, Meghalaya, Manipur, Mizoram, Nagaland, Sikkim, Tripura ;</div>
                  <div>F - Jammu & Kashmir, Ladakh, Himachal Pradesh, Delhi, Haryana, Chandigarh;</div>
                  <div>G – Service Commitment with CMC Ludhiana & Its Outreach Centers. Candidates applying in the 2G category should have their forms endorsed by the Director, Christian Medical College Ludhiana</div>
               </div>
               <div class="row my-3">
                  <div class="col-12">
                     <button class="btn btn-outline-success" type="submit" >Next</button>
                  </div>
               </div>
            </div>
            <!--card body-->
         </div>
         <!--card-->
      </form>
      <script type="text/javascript">

         const submitCallback = function(event){

            // removing message div so that it shouldn't duplicated or unnecessorliy display
            $('#mesg').remove();

            // fetching empty inputs
            let emptyFields = $("input").filter(function(){
               return this.value == ''
            });

            // chcking if we have empy fields or not if not found empty field then return and form submit
            if( emptyFields.length == 0 ) {
               return true
            }

            // else showing message and stop form submittion
            $('.card-body').prepend("<div class=\"alert alert-danger\" id=\"mesg\"></div>");
            for(let i=0; i < document.querySelectorAll("input").length; i++)
            {
               if(document.querySelectorAll("input")[i].value == ''){
                     $('#mesg').append("Missing data for "+document.querySelectorAll("input")[i].name+"<br/>")
               }
            }
            event.preventDefault();
            return false;       
         }
      </script>
   </body>
</html>

