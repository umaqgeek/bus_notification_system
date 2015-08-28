<html >
  <head>
    <meta charset="UTF-8">
    <title>Login/Register</title>
    <link href="<?php echo base_url('assets/css/normalize.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/fontawesome.min.css'); ?>" rel="stylesheet prefetch">
  </head>
  <body>
    <div class="logmod">
  <div class="logmod__wrapper">
    
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Login</a></li>
        <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
      </ul>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="#" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Username*</label>
                <input class="string optional" maxlength="255" id="user-email" placeholder="Username" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="text" size="50" />
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                <input class="string optional" maxlength="255" id="user-pw-repeat" placeholder="Repeat password" type="text" size="50" />
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="sumbit" value="Create Account" />
              <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
            </div> 
          </form>
        </div> 
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your username and password <strong>to sign in</strong></span>
        </div> 
        <div class="logmod__form">
          <form accept-charset="utf-8" action="#" class="simform">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">Username*</label>
                <input class="string optional" maxlength="255" id="user-email" placeholder="Username" type="email" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" placeholder="Password" type="password" size="50" />
                						<span class="hide-password">Show</span>
              </div>
            </div>
            <div class="simform__actions">
              <input class="sumbit" name="commit" type="sumbit" value="Log In" />
              <span class="simform__actions-sidetext"><a class="special" role="link" href="#">Forgot your password?<br>Click here</a></span>
            </div> 
          </form>
          </div> 
          </div>
      </div>
    </div>
  </div>
</div>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/index.js'); ?>"></script>
  </body>
</html>
