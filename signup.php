<?php 
include('includes/head.php');
include('includes/header-signup.php');
?>
<section class="section">
    <div class="section__container">
        <div class="scaffold">
            <div class="scaffold__col scaffold__col--sm4">
                <figure>
                    <img src="/assets/img/csabox.jpg" alt="CSA Box Produce" width="300px" class="scaffold__img" />
                    <figcaption class="hide">Photo by Ella Olsson from Pexels</figcaption>
                </figure>
                <h1>$400 | 2021 CSA Fall Box</h1>
                
                <p>You’ll receive 8-12 freshly harvested vegetables once per week. Our current menu includes items like:</p>
                <ul class="list">
                    <li class="list__item">Salanova® Green Battavia Lettuce</li>
                    <li class="list__item">Kalebration Kale</li>
                    <li class="list__item">Auroch Spinach</li>
                    <li class="list__item">Daikon Radishes</li>
                    <li class="list__item">Arugula</li>
                    <li class="list__item">Bright Lights Swiss Chard</li>
                    <li class="list__item">Subeto Beets</li>
                    <li class="list__item">Divino Brussel Sprouts</li>
                </ul>
            </div>
            <div class="scaffold__col scaffold__col--sm8">
            <h3>Fill out the form below to be contacted about the Fall Box.</h3>
            <div class="form-complete hide"> FORM SUBMITTED<br /><br /> Thank you for your submission, our team will contact you shortly.</div>
            <iframe id="submit-iframe" name="submit-iframe" style="display:none"></iframe>
            <form action="https://docs.google.com/forms/d/1zyALHXgKabA5kQ3IbmiqD8X6yzFUmo2B2aCFl4rZvZQ/formResponse" id="buoSignupForm" method="POST" target="submit-iframe">
                    <div class="scaffold">
                        <div class="scaffold__col scaffold__col--sm6">
                            <div class="control">
                                <label for="entry.1634701469" class="control__label">First Name:</label>
                                <input name="entry.1634701469" type="text" class="control__input" id="entry.1634701469" placeholder="Jane" aria-required="true" />
                            </div>
                        </div>
                        <div class="scaffold__col scaffold__col--sm6">
                            <div class="control">
                                <label for="entry.1131126857" class="control__label">Last Name:</label>
                                <input name="entry.1131126857" type="text" class="control__input" id="entry.1131126857" placeholder="Smith" aria-required="true" />
                            </div>
                        </div>
                    </div>


                    <div class="control">
                        <label for="entry.1864909055" class="control__label">Address:</label>
                        <input name="entry.1864909055" type="text" class="control__input" id="entry.1864909055" placeholder="123 main street" aria-required="true" />
                    </div>



                    <div class="scaffold">
                        <div class="scaffold__col scaffold__col--sm6">
                            <div class="control">
                                <label for="entry.2141906940" class="control__label">City:</label>
                                <input name="entry.2141906940" type="text" class="control__input" id="entry.2141906940" placeholder="Lancaster" aria-required="true" />
                            </div>
                        </div>
                        <div class="scaffold__col scaffold__col--sm3">
                            <div class="control">
                                <label for="entry.686199906" class="control__label">State:</label>
                                <select name="entry.686199906" type="text" class="control__input control__input--select" aria-required="true">
                                    <option value="">--</option>
                                    <option value="Alabama">Alabama</option>
<option value="Alaska">Alaska</option>
<option value="Arizona">Arizona</option>
<option value="Arkansas">Arkansas</option>
<option value="California">California</option>
<option value="Colorado">Colorado</option>
<option value="Connecticut">Connecticut</option>
<option value="Delaware">Delaware</option>
<option value="Florida">Florida</option>
<option value="Georgia">Georgia</option>
<option value="Hawaii">Hawaii</option>
<option value="Idaho">Idaho</option>
<option value="Illinois">Illinois</option>
<option value="Indiana">Indiana</option>
<option value="Iowa">Iowa</option>
<option value="Kansas">Kansas</option>
<option value="Kentucky">Kentucky</option>
<option value="Louisiana">Louisiana</option>
<option value="Maine">Maine</option>
<option value="Maryland">Maryland</option>
<option value="Massachusetts">Massachusetts</option>
<option value="Michigan">Michigan</option>
<option value="Minnesota">Minnesota</option>
<option value="Mississippi">Mississippi</option>
<option value="Missouri">Missouri</option>
<option value="Montana">Montana</option>
<option value="Nebraska">Nebraska</option>
<option value="Nevada">Nevada</option>
<option value="New Hampshire">New Hampshire</option>
<option value="New Jersey">New Jersey</option>
<option value="New Mexico">New Mexico</option>
<option value="New York">New York</option>
<option value="North Carolina">North Carolina</option>
<option value="North Dakota">North Dakota</option>
<option value="Ohio">Ohio</option>
<option value="Oklahoma">Oklahoma</option>
<option value="Oregon">Oregon</option>
<option value="Pennsylvania">Pennsylvania</option>
<option value="Rhode Island">Rhode Island</option>
<option value="South Carolina">South Carolina</option>
<option value="South Dakota">South Dakota</option>
<option value="Tennessee">Tennessee</option>
<option value="Texas">Texas</option>
<option value="Utah">Utah</option>
<option value="Vermont">Vermont</option>
<option value="Virginia">Virginia</option>
<option value="Washington">Washington</option>
<option value="West Virginia">West Virginia</option>
<option value="Wisconsin">Wisconsin</option>
<option value="Wyoming">Wyoming</option>
                            </select>
                            </div>
                        </div>
                        <div class="scaffold__col scaffold__col--sm3">
                            <div class="control">
                                <label for="entry.1871470635" class="control__label">Zip:</label>
                                <input name="entry.1871470635" type="text" class="control__input" id="entry.1871470635" placeholder="00000" aria-required="true" />
                            </div>
                        </div>
                    </div>


                    <div class="scaffold">
                        <div class="scaffold__col scaffold__col--sm6">
                            <div class="control">
                                <label for="entry.656636554" class="control__label">Phone Number:</label>
                                <input name="entry.656636554" type="text" class="control__input" id="entry.656636554" placeholder="(000) 000-0000" aria-required="true" />
                            </div>
                        </div>
                        <div class="scaffold__col scaffold__col--sm6">
                            <div class="control">
                                <label for="entry.1434365220" class="control__label">Email:</label>
                                <input name="entry.1434365220" type="text" class="control__input" id="entry.1434365220" placeholder="Jane@gmail.com" aria-required="true" />
                            </div>
                        </div>
                    </div>

                    <div class="scaffold">
                        <div class="scaffold__col scaffold__col--sm4">
                            <div class="control">
                                <label for="entry.527881841" class="control__label">Did Someone Refer you?</label>
                                <label class="control__input control__input--radio"><input type="radio" name="entry.527881841" value="Yes" checked="" class="control__input control__input--radiohide" id="phone" aria-required="true" data-change-val="Yes" data-change-target-val="showReferral">Yes</label>
                                <label class="control__input control__input--radio active"><input type="radio" name="entry.527881841" value="No" checked="" class="control__input control__input--radiohide" id="phone" aria-required="true" data-change-val="Yes" data-change-target-val="showReferral">No</label>
                            </div>
                        </div>
                        <div class="scaffold__col scaffold__col--sm8">
                            <div class="control hide"  data-val-checkbox="referral" data-change-target="showReferral">
                                <div class="scaffold">
                                    <div class="scaffold__col scaffold__col--sm5">
                                        <label for="entry.239830533" class="control__label">Referral Name</label>
                                        <input name="entry.239830533" type="text" class="control__input" placeholder="Jane Smith" id="entry.239830533" />
                                    </div>
                                    <div class="scaffold__col scaffold__col--sm7">
                                        <label for="entry.375486268" class="control__label">Referral Contact Info</label>
                                        <input name="entry.375486268" type="text" class="control__input" placeholder="(000) 000-0000 / smith@gmail.com" id="entry.375486268" />
                                    </div>
                                </div>
                                <small>We’d Like To Personally Thank Them</small>
                            </div>
                        </div>
                    </div>

                        

                      

                    <input type="submit" name="submit" value="Submit" class="btn btn-submit">

              </form>
            </div>    
        </div>
    </div>
</section>


<script>
//used to handle click to show/hide elements based on data el
// On el add data-change-val="EXPECTED VALUE TO TEST AGAINST" data-change-target-val="UNIQUE VAL USED TO TARGET"
// Target element that will hide/show: data-change-target="MATCH VAL from data-change-target-val"
//--------example: Country of formation*: if is set to united states then we target State of formation* and show it. else hide State of formation*
//--------------- Country of formation* data elements: data-change-val="United States" data-change-target-val="showState"
//--------------- Target element that will hide/show: data-change-target="showState"
$('[data-change-val]').change(function(){
    var elTargetChange = $(this).data('change-val')
    var elTargetVal = $(this).data('change-target-val')
    if($(this).val() == elTargetChange){
      $('[data-change-target='+elTargetVal+']').show().children('select').prop('required',true).focus(); 
    }else{
      $('[data-change-target='+elTargetVal+']').hide().children('select').prop('required',false);
    }
  });

    // set the target on the form to point to a hidden iframe
   // some browsers need the target set via JavaScript, no idea why...
   document.getElementById('buoSignupForm').target = 'submit-iframe';

       $('#buoSignupForm').submit(function(e) {
       
          $('#buoSignupForm').fadeOut();
          $('.form-complete').removeClass('hide');
        
      })





</script>

<?php 
include('includes/footer.php');
?>