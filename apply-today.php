<?php include 'incl/header.php'; ?>

<div class="apply-today-top-section">
    <div class="inner-sec-container">

    <div class="apply-today-inner-parent">
    <h1 class="main-heading">
         <span> GREEN CARD APPLICATION FOR THE DIVERSITY IMMIGRANT VISA PROGRAM</span> 
            </h1>
    <div class="form-steps-section">
        <div class="steps-flex-wrapper">
            <div class="step-wrapper">
                <div class="step-text"> <span>1. </span><p>STEP</p> </div>
            </div>
            <!-- step-wrapper -->

            <div class="step-wrapper other-steps">
                <div class="step-text"> <span>2. </span><p>STEP</p> </div>
            </div>
            <!-- step-wrapper -->


            <div class="step-wrapper other-steps">
                <div class="step-text"> <span>3. </span><p>STEP</p> </div>
            </div>
            <!-- step-wrapper -->


            <div class="step-wrapper other-steps">
                <div class="step-text"> <span>4. </span><p>STEP</p> </div>
            </div>
            <!-- step-wrapper -->


        </div>
        <!-- steps-flex-wrapper -->
    </div>
    <!-- form-steps-section -->

    <div class="apply-today-top-txt-area">
    <p>
    We are delighted that you have chosen to apply for a Green Card using US Green Card Office’s valued-added immigration service so you eventually can live permanently and legally in the United States of America. Applying is an excellent opportunity to get a Green Card, and we look forward to assisting you and your family in starting a new life in the United States.
Please carefully fill out all the required information below. Should you have any questions, please contact our immigration team using our HELP section above.
    </p>
    </div>
    <!-- apply-today-top-txt-area -->


    </div>
    <!-- apply-today-inner-parent -->
            </div>
    <!-- inner-sec-container -->
</div>
<!-- applytoday top section -->

<div class="apply-today-step1-form-section">
    <div class="inner-sec-container">
        <div class="apply-today-step1-form-inner-parent">
            <div class="form-sec-heading-row">
                    <h2>
                    personal details
                    </h2>
            </div>
            <!-- form-sec-heading-row -->
            <form action="" class="step1-form-apply-today">
                <div class="row">
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Email Address <span>*</span></label> <br>
                            <input type="email" placeholder="Enter Email Address" class="input-box">
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Confirm Contact Email <span>*</span></label> <br>
                            <input type="email" placeholder="Enter Email Address" class="input-box">
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                </div>
                <!-- row -->



                <div class="row  mt-2">
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">First Name <span>*</span></label> <br>
                            <input type="text" placeholder="Enter First Name" class="input-box">
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Middle Name <span>*</span></label> <br>
                            <input type="text" placeholder="Enter Middle Name" class="input-box">
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                </div>
                <!-- row -->


                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Last Name <span>*</span></label> <br>
                            <input type="text" placeholder="Enter Last Name" class="input-box">
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Gender <span>*</span></label> <br>
                           <select class="input-box">
                               <option value="">Please Select</option>
                               <option value="">Male</option>
                               <option value="">Female</option>
                           </select>
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                </div>
                <!-- row -->


                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Date of Birth <span>*</span></label> <br>
                            <select name="" id="" class="input-box" style="width:29%">
                               <option value="">Year</option>
                               <?php  
                                for ($x = 2022; $x >= 1900; $x--) {?>
                                <option value=""><?php echo $x ?></option>
                                <?php }
                                ?>  

                           </select>

                           <select name="" id="" class="input-box" style="width:29%">
                               <option value="">Months</option>
                                    <option value="">January</option>
                                    <option value="">February</option>
                                    <option value="">March</option>
                                    <option value="">April</option>
                                    <option value="">May</option>
                                    <option value="">June</option>
                                    <option value="">July</option>
                                    <option value="">August</option>
                                    <option value="">September</option>
                                    <option value="">October</option>
                                    <option value="">November</option>
                                    <option value="">December   </option>
                             

                           </select>

                           <select name="" id="" class="input-box mr2" style="width:29%">
                               <option value="">Days</option>
                               <?php  
                                for ($x = 1; $x <= 30; $x++) {?>
                                <option value=""><?php echo $x ?></option>
                                <?php }
                                ?>  

                           </select>
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Country of Birth <span>*</span></label> <br>
                           <select name="" id="" class="input-box">
                           <option value="">Please Select</option>
                               <option value="">Pakisan</option>
                               <option value="">Saudia Arabia</option>
                               <option value="">Turkey</option>
                               <option value="">England</option>
                               <option value="">SriLanka</option>
                               <option value="">America</option>
                               <option value="">Afghanistan</option>
                               <option value="">Canada</option>
                           </select>
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                </div>
                <!-- row -->






                <div class="row  mt-2">
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">City of Birth <span>*</span></label> <br>
                            <input type="text" placeholder="Enter City of Birth " class="input-box">
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Native Country <span>*</span></label> <br>
                            <div class="native-country-input-wrapper-itag-area-parent">

                         
                           <div class="native-country-input-wrapper">
                           <select name="" id="" class="input-box">
                           <option value="">Please Select</option>
                               <option value="">Pakisan</option>
                               <option value="">Saudia Arabia</option>
                               <option value="">Turkey</option>
                               <option value="">England</option>
                               <option value="">SriLanka</option>
                               <option value="">America</option>
                               <option value="">Afghanistan</option>
                               <option value="">Canada</option>
                           </select>
                           </div>
                           <!-- native-country-input-wrapper -->

                           <div class="i-tag-area">
                                            <img src="https://cdn.usgreencardoffice.com/assets/assets-public/us-green-card-office/images/native-con-info.png" alt="">

                                          
                                </div>
                                <!-- itag -->
                                <div class="itag-hover-content-area">
                                                <p>In most cases this means the country in which the applicant was born. However, if a person was born in an ineligible country but his/her spouse was born in an eligible country, such person can claim the spouse’s country of birth providing both the applicant and spouse are issued visas and enter the U.S. simultaneously. Also, if a person was born in an ineligible country, but neither of his/her parents was born there or resided there at the time of the birth, such person may be able to claim nativity in one of the parents’ country of birth.</p>
                                            </div>
                                            <!-- itag-hover-content-area -->
                                </div>
                            <!-- native-country-input-wrapper-itag-area-parent -->
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                </div>
                <!-- row -->


                
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Password (choose your own password) <span>*</span></label> <br>
                            <input type="password" placeholder="Enter Password" class="input-box">
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Confirm Password <span>*</span></label> <br>
                            <input type="password" placeholder="Enter Password" class="input-box">
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                </div>
                <!-- row -->

                <div class="form-sec-heading-row mt-5">
                    <h2>
                    Contact Details
                    </h2>
            </div>
            <!-- form-sec-heading-row -->

                
            <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Address <span>*</span></label> <br>
                            <input type="text" placeholder="Enter Address" class="input-box">
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Postal Code <span>*</span></label> <br>
                            <input type="text" placeholder="Enter Postal Code" class="input-box">
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                </div>
                <!-- row -->



                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">City  <span>*</span></label> <br>
                            <input type="text" placeholder="Enter City" class="input-box">
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Region / State<span>*</span></label> <br>
                            <input type="text" placeholder="Enter Region" class="input-box">
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                </div>
                <!-- row -->


                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="input-wrapper">
                            <label for="">Country  <span>*</span></label> <br>
                            <select name="" id="" class="input-box">
                           <option value="">Please Select</option>
                               <option value="">Pakisan</option>
                               <option value="">Saudia Arabia</option>
                               <option value="">Turkey</option>
                               <option value="">England</option>
                               <option value="">SriLanka</option>
                               <option value="">America</option>
                               <option value="">Afghanistan</option>
                               <option value="">Canada</option>
                           </select>
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                    <div class="col-md-6">
                      
                    </div>
                    <!-- col6 -->
                </div>
                <!-- row -->




                <div class="row mt-2">
                    <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-3">
                                        <div class="input-wrapper">
                            <label for="">Country Code   <span>*</span></label> <br>
                            <input type="text"   disabled="disabled" class="input-box">
                        </div>
                        <!-- input wrapper -->
                                        </div>
                                        <!-- col 3 -->
                                        
                                        <div class="col-md-9">
                                        <div class="input-wrapper">
                            <label for="">Telephone No.  <span>*</span></label> <br>
                            <input type="number" placeholder="Enter Telephone No" class="input-box">
                        </div>
                        <!-- input wrapper -->
                                        </div>
                                        <!-- col 9 -->
                                    </div>

                   
                    </div>
                    <!-- col6 -->
                   
                    
                    <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-3">
                                        <div class="input-wrapper">
                            <label for="">Country Code   <span>*</span></label> <br>
                            <input type="text" disabled="disabled" class="input-box">
                        </div>
                        <!-- input wrapper -->
                                        </div>
                                        <!-- col 3 -->
                                        
                                        <div class="col-md-9">
                                        <div class="input-wrapper">
                            <label for="">Mobile Phone No.  <span>*</span></label> <br>
                            <input type="number"  placeholder="Enter Mobile Phone No"   class="input-box">
                        </div>
                        <!-- input wrapper -->
                                        </div>
                                        <!-- col 9 -->
                                    </div>

                   
                    </div>
                    <!-- col6 -->

                    <!-- col6 -->
                </div>
                <!-- row -->

                <div class="form-sec-heading-row mt-5">
                    <h2>
                    Education Details
                    </h2>
            </div>
            <!-- form-sec-heading-row -->

            <div class="education-detail-form-wrapper">
                                    <h3>EDUCATION *</h3>
                                    <p>
                                    You must have a minimum of a high school diploma reflecting the completion of a full course of study or be a skilled worker in an occupation that requires at least two years of training or experience. Please select your education below
                                    </p>

                                    <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="input-wrapper">
                          
                            <select name="" id="" class="input-box">
                           <option value="">Please Select</option>
                               <option value="">Pakisan</option>
                               <option value="">Saudia Arabia</option>
                               <option value="">Turkey</option>
                               <option value="">England</option>
                               <option value="">SriLanka</option>
                               <option value="">America</option>
                               <option value="">Afghanistan</option>
                               <option value="">Canada</option>
                           </select>
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                    <div class="col-md-6">
                      
                    </div>
                    <!-- col6 -->
                </div>
                <!-- row -->
            </div>
            <!-- education-detail-form-wrapper -->



            <div class="form-sec-heading-row mt-5">
                    <h2>
                    Further Information
                    </h2>
            </div>
            <!-- form-sec-heading-row -->

            <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="input-wrapper">
                        <label for="" class="seperate-label">What is you current marital status? *  </label> <br>
                            <select name="" id="" class="input-box mt-3">
                           <option value="">Please Select</option>
                               <option value="">Married</option>
                               <option value="">UnMarried</option>
                               <option value="">Divorced</option>
                               <option value="">Legally Seperated</option>
                           </select>
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col6 -->
                    <div class="col-md-6">
                      
                    </div>
                    <!-- col6 -->
                </div>
                <!-- row -->

                <div class="form-sec-heading-row mt-5">
                    <h2>
                    Child
                    </h2>
            </div>
            <!-- form-sec-heading-row -->

            <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="input-wrapper">
                        <label for="">Number of unmarried children under the age of 21 * ( You are not required to list children who are already U.S. citizens or Lawful Permanent Residents )  </label> <br>
                            <select name="" id="" class="input-box mt-3" style="width:30%;">
                           <?php  
                                for ($x = 0; $x <= 7; $x++) {?>
                                <option value=""><?php echo $x ?></option>
                                <?php }
                                ?>  
                           </select>
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col 12 -->
                    
                </div>
                <!-- row -->
                
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="input-wrapper">
                     <input type="checkbox">   <label for=""  class="seperate-label" style="margin:0;font-size:14px;">YES, I want to receive important information and newsletters. </label> <br>
                     <input type="checkbox">  <label for=""  class="seperate-label" style="margin:0;font-size:14px;">  YES, I have read and I accept the US  <a href="#">Green Card Office - Terms and Conditions</a>    </label> <br>
                      
                        </div>
                        <!-- input wrapper -->
                    </div>
                    <!-- col 12 -->
                    
                </div>
                <!-- row -->  

                <div class="form-submit-continue-btn-area mt-3">
                                    <a href="./apply-today-step2.php">
                                        CONTINUE >>
                                    </a>
                </div>  
                <!-- form-submit-continue-btn-area -->
                     


            </form>
        </div>
        <!-- apply-today-step1-form-inner-parent -->
    </div>  
    <!-- inner section container -->
</div>
<!-- apply-today-step1-form-section -->


<?php include 'incl/footer.php'; ?>