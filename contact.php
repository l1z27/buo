<?php
if (array_key_exists('send', $_POST)) {
  // mail processing script
  // remove escape characters from POST array
  if (PHP_VERSION < 6 && get_magic_quotes_gpc()) {
    function stripslashes_deep($value) {
	  $value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);
	  return $value;
	}
    $_POST = array_map('stripslashes_deep', $_POST);
  }

  $to = 'bottomsuporganics@gmail.com'; // use your own email address
  $subject = 'Contact Form Response: Bottoms Up Organics';
  
  // list expected fields
  $expected = array('name', 'email', 'comments');
  // set required fields
  $required = array('name', 'comments');
  // create empty array for any missing fields
  $missing = array();
 

  // assume that there is nothing suspect
  $suspect = false;
  // create a pattern to locate suspect phrases
  $pattern = '/Content-Type:|Bcc:|Cc:/i';
  
  // function to check for suspect phrases
  function isSuspect($val, $pattern, &$suspect) {
    // if the variable is an array, loop through each element
    // and pass it recursively back to the same function
    if (is_array($val)) {
      foreach ($val as $item) {
         isSuspect($item, $pattern, $suspect);
      }
    } else {
      // if one of the suspect phrases is found, set Boolean to true
      if (preg_match($pattern, $val)) {
        $suspect = true;
      }
    }
  }

  // check the $_POST array and any subarrays for suspect content
  isSuspect($_POST, $pattern, $suspect);

  if ($suspect) {
    $mailSent = false;
    unset($missing);
  } else {
    // process the $_POST variables
    foreach ($_POST as $key => $value) {
      // assign to temporary variable and strip whitespace if not an array
      $temp = is_array($value) ? $value : trim($value);
      // if empty and required, add to $missing array
      if (empty($temp) && in_array($key, $required)) {
        array_push($missing, $key);
      } elseif (in_array($key, $expected)) {
	    // otherwise, assign to a variable of the same name as $key
        ${$key} = $temp;
      }
    }
  }
  
  // validate the email address
  if (!empty($email)) {
    // regex to identify illegal characters in email address
    $checkEmail = '/^[^@]+@[^\s\r\n\'";,@%]+$/';
	// reject the email address if it doesn't match
    if (!preg_match($checkEmail, $email)) {
      $suspect = true;
      $mailSent = false;
      unset($missing);
    }
  }

  
  // go ahead only if not suspect and all required fields OK
  if (!$suspect && empty($missing)) {
  
    // build the message
    $message = "Name: $name\r\n\r\n";
    $message .= "Email: $email\r\n\r\n";
    $message .= "Comments: $comments\r\n\r\n";
	

    // limit line length to 70 characters
    $message = wordwrap($message, 70);

     // create additional headers
     $headers = "From: BottomsUpOrganics<support@bottomsuporganics.com>\r\n";
	 $headers .= 'Content-Type: text/plain; charset=utf-8';
     if (!empty($email)) {
       $headers .= "\r\nReply-To: $email";
     }

	 
    // send it  
    $mailSent = mail($to, $subject, $message, $headers);
    if ($mailSent) {
      // $missing is no longer needed if the email is sent, so unset it
      unset($missing);
    }
  }
}


include('includes/head.php');
include('includes/header-alt.php');
?>
<section class="section">
    <div class="section__container">
        <h1>Contact Us</h1>
            <p>We’d love to hear from you. You can see what we're up to on <a href="https://www.facebook.com/bottomsuporganics/" target="_blank"><strong><u>Facebook</u></strong></a>, send us an email at <a href="mailTo:support@bottomsuporganics.com" target="_blank"><strong><u>support@bottomsuporganics.com</u></strong></a>, or drop us a line via our contact form: </p>
            <?php
              if ($_POST && isset($missing) && !empty($missing)) {
              ?>
                <p class="warning">Please complete the missing item(s) indicated.</p>
              <?php
              } elseif ($_POST && !$mailSent) {
              ?>
                <p class="warning">Sorry, there was a problem sending your message. Please try later.</p>
              <?php
              } elseif ($_POST && $mailSent) {
              ?>
                <p><strong>Your message has been sent. Thank you for your feedback.</strong></p>
              <?php } ?>
              <form id="buocontactform" class="contactform" name="buocontactform" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                  <p>
                    <label for="name" class="control__label">Name: <?php
                    if (isset($missing) && in_array('name', $missing)) { ?>
                    <span class="warning">Please enter your name</span><?php } ?>
                    </label>
                    <input name="name" type="text" class="textInput control__input" id="name" 
                    <?php if (isset($missing)) {
                  echo 'value="' . htmlentities($_POST['name'], ENT_COMPAT, 'UTF-8') . '"';
                  } ?>
                    />
                  </p>
                  <p>
                    <label for="email" class="control__label">Email: </label>
                    <input name="email" type="text" class="textInput control__input" id="email"  
                    <?php if (isset($missing)) {
                  echo 'value="' . htmlentities($_POST['email'], ENT_COMPAT, 'UTF-8') . '"';
                  } ?>
                    />
                  </p>
                  <p>
                    <label for="comments" class="control__label">Comments: <?php
                    if (isset($missing) && in_array('comments', $missing)) { ?>
                    <span class="warning">Please enter your comments</span><?php } ?>
                    </label>
                    <textarea name="comments" id="comments" cols="45" rows="5" class="control__input"><?php 
                  if (isset($missing)) {
                  echo htmlentities($_POST['comments'], ENT_COMPAT, 'UTF-8');
                  } ?></textarea>
                  </p>

                  <p class="clearIt">
                    <input name="send" type="submit" id="send" class="btn btn-submit" value="Send comments" />
                  </p>
              
              </form>

<br />
            <h4>Need a direct line?</h4>
            <p>You can also reach me on the farm via my cell at: 1-661-332-0382.<br />
            <small>Just a warning though, before I’ll take your call you’ll have to tell me who you are using my Robokiller app, because I hate ROBOCALLS!</small></p>

    </div>
</section>


<?php include('includes/footer.php'); ?>
