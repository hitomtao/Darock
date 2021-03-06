<?php

/*

type: layout

name: Login default

description: Login default

*/

?>
<?php $user = user_id(); ?>
<?php $have_social_login = false; ?>

<script>mw.moduleCSS("<?php print modules_url();; ?>users/login/templates.css")</script>

<div id="mw-login" class="module-login well">
  <?php if($user != false): ?>
    <style> body { display: none !important; } </style>
    <script>window.location.href = "<?php print site_url(); ?>";</script>
  <?php else:  ?>
  <div class="box-head">
    <h2><?php _e("Login"); ?></h2>
  </div>

  <div id="user_login_holder_<?php print $params['id'] ?>">
  <form   method="post" id="user_login_<?php print $params['id'] ?>"  class="clearfix" action="#"  >
    <div class="control-group form-group">
      <input class="mw-ui-field mw-ui-field-big w100"   name="username" type="text" placeholder="<?php _e("Email or username"); ?>"   />
    </div>
    <div class="control-group form-group">
      <input  class="mw-ui-field mw-ui-field-big w100"  name="password" type="password" placeholder="<?php _e("Password"); ?>"   />
    </div>
    <a class="mw-ui-link" href="<?php print forgot_password_url(); ?>"><?php _e("Forgot password"); ?>?</a>

    
    <div class="alert" style="margin: 0;display: none;"></div>
    


    <input class="mw-ui-btn mw-ui-btn-invert pull-right" type="submit" value="<?php _e("Login"); ?>" />


    <div class="social-login">

    <?php
        # Login Providers
        $facebook = get_option('enable_user_fb_registration','users') =='y';
        $twitter = get_option('enable_user_twitter_registration','users') =='y';
        $google = get_option('enable_user_google_registration','users') =='y';
        $windows = get_option('enable_user_windows_live_registration','users') =='y';
        $github = get_option('enable_user_github_registration','users') =='y';

        if($facebook or $twitter or $google or $windows or $github){
           $have_social_login = true;
        }
        else{
          $have_social_login = false;
        }
    ?>

    <?php if($have_social_login){ ?>
    <hr>

        <h5><?php _e("Login with"); ?>:</h5>
    <?php } ?>

    <?php if($have_social_login){ ?><ul class="mw-ui-btn-nav social-login-nav"><?php } ?>
        <?php if($facebook): ?>
        <li class="mw-ui-btn mw-ui-btn-icon mw-ui-btn-big default-invert tip" data-tip="Facebook" data-tipposition="top-center"><a href="<?php print api_link('user_social_login?provider=facebook') ?>" class="mw-icon-facebook"></a></li>
        <?php endif; ?>
        <?php if($twitter): ?>
        <li class="mw-ui-btn mw-ui-btn-icon mw-ui-btn-big default-invert tip" data-tip="Twitter" data-tipposition="top-center"><a href="<?php print api_link('user_social_login?provider=twitter') ?>" class="mw-icon-twitter"></a></li>
        <?php endif; ?>
        <?php if($google): ?>
        <li class="mw-ui-btn mw-ui-btn-icon mw-ui-btn-big default-invert tip" data-tip="Google" data-tipposition="top-center"><a href="<?php print api_link('user_social_login?provider=google') ?>" class="mw-icon-googleplus"></a></li>
        <?php endif; ?>
        <?php if($windows): ?>
        <li class="mw-ui-btn mw-ui-btn-icon mw-ui-btn-big default-invert tip" data-tip="Windows Live" data-tipposition="top-center"><a href="<?php print api_link('user_social_login?provider=live') ?>" class="mw-icon-social-windows"></a></li>
        <?php endif; ?>
        <?php if($github): ?>
        <li class="mw-ui-btn mw-ui-btn-icon mw-ui-btn-big default-invert tip" data-tip="Github" data-tipposition="top-center"><a href="<?php print api_link('user_social_login?provider=github') ?>" class="mw-icon-social-github"></a></li>
        <?php endif; ?>
    <?php if($have_social_login){ ?></ul><?php } ?>

    </div>





  </form>
  </div>
  <?php endif;  ?>

</div>
