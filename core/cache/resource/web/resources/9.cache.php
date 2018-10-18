<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 9,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Личный кабинет',
    'longtitle' => '',
    'description' => '',
    'alias' => 'lichnyij-kabinet',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 1,
    'introtext' => '',
    'content' => '[[!Profile? &prefix=`usr.`]]

<div class="form-index form-login">
    <div class="panel-body">
		<p><span>Имя пользователя: </span> [[+usr.username]]</p>
		<p><span>Телефон: </span>[[+usr.phone]]</p>
		<p><span>Мобильный телефон: </span>[[+usr.mobilephone]]</p>
		<p><span>Email: </span>[[+usr.email]]</p>
		<hr>
		<p><span>Адрес: </span>[[+usr.address]]</p>
		<p><span>Страна: </span>[[+usr.country]]</p>
		<p><span>Город: </span>[[+usr.city]]</p>
		<p><span>Веб-сайт: </span>[[+usr.website]]</p>
		<hr>
		<div class="col-md-6 text-center">
			<button><a href="[[~13]]">Изменить пароль</a></button>
		</div>
		<div class="col-md-6 text-center">
			<button><a href="[[~14]]">Редактировать</a></button>
		</div>
	</div>
</div>',
    'richtext' => 0,
    'template' => 4,
    'menuindex' => 5,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1539623990,
    'editedby' => 1,
    'editedon' => 1539805859,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1539623940,
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
    'uri' => 'lichnyij-kabinet/',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '<!DOCTYPE html>
<html lang="ru">
<head>
   <title>Личный кабинет - EBHA вебинары и удаленное обучение</title>
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
    <div id="main-lk">
       <div class="container index-oplet">
                <header>
    <div class="logo"><a href="/"><img class="bk-logo" src="assets/site/img/logo.svg" alt=""><img class="wt-logo" src="assets/site/img/logo_wt.svg" alt=""></a>
    <span><em>H</em>eartmann<br><em>B</em>usiness<br><em>A</em>cademy</span>
    </div>
    <div class="login">
        <div class="sign-in" title="Выйти"><a href="avtorizacziya/?service=logout">
            <img src="assets/site/img/logout.svg" alt="">
            <p>Log out</p>
        </a>
        </div>
        <div class="sign-up" title="Редактор данных"><a href="lichnyij-kabinet/">
            <img src="assets/site/img/settings.svg" alt="">
            <p>Settings</p>
        </a></div>
    </div>
</header>
            <div class="mar-top">
                [[!Profile? &prefix=`usr.`]]

<div class="form-index form-login">
    <div class="panel-body">
		<p><span>Имя пользователя: </span> [[+usr.username]]</p>
		<p><span>Телефон: </span>[[+usr.phone]]</p>
		<p><span>Мобильный телефон: </span>[[+usr.mobilephone]]</p>
		<p><span>Email: </span>[[+usr.email]]</p>
		<hr>
		<p><span>Адрес: </span>[[+usr.address]]</p>
		<p><span>Страна: </span>[[+usr.country]]</p>
		<p><span>Город: </span>[[+usr.city]]</p>
		<p><span>Веб-сайт: </span>[[+usr.website]]</p>
		<hr>
		<div class="col-md-6 text-center">
			<button><a href="izmenenie-parolya.html">Изменить пароль</a></button>
		</div>
		<div class="col-md-6 text-center">
			<button><a href="redaktirovanie-dannyix.html">Редактировать</a></button>
		</div>
	</div>
</div>
            </div>
        </div>
        <div class="bg-img"></div>
    </div>
        <footer class="lk-in--footer">
    <div class="container">
        <div class="oplet-lk">
          <div class="flex-up">
              <div class="contacts-us">
                  Contacts block:
              </div>
              <div class="social"><ul>
                  <li><a href=""><img src="assets/site/img/vk.png" alt=""></a></li>
                  <li><a href=""><img src="assets/site/img/insta.png" alt=""></a></li>
              </ul></div>
          </div>
           <div class="flex-down">
               <div class="ph">
                   <p>Ph.: <a href="tel:8 (928) 127-77-33">8 (928) 127-77-33</a></p>
                   <p>e-mail: <a href="mailto:mishagorban@yandex.ru">mishagorban@yandex.ru</a></p>
               </div>
                <div class="copyright">
                    <p>
                        Все права защищены. Сайт подготовлен <a target="_blank" href="http://ewal-web.ru">ewal-web.ru</a>
                    </p>
                    <p>Copyright © 2018</p>
                </div>
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
  'resourceGroups' => 
  array (
    4 => 
    array (
      'id' => 4,
      'document_group' => 1,
      'document' => 9,
    ),
  ),
  'policyCache' => 
  array (
    'modAccessResourceGroup' => 
    array (
      1 => 
      array (
        0 => 
        array (
          'principal' => '3',
          'authority' => '9999',
          'policy' => 
          array (
            'load' => true,
            'list' => true,
            'view' => true,
          ),
        ),
      ),
    ),
  ),
  'elementCache' => 
  array (
    '[[$head]]' => '<title>Личный кабинет - EBHA вебинары и удаленное обучение</title>
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
    '[[~8? &service=logout]]' => 'avtorizacziya/?service=logout',
    '[[$headerLk]]' => '<header>
    <div class="logo"><a href="/"><img class="bk-logo" src="assets/site/img/logo.svg" alt=""><img class="wt-logo" src="assets/site/img/logo_wt.svg" alt=""></a>
    <span><em>H</em>eartmann<br><em>B</em>usiness<br><em>A</em>cademy</span>
    </div>
    <div class="login">
        <div class="sign-in" title="Выйти"><a href="avtorizacziya/?service=logout">
            <img src="assets/site/img/logout.svg" alt="">
            <p>Log out</p>
        </a>
        </div>
        <div class="sign-up" title="Редактор данных"><a href="lichnyij-kabinet/">
            <img src="assets/site/img/settings.svg" alt="">
            <p>Settings</p>
        </a></div>
    </div>
</header>',
    '[[dateY]]' => '2018',
    '[[$footerLk]]' => '<footer class="lk-in--footer">
    <div class="container">
        <div class="oplet-lk">
          <div class="flex-up">
              <div class="contacts-us">
                  Contacts block:
              </div>
              <div class="social"><ul>
                  <li><a href=""><img src="assets/site/img/vk.png" alt=""></a></li>
                  <li><a href=""><img src="assets/site/img/insta.png" alt=""></a></li>
              </ul></div>
          </div>
           <div class="flex-down">
               <div class="ph">
                   <p>Ph.: <a href="tel:8 (928) 127-77-33">8 (928) 127-77-33</a></p>
                   <p>e-mail: <a href="mailto:mishagorban@yandex.ru">mishagorban@yandex.ru</a></p>
               </div>
                <div class="copyright">
                    <p>
                        Все права защищены. Сайт подготовлен <a target="_blank" href="http://ewal-web.ru">ewal-web.ru</a>
                    </p>
                    <p>Copyright © 2018</p>
                </div>
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
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'headerLk' => 
      array (
        'fields' => 
        array (
          'id' => 21,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'headerLk',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '<header>
    <div class="logo"><a href="/"><img class="bk-logo" src="assets/site/img/logo.svg" alt=""><img class="wt-logo" src="assets/site/img/logo_wt.svg" alt=""></a>
    <span><em>H</em>eartmann<br><em>B</em>usiness<br><em>A</em>cademy</span>
    </div>
    <div class="login">
        <div class="sign-in" title="Выйти"><a href="[[~8? &service=logout]]">
            <img src="assets/site/img/logout.svg" alt="">
            <p>Log out</p>
        </a>
        </div>
        <div class="sign-up" title="Редактор данных"><a href="[[~9]]">
            <img src="assets/site/img/settings.svg" alt="">
            <p>Settings</p>
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
        <div class="sign-in" title="Выйти"><a href="[[~8? &service=logout]]">
            <img src="assets/site/img/logout.svg" alt="">
            <p>Log out</p>
        </a>
        </div>
        <div class="sign-up" title="Редактор данных"><a href="[[~9]]">
            <img src="assets/site/img/settings.svg" alt="">
            <p>Settings</p>
        </a></div>
    </div>
</header>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'footerLk' => 
      array (
        'fields' => 
        array (
          'id' => 20,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footerLk',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '<footer class="lk-in--footer">
    <div class="container">
        <div class="oplet-lk">
          <div class="flex-up">
              <div class="contacts-us">
                  Contacts block:
              </div>
              <div class="social"><ul>
                  <li><a href=""><img src="assets/site/img/vk.png" alt=""></a></li>
                  <li><a href=""><img src="assets/site/img/insta.png" alt=""></a></li>
              </ul></div>
          </div>
           <div class="flex-down">
               <div class="ph">
                   <p>Ph.: <a href="tel:[[++phoneConf]]">[[++phoneConf]]</a></p>
                   <p>e-mail: <a href="mailto:[[++mailConf]]">[[++mailConf]]</a></p>
               </div>
                <div class="copyright">
                    <p>
                        Все права защищены. Сайт подготовлен <a target="_blank" href="http://ewal-web.ru">ewal-web.ru</a>
                    </p>
                    <p>Copyright © [[dateY]]</p>
                </div>
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
          'content' => '<footer class="lk-in--footer">
    <div class="container">
        <div class="oplet-lk">
          <div class="flex-up">
              <div class="contacts-us">
                  Contacts block:
              </div>
              <div class="social"><ul>
                  <li><a href=""><img src="assets/site/img/vk.png" alt=""></a></li>
                  <li><a href=""><img src="assets/site/img/insta.png" alt=""></a></li>
              </ul></div>
          </div>
           <div class="flex-down">
               <div class="ph">
                   <p>Ph.: <a href="tel:[[++phoneConf]]">[[++phoneConf]]</a></p>
                   <p>e-mail: <a href="mailto:[[++mailConf]]">[[++mailConf]]</a></p>
               </div>
                <div class="copyright">
                    <p>
                        Все права защищены. Сайт подготовлен <a target="_blank" href="http://ewal-web.ru">ewal-web.ru</a>
                    </p>
                    <p>Copyright © [[dateY]]</p>
                </div>
            </div>
        </div>
    </div>
</footer>',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
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
          'web' => 
          array (
          ),
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
          'web' => 
          array (
          ),
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
      'Profile' => 
      array (
        'fields' => 
        array (
          'id' => 45,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'Profile',
          'description' => 'Displays Profile data for a User.',
          'editor_type' => 0,
          'category' => 5,
          'cache_type' => 0,
          'snippet' => '/**
 * Profile
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
 * MODx Profile Snippet. Sets Profile data for a user to placeholders
 *
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Profile\');
return $controller->run($scriptProperties);',
          'locked' => false,
          'properties' => 
          array (
            'prefix' => 
            array (
              'name' => 'prefix',
              'desc' => 'prop_profile.prefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'A string to prefix all placeholders for fields that will be set by this Snippet.',
              'area_trans' => '',
            ),
            'user' => 
            array (
              'name' => 'user',
              'desc' => 'prop_profile.user_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Optional. Either a user ID or username. If set, will use this user rather than the currently logged in one.',
              'area_trans' => '',
            ),
            'useExtended' => 
            array (
              'name' => 'useExtended',
              'desc' => 'prop_profile.useextended_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'login:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to set any extra fields in the form to the Profiles extended field. This can be useful for storing extra user fields.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * Profile
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
 * MODx Profile Snippet. Sets Profile data for a user to placeholders
 *
 * @package login
 */
require_once $modx->getOption(\'login.core_path\',null,$modx->getOption(\'core_path\').\'components/login/\').\'model/login/login.class.php\';
$login = new Login($modx,$scriptProperties);

$controller = $login->loadController(\'Profile\');
return $controller->run($scriptProperties);',
        ),
        'policies' => 
        array (
          'web' => 
          array (
          ),
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