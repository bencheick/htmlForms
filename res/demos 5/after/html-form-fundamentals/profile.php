<!DOCTYPE html >
<html>
  <head>
    <title>HTML for examples</title>
    <meta name="keywords" content="HTML, forms, input, sample, Pluralsight">
    <meta name="description" content="Sample page showing a form for providing profile information.">
    <style type="text/css">
        fieldset {
            float: left;
        }
        .clear {
            clear: both;
            margin-top: 10px
        }
    </style>
  </head>
  <body>   

  <h1>Profile information</h1>
    <form method="post" action="profileprocessing.php" enctype="multipart/form-data" id="profileForm"  >
        <!-- Text inputs -->
      <fieldset>
            <legend>Contact Information</legend>
            <label for="firstName" accesskey="y">First name: </label><input tabindex="1" type="text" size="10" maxlength="20"  id="firstName" name="firstName" ></input><br />
            Last name: <input tabindex="2" type="text" size="10" maxlength="20"  id="lastName" name="lastName" ></input><br />
            EMail: <input tabindex="3" type="email" id="emailAddress" name="emailAddress"></input><br />
           
            </fieldset>

        <fieldset>
            <legend accesskey="l">Login information</legend>
        Username: <input type="text" id="userName" name="userName" readonly="true" 
            value="matt.milner"></input><br />
        Disabled text: <input type="text" id="nothing" name="nothing" disabled value="foo"></input><br />

        Password: <input type="password" id="pwd" name="userPassword"></input><br />
            </fieldset>
        
        <fieldset class="clear">
        <input type="hidden" value="hidden value" name="MyHiddenText"></input>
        Bio:<br />
        <textarea tabindex="4" id="bio" name="bio" rows="5" cols="30"></textarea><br />

        <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
        <label for="profileImage">Upload an image:</label>
        <input type="file" id="profileImage" name="profileImage" /><br />

        <!-- Selections-->
        Occupation:
        <select tabindex="5" id="occupation" name="occupation[]" size="3" multiple>
            <optgroup label="Technical">
                <option label="Developer" value="dev" ></option>
                <option label="Web Designer" value="design"></option>
            </optgroup>
            <optgroup label="Non-technical">
            <option label="Consultant" value="consult" selected></option>
            <option label="Manager" value="mgr"></option>
                </optgroup>

            <option label="Other" value="other"></option>
        </select>
       
        <br />
        Gender:
        <label><input type="radio" id="male" name="gender" value="male" tabindex="6"></input> Male</label>
        <input type="radio" id="female" name="gender" value="female" checked tabindex="7">Female</input>
        <br />
        Preferences:<br />
        <input type="checkbox" id="pref1" name="prefs[]" value="newsletter" tabindex="8">Send me a newsletter</input><br />
        <input type="checkbox" id="pref2" name="prefs[]" value="partners" tabindex="9">Send me partner offers</input><br />
        <input type="checkbox" id="pref3" name="prefs[]" value="marketing" tabindex="10">Send me marketing materials</input><br />
</fieldset>
        
       <div class="clear">
        <input type="submit" name="ProfileSubmit" value="Submit"></input>
        <input type="reset"  value="Start over"></input>


        </div> 
    </form>
      
      <br /><br /><br /><br /><br />
    
  </body>
</html>