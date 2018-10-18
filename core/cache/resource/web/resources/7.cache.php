<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 7,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Регистрация',
    'longtitle' => '',
    'description' => '',
    'alias' => 'registracziya',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '[[!Register?
    &submitVar=`submitbtn`
    &activation=`1`
    &activationEmailSubject=`Подтверждение регистрации`
    &activationResourceId=`10`
    &activationEmailTpl=`mylgnForgotPassEmail`
    &successMsg=`<p>Спасибо за регистрацию. На вашу электронную почту [[!+reg.email]] отправлено письмо, содержащее ссылку, необходимую для активацию аккаунта. Перейдите по этой ссылке, чтобы завершить процедуру регистрации.</p>`
    &usergroups=`Users`
    &usernameField=`email`
    &passwordField=`passwd`    
    &validate=`nospam:blank,
      passwd:required:minLength=^8^,
      passwdAgain:passwdAgain=^passwd^,
      fullname:required,
      email:required:email`
    &placeholderPrefix=`reg.`
]]

[[!+error.message:eq=``:then=`
    <div class="form-index form-login">
        <form action="[[~[[*id]]]]" method="post">
            <div class="ttl">
                <h1>Регистрация</h1>
            </div>
            <div class="flex-wrap-form">
                <span class="help-block text-error">[[!+reg.error.fullname]]</span>
                <input type="text" name="fullname" id="fullname" placeholder="login:" value="[[!+reg.fullname]]">
                <span class="help-block text-error">[[!+reg.error.email]]</span> 
                <input type="text" name="email" id="email" placeholder="e-mail:" value="[[!+reg.email]]">
                <span class="help-block text-error">[[!+reg.error.passwd]]</span>
                <input type="password" name="passwd" class="form-control" id="passwd" placeholder="password:" value="[[!+reg.passwd]]">
                <span class="help-block text-error">[[!+reg.error.passwdAgain]]</span>
                <input type="password" name="passwdAgain" class="form-control" id="passwdAgain" placeholder="confirm password:" value="[[!+reg.passwdAgain]]">
            </div>
            <div class="btn btn-bk"><input type="submit" value="Далее" name="submitbtn" id="submitbtn"></div>
        </form>
    </div>
`:else=`<div class="alert alert-success">[[!+error.message]]</div>`]]',
    'richtext' => 0,
    'template' => 3,
    'menuindex' => 3,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1539623906,
    'editedby' => 1,
    'editedon' => 1539806970,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1539623880,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 1,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'registracziya/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html lang="ru">
<head>
   <title>Регистрация - EBHA вебинары и удаленное обучение</title>
<base href="[[!++site_url]]" />
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/site/slick/slick-theme.css">
<link rel="stylesheet" href="assets/site/slick/slick.css">
<link rel="stylesheet" href="assets/site/css/magnific-popup.css">
<link rel="stylesheet" href="assets/site/css/animate.css">
<link rel="stylesheet" href="assets/site/css/style.css">
<link rel="stylesheet" href="assets/site/css/media.css">
<link rel="shortcut icon"  href="favicon.ico">
</head>
<body>
    
    <div id="main">
       <div class="container index-oplet">
                <header>
    <div class="logo"><a href="/"><img class="bk-logo" src="assets/site/img/logo.svg" alt=""><img class="wt-logo" src="assets/site/img/logo_wt.svg" alt=""></a>
    <span><em>H</em>eartmann<br><em>B</em>usiness<br><em>A</em>cademy</span>
    </div>
    <div class="login">
        <div class="sign-in" title="Войти"><a href="avtorizacziya/">
            <img src="assets/site/img/login.svg" alt="">
            <p>Sign in</p>
        </a>
        </div>
        <div class="sign-up" title="Зарегистрироваться"><a href="registracziya/">
            <img src="assets/site/img/sign%20up.svg" alt="">
            <p>Sign up</p>
        </a></div>
    </div>
</header>
            <div class="mar-top">
                [[!Register?
    &submitVar=`submitbtn`
    &activation=`1`
    &activationEmailSubject=`Подтверждение регистрации`
    &activationResourceId=`10`
    &activationEmailTpl=`mylgnForgotPassEmail`
    &successMsg=`<p>Спасибо за регистрацию. На вашу электронную почту [[!+reg.email]] отправлено письмо, содержащее ссылку, необходимую для активацию аккаунта. Перейдите по этой ссылке, чтобы завершить процедуру регистрации.</p>`
    &usergroups=`Users`
    &usernameField=`email`
    &passwordField=`passwd`    
    &validate=`nospam:blank,
      passwd:required:minLength=^8^,
      passwdAgain:passwdAgain=^passwd^,
      fullname:required,
      email:required:email`
    &placeholderPrefix=`reg.`
]]

[[!+error.message:eq=``:then=`
    <div class="form-index form-login">
        <form action="registracziya/" method="post">
            <div class="ttl">
                <h1>Регистрация</h1>
            </div>
            <div class="flex-wrap-form">
                <span class="help-block text-error">[[!+reg.error.fullname]]</span>
                <input type="text" name="fullname" id="fullname" placeholder="login:" value="[[!+reg.fullname]]">
                <span class="help-block text-error">[[!+reg.error.email]]</span> 
                <input type="text" name="email" id="email" placeholder="e-mail:" value="[[!+reg.email]]">
                <span class="help-block text-error">[[!+reg.error.passwd]]</span>
                <input type="password" name="passwd" class="form-control" id="passwd" placeholder="password:" value="[[!+reg.passwd]]">
                <span class="help-block text-error">[[!+reg.error.passwdAgain]]</span>
                <input type="password" name="passwdAgain" class="form-control" id="passwdAgain" placeholder="confirm password:" value="[[!+reg.passwdAgain]]">
            </div>
            <div class="btn btn-bk"><input type="submit" value="Далее" name="submitbtn" id="submitbtn"></div>
        </form>
    </div>
`:else=`<div class="alert alert-success">[[!+error.message]]</div>`]]
            </div>
        </div>
        <div class="bg-img wow slideInDown" data-wow-delay=".87s" data-wow-duration="0.4s" ></div>
    </div>
        <footer>
    <div class="container">
        <div class="oplet-footer">
            <div class="copyright">
                <p>
                    Все права защищены. Сайт подготовлен <a target="_blank" href="http://ewal-web.ru">ewal-web.ru</a>
                </p>
                <p>Copyright © 2018</p>
            </div>
        </div>
    </div>
</footer>
         <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>
<script src="https://yastatic.net/browser-updater/v1/script.js" charset="utf-8"></script><script>var yaBrowserUpdater = new ya.browserUpdater.init({"lang":"ru","browsers":{"yabrowser":"16.4","chrome":"50","ie":"11","opera":"49","safari":"9.1","fx":"50","iron":"35","flock":"Infinity","palemoon":"25","camino":"Infinity","maxthon":"4.5","seamonkey":"2.3"},"theme":"red"});</script>
<script src="assets/site/slick/slick.min.js"></script>
<script src="assets/site/js/jquery.magnific-popup.min.js"></script>
<script src="assets/site/js/wow.min.js"></script>
<script src="assets/site/js/custom.js"></script>
	<script>
        new WOW().init();
    </script>
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$head]]' => '<title>Регистрация - EBHA вебинары и удаленное обучение</title>
<base href="[[!++site_url]]" />
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/site/slick/slick-theme.css">
<link rel="stylesheet" href="assets/site/slick/slick.css">
<link rel="stylesheet" href="assets/site/css/magnific-popup.css">
<link rel="stylesheet" href="assets/site/css/animate.css">
<link rel="stylesheet" href="assets/site/css/style.css">
<link rel="stylesheet" href="assets/site/css/media.css">
<link rel="shortcut icon"  href="favicon.ico">',
    '[[$header]]' => '<header>
    <div class="logo"><a href="/"><img class="bk-logo" src="assets/site/img/logo.svg" alt=""><img class="wt-logo" src="assets/site/img/logo_wt.svg" alt=""></a>
    <span><em>H</em>eartmann<br><em>B</em>usiness<br><em>A</em>cademy</span>
    </div>
    <div class="login">
        <div class="sign-in" title="Войти"><a href="avtorizacziya/">
            <img src="assets/site/img/login.svg" alt="">
            <p>Sign in</p>
        </a>
        </div>
        <div class="sign-up" title="Зарегистрироваться"><a href="registracziya/">
            <img src="assets/site/img/sign%20up.svg" alt="">
            <p>Sign up</p>
        </a></div>
    </div>
</header>',
    '[[dateY]]' => '2018',
    '[[$footer]]' => '<footer>
    <div class="container">
        <div class="oplet-footer">
            <div class="copyright">
                <p>
                    Все права защищены. Сайт подготовлен <a target="_blank" href="http://ewal-web.ru">ewal-web.ru</a>
                </p>
                <p>Copyright © 2018</p>
            </div>
        </div>
    </div>
</footer>',
    '[[$scripts]]' => ' <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>
<script src="https://yastatic.net/browser-updater/v1/script.js" charset="utf-8"></script><script>var yaBrowserUpdater = new ya.browserUpdater.init({"lang":"ru","browsers":{"yabrowser":"16.4","chrome":"50","ie":"11","opera":"49","safari":"9.1","fx":"50","iron":"35","flock":"Infinity","palemoon":"25","camino":"Infinity","maxthon":"4.5","seamonkey":"2.3"},"theme":"red"});</script>
<script src="assets/site/slick/slick.min.js"></script>
<script src="assets/site/js/jquery.magnific-popup.min.js"></script>
<script src="assets/site/js/wow.min.js"></script>
<script src="assets/site/js/custom.js"></script>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 17,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '<title>[[*pagetitle]] - [[++site_name]]</title>
<base href="[[!++site_url]]" />
<meta charset="[[++modx_charset]]" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/site/slick/slick-theme.css">
<link rel="stylesheet" href="assets/site/slick/slick.css">
<link rel="stylesheet" href="assets/site/css/magnific-popup.css">
<link rel="stylesheet" href="assets/site/css/animate.css">
<link rel="stylesheet" href="assets/site/css/style.css">
<link rel="stylesheet" href="assets/site/css/media.css">
<link rel="shortcut icon"  href="favicon.ico">',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<title>[[*pagetitle]] - [[++site_name]]</title>
<base href="[[!++site_url]]" />
<meta charset="[[++modx_charset]]" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/site/slick/slick-theme.css">
<link rel="stylesheet" href="assets/site/slick/slick.css">
<link rel="stylesheet" href="assets/site/css/magnific-popup.css">
<link rel="stylesheet" href="assets/site/css/animate.css">
<link rel="stylesheet" href="assets/site/css/style.css">
<link rel="stylesheet" href="assets/site/css/media.css">
<link rel="shortcut icon"  href="favicon.ico">',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 18,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '<header>
    <div class="logo"><a href="/"><img class="bk-logo" src="assets/site/img/logo.svg" alt=""><img class="wt-logo" src="assets/site/img/logo_wt.svg" alt=""></a>
    <span><em>H</em>eartmann<br><em>B</em>usiness<br><em>A</em>cademy</span>
    </div>
    <div class="login">
        <div class="sign-in" title="Войти"><a href="[[~8]]">
            <img src="assets/site/img/login.svg" alt="">
            <p>Sign in</p>
        </a>
        </div>
        <div class="sign-up" title="Зарегистрироваться"><a href="[[~7]]">
            <img src="assets/site/img/sign%20up.svg" alt="">
            <p>Sign up</p>
        </a></div>
    </div>
</header>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<header>
    <div class="logo"><a href="/"><img class="bk-logo" src="assets/site/img/logo.svg" alt=""><img class="wt-logo" src="assets/site/img/logo_wt.svg" alt=""></a>
    <span><em>H</em>eartmann<br><em>B</em>usiness<br><em>A</em>cademy</span>
    </div>
    <div class="login">
        <div class="sign-in" title="Войти"><a href="[[~8]]">
            <img src="assets/site/img/login.svg" alt="">
            <p>Sign in</p>
        </a>
        </div>
        <div class="sign-up" title="Зарегистрироваться"><a href="[[~7]]">
            <img src="assets/site/img/sign%20up.svg" alt="">
            <p>Sign up</p>
        </a></div>
    </div>
</header>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 23,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => '<footer>
    <div class="container">
        <div class="oplet-footer">
            <div class="copyright">
                <p>
                    Все права защищены. Сайт подготовлен <a target="_blank" href="http://ewal-web.ru">ewal-web.ru</a>
                </p>
                <p>Copyright © [[dateY]]</p>
            </div>
        </div>
    </div>
</footer>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<footer>
    <div class="container">
        <div class="oplet-footer">
            <div class="copyright">
                <p>
                    Все права защищены. Сайт подготовлен <a target="_blank" href="http://ewal-web.ru">ewal-web.ru</a>
                </p>
                <p>Copyright © [[dateY]]</p>
            </div>
        </div>
    </div>
</footer>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
      'scripts' => 
      array (
        'fields' => 
        array (
          'id' => 19,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'scripts',
          'description' => '',
          'editor_type' => 0,
          'category' => 7,
          'cache_type' => 0,
          'snippet' => ' <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>
<script src="https://yastatic.net/browser-updater/v1/script.js" charset="utf-8"></script><script>var yaBrowserUpdater = new ya.browserUpdater.init({"lang":"ru","browsers":{"yabrowser":"16.4","chrome":"50","ie":"11","opera":"49","safari":"9.1","fx":"50","iron":"35","flock":"Infinity","palemoon":"25","camino":"Infinity","maxthon":"4.5","seamonkey":"2.3"},"theme":"red"});</script>
<script src="assets/site/slick/slick.min.js"></script>
<script src="assets/site/js/jquery.magnific-popup.min.js"></script>
<script src="assets/site/js/wow.min.js"></script>
<script src="assets/site/js/custom.js"></script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => ' <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
          crossorigin="anonymous"></script>
<script src="https://yastatic.net/browser-updater/v1/script.js" charset="utf-8"></script><script>var yaBrowserUpdater = new ya.browserUpdater.init({"lang":"ru","browsers":{"yabrowser":"16.4","chrome":"50","ie":"11","opera":"49","safari":"9.1","fx":"50","iron":"35","flock":"Infinity","palemoon":"25","camino":"Infinity","maxthon":"4.5","seamonkey":"2.3"},"theme":"red"});</script>
<script src="assets/site/slick/slick.min.js"></script>
<script src="assets/site/js/jquery.magnific-popup.min.js"></script>
<script src="assets/site/js/wow.min.js"></script>
<script src="assets/site/js/custom.js"></script>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'dateY' => 
      array (
        'fields' => 
        array (
          'id' => 49,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'dateY',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => 'echo date(Y);',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => 'echo date(Y);',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'Register' => 
      array (
        'fields' => 
        array (
          'id' => 46,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Register',
          'description' => 'Handles forms for registering users on the front-end.',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '/**
 * Register
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Register Snippet. Handles User registrations.
 * 
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Register\');
$output = $controller->run($scriptProperties);
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'submitVar' => 
            array (
              'name' => 'submitVar',
              'desc' => 'prop_register.submitvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The var to check for to load the Register functionality. If empty or set to false, Register will process the form on all POST requests.',
              'area_trans' => '',
            ),
            'usergroups' => 
            array (
              'name' => 'usergroups',
              'desc' => 'prop_register.usergroups_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. A comma-separated list of User Group names or IDs to add the newly-registered User to.',
              'area_trans' => '',
            ),
            'usergroupsField' => 
            array (
              'name' => 'usergroupsField',
              'desc' => 'prop_register.usergroupsfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use to specify the User Group(s) to automatically add the new User to. Only used if this value is not blank.',
              'area_trans' => '',
            ),
            'submittedResourceId' => 
            array (
              'name' => 'submittedResourceId',
              'desc' => 'prop_register.submittedresourceid_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will redirect to the specified Resource after the User submits the registration form.',
              'area_trans' => '',
            ),
            'usernameField' => 
            array (
              'name' => 'usernameField',
              'desc' => 'prop_register.usernamefield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'username',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use for the new User\'s username.',
              'area_trans' => '',
            ),
            'passwordField' => 
            array (
              'name' => 'passwordField',
              'desc' => 'prop_register.passwordfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'password',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use for the new User\'s password.',
              'area_trans' => '',
            ),
            'validatePassword' => 
            array (
              'name' => 'validatePassword',
              'desc' => 'prop_register.validatepassword_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to validate the sent password when registering. Recommended to leave this Yes unless you are generating your own password in a hook.',
              'area_trans' => '',
            ),
            'generatePassword' => 
            array (
              'name' => 'generatePassword',
              'desc' => 'prop_register.generatepassword_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to Yes, Register will generate a random password for the user, overwriting any passed password. Useful for automatic generation of passwords.',
              'area_trans' => '',
            ),
            'trimPassword' => 
            array (
              'name' => 'trimPassword',
              'desc' => 'prop_register.trimpassword_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to Yes, Register will trim the submitted password for whitespace.',
              'area_trans' => '',
            ),
            'ensurePasswordStrength' => 
            array (
              'name' => 'ensurePasswordStrength',
              'desc' => 'prop_register.ensurePasswordStrength_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set to Yes, Register will ensure the user enters a strong enough password. Strong passwords are passwords with multiple words or non-alphabetic characters in them.',
              'area_trans' => '',
            ),
            'passwordWordSeparator' => 
            array (
              'name' => 'passwordWordSeparator',
              'desc' => 'prop_register.passwordWordSeparator_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => ' ',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If ensurePasswordStrength is set to Yes, this will be the separator between words when determining how many words are in a supplied password.',
              'area_trans' => '',
            ),
            'minimumStrongPasswordWordCount' => 
            array (
              'name' => 'minimumStrongPasswordWordCount',
              'desc' => 'prop_register.minimumStrongPasswordWordCount_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '3',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If ensurePasswordStrength is set to Yes, if a supplied password has this many words, then it will be consider a strong password.',
              'area_trans' => '',
            ),
            'maximumPossibleStrongerPasswords' => 
            array (
              'name' => 'maximumPossibleStrongerPasswords',
              'desc' => 'prop_register.maximumPossibleStrongerPasswords_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '25',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If ensurePasswordStrength is set to Yes, then this is the maximum amount of suggestions that Register can find to consider the supplied password "strong". Making this number higher makes the check more lenient; lower makes it tougher.',
              'area_trans' => '',
            ),
            'ensurePasswordStrengthSuggestions' => 
            array (
              'name' => 'ensurePasswordStrengthSuggestions',
              'desc' => 'prop_register.ensurePasswordStrengthSuggestions_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'prop_register.ensurePasswordStrengthSuggestions_desc',
              'area_trans' => '',
            ),
            'allowedFields' => 
            array (
              'name' => 'allowedFields',
              'desc' => 'prop_register.allowedfields_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will limit the fields that are allowed to be set on the newly created user to this comma-separated list. Also restricts extended fields.',
              'area_trans' => '',
            ),
            'emailField' => 
            array (
              'name' => 'emailField',
              'desc' => 'prop_register.emailfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The name of the field to use for the new User\'s email address.',
              'area_trans' => '',
            ),
            'persistParams' => 
            array (
              'name' => 'persistParams',
              'desc' => 'prop_register.persistparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. A JSON object of parameters to persist across the register process. Useful when using redirect on ConfirmRegister to redirect to another page (eg, for shopping carts).',
              'area_trans' => '',
            ),
            'preHooks' => 
            array (
              'name' => 'preHooks',
              'desc' => 'prop_register.prehooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, before the form passes validation. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'postHooks' => 
            array (
              'name' => 'postHooks',
              'desc' => 'prop_register.posthooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, after the user has been registered. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'useExtended' => 
            array (
              'name' => 'useExtended',
              'desc' => 'prop_register.useextended_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to set any extra fields in the form to the Profiles extended field. This can be useful for storing extra user fields.',
              'area_trans' => '',
            ),
            'excludeExtended' => 
            array (
              'name' => 'excludeExtended',
              'desc' => 'prop_register.excludeextended_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of fields to exclude from setting as extended fields.',
              'area_trans' => '',
            ),
            'activation' => 
            array (
              'name' => 'activation',
              'desc' => 'prop_register.activation_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to require activation for proper registration. If true, users will not be marked active until they have activated their account. Defaults to true. Will only work if the registration form passes an email field.',
              'area_trans' => '',
            ),
            'activationttl' => 
            array (
              'name' => 'activationttl',
              'desc' => 'prop_register.activationttl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '180',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Number of minutes until the activation email expires. Defaults to 3 hours.',
              'area_trans' => '',
            ),
            'activationResourceId' => 
            array (
              'name' => 'activationResourceId',
              'desc' => 'prop_register.activationresourceid_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '1',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The Resource ID where the ConfirmRegister snippet for activation is located.',
              'area_trans' => '',
            ),
            'activationEmail' => 
            array (
              'name' => 'activationEmail',
              'desc' => 'prop_register.activationemail_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If set, will sent activation emails to this address instead of the newly registered user\'s address.',
              'area_trans' => '',
            ),
            'activationEmailSubject' => 
            array (
              'name' => 'activationEmailSubject',
              'desc' => 'prop_register.activationemailsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The subject of the activation email.',
              'area_trans' => '',
            ),
            'activationEmailTplType' => 
            array (
              'name' => 'activationEmailTplType',
              'desc' => 'prop_register.activationemailtpltype_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'modChunk',
                  'text' => 'opt_register.chunk',
                  'name' => 'Chunk',
                ),
                1 => 
                array (
                  'value' => 'file',
                  'text' => 'opt_register.file',
                  'name' => 'File',
                ),
                2 => 
                array (
                  'value' => 'inline',
                  'text' => 'opt_register.inline',
                  'name' => 'Inline',
                ),
                3 => 
                array (
                  'value' => 'embedded',
                  'text' => 'opt_register.embedded',
                  'name' => 'Embedded',
                ),
              ),
              'value' => 'modChunk',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The type of tpls being provided for the activation email.',
              'area_trans' => '',
            ),
            'activationEmailTpl' => 
            array (
              'name' => 'activationEmailTpl',
              'desc' => 'prop_register.activationemailtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'lgnActivateEmailTpl',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The activation email tpl.',
              'area_trans' => '',
            ),
            'activationEmailTplAlt' => 
            array (
              'name' => 'activationEmailTplAlt',
              'desc' => 'prop_register.activationemailtplalt_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => '(Optional) Plain-text alternative for the activation email tpl.',
              'area_trans' => '',
            ),
            'moderatedResourceId' => 
            array (
              'name' => 'moderatedResourceId',
              'desc' => 'prop_register.moderatedresourceid_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If a prehook sets the user as moderated, then send to this Resource instead of the submittedResourceId. Leave blank to bypass.',
              'area_trans' => '',
            ),
            'removeExpiredRegistrations' => 
            array (
              'name' => 'removeExpiredRegistrations',
              'desc' => 'prop_register.removeexpiredregistrations_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If true, will remove registered users that have an expired, unused activation request and have never activated. It is recommended to leave this on to prevent spam.',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'prop_register.placeholderprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'The prefix to use for all placeholders set by this snippet.',
              'area_trans' => '',
            ),
            'recaptchaTheme' => 
            array (
              'name' => 'recaptchaTheme',
              'desc' => 'prop_register.recaptchatheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => 'red',
                  'text' => 'opt_register.red',
                  'name' => 'Red',
                ),
                1 => 
                array (
                  'value' => 'white',
                  'text' => 'opt_register.white',
                  'name' => 'White',
                ),
                2 => 
                array (
                  'value' => 'clean',
                  'text' => 'opt_register.clean',
                  'name' => 'Clean',
                ),
                3 => 
                array (
                  'value' => 'blackglass',
                  'text' => 'opt_register.blackglass',
                  'name' => 'Black Glass',
                ),
              ),
              'value' => 'clean',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `recaptcha` is set as a preHook, this will select a theme for the reCaptcha widget.',
              'area_trans' => '',
            ),
            'mathMinRange' => 
            array (
              'name' => 'mathMinRange',
              'desc' => 'prop_register.mathminrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the minimum range for each number in the equation.',
              'area_trans' => '',
            ),
            'mathMaxRange' => 
            array (
              'name' => 'mathMaxRange',
              'desc' => 'prop_register.mathmaxrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '100',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the maximum range for each number in the equation.',
              'area_trans' => '',
            ),
            'mathField' => 
            array (
              'name' => 'mathField',
              'desc' => 'prop_register.mathfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'math',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the input field for the answer.',
              'area_trans' => '',
            ),
            'mathOp1Field' => 
            array (
              'name' => 'mathOp1Field',
              'desc' => 'prop_register.mathop1field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op1',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the field for the 1st number in the equation.',
              'area_trans' => '',
            ),
            'mathOp2Field' => 
            array (
              'name' => 'mathOp2Field',
              'desc' => 'prop_register.mathop2field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op2',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the field for the 2nd number in the equation.',
              'area_trans' => '',
            ),
            'mathOperatorField' => 
            array (
              'name' => 'mathOperatorField',
              'desc' => 'prop_register.mathoperatorfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'operator',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a preHook, the name of the field for the operator in the equation.',
              'area_trans' => '',
            ),
            'preserveFieldsAfterRegister' => 
            array (
              'name' => 'preserveFieldsAfterRegister',
              'desc' => 'prop_register.preservefieldsafterregister_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If true, data of registration fields will be saved after successfull registration. To reset fields data, set to false',
              'area_trans' => '',
            ),
            'redirectUnsetDefaultParams' => 
            array (
              'name' => 'redirectUnsetDefaultParams',
              'desc' => 'prop_register.redirectUnsetDefaultParam_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'If true, default parameters will be removed from redirected urls.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Register
 *
 * Copyright 2010 by Shaun McCormick <shaun@modx.com>
 *
 * Register is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * Register is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Register; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package login
 */
/**
 * MODx Register Snippet. Handles User registrations.
 * 
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Register\');
$output = $controller->run($scriptProperties);
return $output;',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);