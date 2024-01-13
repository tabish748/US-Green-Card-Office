
 <?php include 'incl/header.php'; ?>
<div class="green-card-lottery-winner-check-status-section">
    <div class="inner-sec-container">
        <div class="green-card-lottery-winner-check-status-inner-parent">
        <h1 class="main-heading">
           <span> GREEN CARD LOTTERY RESULTS - APPLICATION STATUS CHECK</span>
            </h1>


            <div class="lottery-winner-check-status-content-wrapper mt-5">
            <p class="lottery-winner-check-status-content-wrapper-top-txt">
            Now you check if you’re one of the 55.000 lucky Green Card Program selectees of the 2020 DV-2022 (2022xxxxxxxxxxxx) Diversity Visa Program. Please note all 2021 DV-2023 applicants cannot check their confirmation numbers (2023xxxxxxxxxxxx) before May 7, 2022.
            <br><br>
            DV-2022 visa interviews are scheduled to begin on October 1, 2021.
        </p>

        <p>It is very important that you type your confirmation number, last name and date of birth exactly as you did when you applied.
            <br><br>
            Any misspelling of your last name, incorrect date of birth or incorrect confirmation number provided in the form will lead to a negative result, so please check your data twice before you submit your request
            <br><br>
            Please ONLY submit your request once and wait for our response.
            <br><br>If you didn't apply for the upcoming Diversity Visa Program please apply now on, www.usgreencardoffice.com/apply

            <br><br>
            We wish you good luck.

            <br><br>
            US GREEN CARD OFFICE <br>
            Support Team United States




        </p>
            </div>
            <!-- lottery-winner-check-status-content-wrapper -->


<div class="green-card-lottery-winner-check-status-form-section">
    <form action="">
        <div class="row">
            <div class="col-md-4">
                <div class="lottery-winner-input-wrapper">
                <label for="">Confirmation Number  </label> <br>
                            <input type="text" class="input-box" placeholder="Enter Confirmation Number">
                            <p class="form-dull-txt">
                            Type the confirmation number that was given when you applied
                            </p>
                </div>
                <!-- lottery-winner-input-wrapper -->
            </div>
            <!-- col4 -->

            <div class="col-md-4">
                <div class="lottery-winner-input-wrapper">
                <label for="">Last or Family Name </label> <br>
                            <input type="text" class="input-box" placeholder=" Please Enter Last or Family Name">
                            <p class="form-dull-txt">
                            Provide the Last or Family Name that was used on the Diversity Visa Lottery Application Form when you applied, including punctuation.
                            </p>
                </div>
                <!-- lottery-winner-input-wrapper -->
            </div>
            <!-- col4 -->

            <div class="col-md-4">
                <div class="lottery-winner-input-wrapper">
                <label for="">Birth Year  </label> <br>
                <select name="" id="" class="input-box" >
                               <option value="">Select Birth Year</option>
                               <?php  
                                for ($x = 2022; $x >= 1900; $x--) {?>
                                <option value=""><?php echo $x ?></option>
                                <?php }
                                ?>  

                           </select>
                           <p class="form-dull-txt"> Provide the year of birth for the primary entrant. format(yyyy)</p>

                </div>
                <!-- lottery-winner-input-wrapper -->
            </div>
            <!-- col4 -->
        </div>
        <!-- row -->

        <div class="row">
            <div class="col-md-6">
                <div class="lottery-winner-input-wrapper">
                <label for="">Email </label> <br>
                            <input type="text" class="input-box" placeholder="Enter Email">
                            <p class="form-dull-txt">
                            Provide the email you used when you applied

                            </p>
                </div>
                <!-- lottery-winner-input-wrapper -->
            </div>
            <!-- col6 -->

        
            <div class="col-md-6">
                <div class="lottery-winner-input-wrapper">
                <label for="">Confirmation Email  </label> <br>
                <input type="text" class="input-box" >
                           <p class="form-dull-txt"> Please enter your email again
</p>

                </div>
                <!-- lottery-winner-input-wrapper -->
            </div>
            <!-- col6-->
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

                <input type="submit" value="Check my Application Status" class="submit-btn">
    </form>
</div>
<!-- green-card-lottery-winner-check-status-form-section -->

        </div>
        <!-- green-card-lottery-winner-check-status-inner-parent -->
    </div>
    <!-- inner section container -->
</div>
<!-- green-card-lottery-winner-check-status-section -->
 
 <?php include 'incl/footer.php'; ?>