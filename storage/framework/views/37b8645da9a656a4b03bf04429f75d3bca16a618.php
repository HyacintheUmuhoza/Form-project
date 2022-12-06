<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
    
</head>
<body>
    <div id="svg_wrap"></div>
    <form id="regForm" action="<?php echo e(route('adduser')); ?> " method="post">
        <?php echo csrf_field(); ?>
        
 <h1>REPUBLIC OF RWANDA</h1>
 <h2><img  class="imag" src="logo.jpg"></h2>
 <h1>RWANDA INVESIGATION BUREAU</h1>
 <h1><u>STAFF FULL IDENTIFICATION FORM</u></h1>
<section class="tab">
  <p>PERSONNEL IDENTIFICATION </p>
  <input type="text" class="not_empty" name="firstname" placeholder="Firstname" />
  <input type="text"class="not_empty" name="surname" placeholder="Surname" />
  <input type="date" class="not_empty" name="dob" placeholder="DATE OF BIRTH" />
  <input type="text" class="not_empty" name="fatherName" placeholder="FATHER’s NAME" />
  <input type="text" class="not_empty" name="motherName" placeholder="MOTHER’s NAME" />
  <input type="email" class="not_empty" name="email" placeholder="E-MAIL" />
  <input type="text" class="not_empty" name="position" placeholder="POSITION" />
  <input type="text" class="not_empty" name="tel" placeholder="TEL" />
  <input type="text" name="telOfSpouse" placeholder="TEL OF THE SPOUSE" />
  <input type="text" class="not_empty" name="nameOfTheBankUsed" placeholder="NAME OF THE BANK(S) USED:">

</section>

<section class="tab">
  <p>PLACE OF BIRTH</p>
  <input type="text" class="not_empty" name="cell" placeholder="CELL" />
  <input type="text" class="not_empty" name="sector" placeholder="SECTOR" />
  <input type="text" class="not_empty" name="district" placeholder="DISTRICT" />
  <input type="text" class="not_empty" name="province" placeholder="PROVINCE" />
  <input type="text" class="not_empty" name="country" placeholder="COUNTRY" />
</section>

<section class="tab">
  <p>RESIDENCE/PRESENT ADDRESS</p>
  <input type="text" class="not_empty" name="residenceVillage" placeholder="VILLAGE" />
  <input type="text" class="not_empty" name="residenceCell" placeholder="CELL" />
  <input type="text" class="not_empty" name="residenceSector" placeholder="SECTOR" />
  <input type="text" class="not_empty" name="residenceDistrict" placeholder="DISTRICT" />
  <input type="text" class="not_empty" name="residenceProvince" placeholder="PROVINCE" />
</section>
<section class="tab">
    <p>MARITAL STATUS AND DEPENDANTS</p>
    <input type="radio" name="martialStatus" value="MARRIED">MARRIED 
    <input type="radio" name="martialStatus" value="SINGLE">SINGLE
    <input type="radio" name="martialStatus" value="DIVORCED">DIVORCED
    <input type="radio" name="martialStatus" value="WIDOW/WIDOWER">WIDOW/WIDOWER
    <input type="text" name="dependants" placeholder="DEPENDANTS">
  </section>
<section class="tab">
  <p>EDUCATION LEVEL</p>
  <input type="text" name="university" placeholder="DIPLOMA/DEGREE (university)" />
  <input type="text" name="field" placeholder="field" />
  <input type="text" name="secondary" placeholder="ADVENCED LEVEL (Secondary school)" />
  <input type="text" name="option" placeholder="Combination/option" />
  <input type="text" name="primary" placeholder="PRIMARY LEVEL" />
  <input type="text" name="training" placeholder="PROFESSIONAL TRAININGS MADE" />
  <input type="text" name="languages" placeholder="SPOKEN LANGUAGES" />
  <input type="text" name="computerskills" placeholder="COMPUTER SKILLS" />
  <select name="drivingskills" >
    <option>DRIVING SKILLS</option>
    <option value="Provisional driving permit">Provisional driving permit</option>
    <option value="Driving license of category">Driving license of category</option>
    <option value="None">None</option>
  </select>
</section>
<section class="tab">
  <p>HERITIER/NEXT OF KIN</p>
  <input type="text" class="not_empty" name="heritierFirstName" placeholder="FIRST NAME" />
  <input type="text" class="not_empty" name="heritierLastName" placeholder="LAST NAME" />
  <input type="text" class="not_empty" name="heritierAddress" placeholder="ADDRESS" />
  <input type="text" class="not_empty" name="heritierRelation" placeholder="RELATION" />
 
</section>
<section class="tab">
  <p>LIST OF YOUR PREVIOUS EMPLOYERS  </p>
  <input type="text" name="employerName" placeholder="NAME OF EMPLOYER" />
  <input type="text" name="employerAddress" placeholder="ADDRESS" />
  <input type="text" name="employerTel" placeholder="TEL" />
  <input type="text" name="employerPosition" placeholder="position" />
  <textarea name="reason" id="" cols="30" rows="10" placeholder="Specify the reason why you left the job of each employer"></textarea>
 
</section>
<section class="tab">
  <p>OTHER RELEVANT INFORMATION  </p>
  Have you ever used prohibited drugs
  <input type="radio" name="prohibitedDrugs"  value="Yes" /> Yes
  <input type="radio" name="prohibitedDrugs" value="No"/> No <br> 
  Do you have any permanent disability? 
  <input type="radio" name="disabilities"  value="Yes" /> Yes
  <input type="radio" name="disabilities" value="No"/> No
  <p>CONTACT PERSON</p>
  <input type="text" class="not_empty" name="contactFirstName" placeholder="FIRST NAME" />
  <input type="text" class="not_empty" name="contactLastName" placeholder="LAST NAME" />
  <input type="text" class="not_empty" name="contactAddress" placeholder="ADDRESS" />
  <input type="text" class="not_empty" name="contactRelation" placeholder="RELATION WITH THE CONTACT PERSON" />
  <input type="text" class="not_empty" name="contactTel" placeholder="TEL" />
  <input type="email" class="not_empty" name="contactEmail" placeholder="Email" />
 
</section>

<section class="tab">
  <p>STAFF OF RIB WITH WHOM YOU HAVE RELATIONS:</p>
  <input type="text" name="staffName" placeholder="Names of the staff" />
  <input type="text" name="staffRelationship" placeholder="Kind of relationship" />
  <input type="text" name="otherStaffName" placeholder="Names of the staff (If more than 1)" />
  <input type="text" name="otherStaffRelationship" placeholder="Kind of relationship" />
  <p class="swear">I swear that the above information is correct and sincere; if I lied in any of the above
    information, I accept to be dismissed from RIB duties and to be punished according to
    relevant laws and regulations.</p>
    <p class="swear">Done at ………………., on<span id="current_date"></span> Signature: ……………………</p>
</section>

  <div class="button" > <button type="button" id="prevBtn" onclick="nextPrev(-1)"> &larr; Previous</button></div>
<div class="button" ><button type="button" id="nextBtn" onclick="nextPrev(1)">Next &rarr;</button></div>
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script src="index.js"></script>
<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\Users\Dear Hyacinthe\Desktop\Hce-project\resources\views/welcome.blade.php ENDPATH**/ ?>