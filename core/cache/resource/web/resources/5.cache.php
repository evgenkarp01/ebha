<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 5,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Трансляция',
    'longtitle' => 'On-line трансляция',
    'description' => '',
    'alias' => 'translation',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 1,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 5,
    'menuindex' => 1,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1539623413,
    'editedby' => 1,
    'editedon' => 1540302648,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1539623400,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'translation.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'translate' => 
    array (
      0 => 'translate',
      1 => '3tyc_wtqC80',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    'thema' => 
    array (
      0 => 'thema',
      1 => 'Тема: Горе от ума',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    '_content' => '<!DOCTYPE html>
<html lang="ru">
<head>
    
    <title>Трансляция - EBHA вебинары и удаленное обучение</title>
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
            <div class="fl-index">
                <div class="col-pol-l translation">
                        <nav class="main-menu">
    <ul>
        <ul class=""><li class="first"><a href="xranilishhe.html" >Хранилище</a></li><li class="active"><a href="translation.html" >Трансляция</a></li><li class="last"><a href="bitva-klanov.html" >Битва кланов</a></li></ul>
    </ul>
</nav>
                        
                        <div class="r-context mt-in">
                            <div class="video">
                                <div class="video__active">
                                    <div class="video__wrapper">
                                        <iframe id="frameID" width="845" height="510" src="https://www.youtube.com/embed/3tyc_wtqC80?rel=0&showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                                        
                                    </div>
                                </div>
    	                    </div>
    	                    <div class="thema-webinar">
    	                        <h2>Тема: Горе от ума</h2>
    	                    </div>
                        </div>
                    
                </div>
                <div class="col-pol-r chat">
                    <div class="ttl">
                        <h1>On-line трансляция</h1>
                    </div>
                    <div class="chat-oplet mt-in">
                        <div class="chat-block">
                            <div id="html-chat">

 
                                <div id="msg-box">
                                    <ul></ul>
                                </div>
                                <form id="t-box" action="?" style="">
                                    <input type="hidden" class=\'name-chat\' value="[[!+modx.user.id:userinfo=`fullname`]]" >
                                    <textarea class=\'msg\' placeholder="Сообщение"></textarea>
                                    <div class="btn btn-wt offset-btn-wt"><input type="submit" value="Отправить"></div>
                                </form>
                                [[!+modx.user.username:is=`ewal`:then=` <form action="" id="del-chat">
    <input type="hidden" value="clean" name="delete-from-chat">
    <button id="deleteFromChat">Удалить чат!</button>
    <div class="result"></div>
</form>`]]
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-img bg-img-lk"></div>
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
        <script src="assets/site/js/jquery.timers.min.js" ></script>
        <script src="assets/site/js/jquery.cookie.js" ></script>
        <script>$(function(){
  //Если куки с именем не пустые, тащим имя и заполняем форму с именем
  
  if($.cookie("name")!=""){$("#t-box input[class=\'name\']").attr("value", $.cookie("name"));}
  
  //Переменная отвечает за id последнего пришедшего сообщения
  
  var mid = 0;
  
  //Функция обновления сообщений чата
  
  function get_message_chat(){
  
    //Генерируем Ajax запрос
    $.ajaxSetup({url: "assets/site/php/chat.php",global: true,type: "GET",data: "event=get&id="+mid+"&t="+
        (new Date).getTime()});
        
    //Отправляем запрос
    $.ajax({
    
      //Если все удачно
      success: function(msg_j){
      
        //Если есть сообщения в принятых данных
        if(msg_j.length > 2){
          //Парсим JSON
          var obj = JSON.parse(msg_j);
          //Проганяем циклом по всем принятым сообщениям
          for(var i=0; i < obj.length; i ++){
            //Присваиваем переменной ID сообщения
            mid = obj[i].id;
            //Добавляем в чат сообщение
            $("#msg-box ul").append("<li><b>"+obj[i].name+":</b> "+obj[i].msg+"</li>");
          }
          //Прокручиваем чат до самого конца
          $("#msg-box ul").scrollTop(2000);
        }
      }
    });
  }
 
  //Первый запрос к серверу. Принимаем сообщения
  get_message_chat();
 
  //Обновляем чат каждые две секунды
  $("#t-box").everyTime(2000, \'refresh\', function() {
    get_message_chat();
  });
 
  //Событие отправки формы
  $("#t-box").submit(function() {
    //Запрашиваем имя у юзера.
    if($("#t-box input[class=\'name-chat\']").attr("value") == ""){ alert("Пожалуйста, введите свое имя!")}else{
      //Добавляем в куки имя
      $.cookie("nameChat", $("#t-box input[class=\'name-chat\']").attr("value"));
 
      //Тащим сообщение из формы
      var msg = $("#t-box textarea[class=\'msg\']").val();
      //Если сообщение не пустое
      if(msg != ""){
        //Чистим форму
        $("#t-box textarea[class=\'msg\']").attr("value", "");
        //Генерируем Ajax запрос
        $.ajaxSetup({url: "assets/site/php/chat.php", type: "GET",data: "event=set&name="+
            $("#t-box input[class=\'name-chat\']").val()+"&msg="+msg});
        //Отправляем запрос
        $.ajax();
      }
    }
    //Возвращаем false, чтобы форма не отправлялась.
    return false;
  });
});</script>
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
    2 => 
    array (
      'id' => 2,
      'document_group' => 1,
      'document' => 5,
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
    '[[$head]]' => '<title>Трансляция - EBHA вебинары и удаленное обучение</title>
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
    '[[pdoMenu?
        	&level=`1`
        	&parents=`1`
        	&tpl=`@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a></li>`
        ]]' => '<ul class=""><li class="first"><a href="xranilishhe.html" >Хранилище</a></li><li class="active"><a href="translation.html" >Трансляция</a></li><li class="last"><a href="bitva-klanov.html" >Битва кланов</a></li></ul>',
    '[[$mainMenu]]' => '<nav class="main-menu">
    <ul>
        <ul class=""><li class="first"><a href="xranilishhe.html" >Хранилище</a></li><li class="active"><a href="translation.html" >Трансляция</a></li><li class="last"><a href="bitva-klanov.html" >Битва кланов</a></li></ul>
    </ul>
</nav>',
    '[[$privateBtn]]' => ' <form action="" id="del-chat">
    <input type="hidden" value="clean" name="delete-from-chat">
    <button id="deleteFromChat">Удалить чат!</button>
    <div class="result"></div>
</form>',
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
    '[[$chatJjs]]' => '$(function(){
  //Если куки с именем не пустые, тащим имя и заполняем форму с именем
  
  if($.cookie("name")!=""){$("#t-box input[class=\'name\']").attr("value", $.cookie("name"));}
  
  //Переменная отвечает за id последнего пришедшего сообщения
  
  var mid = 0;
  
  //Функция обновления сообщений чата
  
  function get_message_chat(){
  
    //Генерируем Ajax запрос
    $.ajaxSetup({url: "assets/site/php/chat.php",global: true,type: "GET",data: "event=get&id="+mid+"&t="+
        (new Date).getTime()});
        
    //Отправляем запрос
    $.ajax({
    
      //Если все удачно
      success: function(msg_j){
      
        //Если есть сообщения в принятых данных
        if(msg_j.length > 2){
          //Парсим JSON
          var obj = JSON.parse(msg_j);
          //Проганяем циклом по всем принятым сообщениям
          for(var i=0; i < obj.length; i ++){
            //Присваиваем переменной ID сообщения
            mid = obj[i].id;
            //Добавляем в чат сообщение
            $("#msg-box ul").append("<li><b>"+obj[i].name+":</b> "+obj[i].msg+"</li>");
          }
          //Прокручиваем чат до самого конца
          $("#msg-box ul").scrollTop(2000);
        }
      }
    });
  }
 
  //Первый запрос к серверу. Принимаем сообщения
  get_message_chat();
 
  //Обновляем чат каждые две секунды
  $("#t-box").everyTime(2000, \'refresh\', function() {
    get_message_chat();
  });
 
  //Событие отправки формы
  $("#t-box").submit(function() {
    //Запрашиваем имя у юзера.
    if($("#t-box input[class=\'name-chat\']").attr("value") == ""){ alert("Пожалуйста, введите свое имя!")}else{
      //Добавляем в куки имя
      $.cookie("nameChat", $("#t-box input[class=\'name-chat\']").attr("value"));
 
      //Тащим сообщение из формы
      var msg = $("#t-box textarea[class=\'msg\']").val();
      //Если сообщение не пустое
      if(msg != ""){
        //Чистим форму
        $("#t-box textarea[class=\'msg\']").attr("value", "");
        //Генерируем Ajax запрос
        $.ajaxSetup({url: "assets/site/php/chat.php", type: "GET",data: "event=set&name="+
            $("#t-box input[class=\'name-chat\']").val()+"&msg="+msg});
        //Отправляем запрос
        $.ajax();
      }
    }
    //Возвращаем false, чтобы форма не отправлялась.
    return false;
  });
});',
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
      'mainMenu' => 
      array (
        'fields' => 
        array (
          'id' => 22,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'mainMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '<nav class="main-menu">
    <ul>
        [[pdoMenu?
        	&level=`1`
        	&parents=`1`
        	&tpl=`@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a></li>`
        ]]
    </ul>
</nav>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<nav class="main-menu">
    <ul>
        [[pdoMenu?
        	&level=`1`
        	&parents=`1`
        	&tpl=`@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a></li>`
        ]]
    </ul>
</nav>',
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
      'privateBtn' => 
      array (
        'fields' => 
        array (
          'id' => 31,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'privateBtn',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => ' <form action="" id="del-chat">
    <input type="hidden" value="clean" name="delete-from-chat">
    <button id="deleteFromChat">Удалить чат!</button>
    <div class="result"></div>
</form>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => ' <form action="" id="del-chat">
    <input type="hidden" value="clean" name="delete-from-chat">
    <button id="deleteFromChat">Удалить чат!</button>
    <div class="result"></div>
</form>',
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
      'chatJjs' => 
      array (
        'fields' => 
        array (
          'id' => 30,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'chatJjs',
          'description' => '',
          'editor_type' => 0,
          'category' => 8,
          'cache_type' => 0,
          'snippet' => '$(function(){
  //Если куки с именем не пустые, тащим имя и заполняем форму с именем
  
  if($.cookie("name")!=""){$("#t-box input[class=\'name\']").attr("value", $.cookie("name"));}
  
  //Переменная отвечает за id последнего пришедшего сообщения
  
  var mid = 0;
  
  //Функция обновления сообщений чата
  
  function get_message_chat(){
  
    //Генерируем Ajax запрос
    $.ajaxSetup({url: "assets/site/php/chat.php",global: true,type: "GET",data: "event=get&id="+mid+"&t="+
        (new Date).getTime()});
        
    //Отправляем запрос
    $.ajax({
    
      //Если все удачно
      success: function(msg_j){
      
        //Если есть сообщения в принятых данных
        if(msg_j.length > 2){
          //Парсим JSON
          var obj = JSON.parse(msg_j);
          //Проганяем циклом по всем принятым сообщениям
          for(var i=0; i < obj.length; i ++){
            //Присваиваем переменной ID сообщения
            mid = obj[i].id;
            //Добавляем в чат сообщение
            $("#msg-box ul").append("<li><b>"+obj[i].name+":</b> "+obj[i].msg+"</li>");
          }
          //Прокручиваем чат до самого конца
          $("#msg-box ul").scrollTop(2000);
        }
      }
    });
  }
 
  //Первый запрос к серверу. Принимаем сообщения
  get_message_chat();
 
  //Обновляем чат каждые две секунды
  $("#t-box").everyTime(2000, \'refresh\', function() {
    get_message_chat();
  });
 
  //Событие отправки формы
  $("#t-box").submit(function() {
    //Запрашиваем имя у юзера.
    if($("#t-box input[class=\'name-chat\']").attr("value") == ""){ alert("Пожалуйста, введите свое имя!")}else{
      //Добавляем в куки имя
      $.cookie("nameChat", $("#t-box input[class=\'name-chat\']").attr("value"));
 
      //Тащим сообщение из формы
      var msg = $("#t-box textarea[class=\'msg\']").val();
      //Если сообщение не пустое
      if(msg != ""){
        //Чистим форму
        $("#t-box textarea[class=\'msg\']").attr("value", "");
        //Генерируем Ajax запрос
        $.ajaxSetup({url: "assets/site/php/chat.php", type: "GET",data: "event=set&name="+
            $("#t-box input[class=\'name-chat\']").val()+"&msg="+msg});
        //Отправляем запрос
        $.ajax();
      }
    }
    //Возвращаем false, чтобы форма не отправлялась.
    return false;
  });
});',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '$(function(){
  //Если куки с именем не пустые, тащим имя и заполняем форму с именем
  
  if($.cookie("name")!=""){$("#t-box input[class=\'name\']").attr("value", $.cookie("name"));}
  
  //Переменная отвечает за id последнего пришедшего сообщения
  
  var mid = 0;
  
  //Функция обновления сообщений чата
  
  function get_message_chat(){
  
    //Генерируем Ajax запрос
    $.ajaxSetup({url: "assets/site/php/chat.php",global: true,type: "GET",data: "event=get&id="+mid+"&t="+
        (new Date).getTime()});
        
    //Отправляем запрос
    $.ajax({
    
      //Если все удачно
      success: function(msg_j){
      
        //Если есть сообщения в принятых данных
        if(msg_j.length > 2){
          //Парсим JSON
          var obj = JSON.parse(msg_j);
          //Проганяем циклом по всем принятым сообщениям
          for(var i=0; i < obj.length; i ++){
            //Присваиваем переменной ID сообщения
            mid = obj[i].id;
            //Добавляем в чат сообщение
            $("#msg-box ul").append("<li><b>"+obj[i].name+":</b> "+obj[i].msg+"</li>");
          }
          //Прокручиваем чат до самого конца
          $("#msg-box ul").scrollTop(2000);
        }
      }
    });
  }
 
  //Первый запрос к серверу. Принимаем сообщения
  get_message_chat();
 
  //Обновляем чат каждые две секунды
  $("#t-box").everyTime(2000, \'refresh\', function() {
    get_message_chat();
  });
 
  //Событие отправки формы
  $("#t-box").submit(function() {
    //Запрашиваем имя у юзера.
    if($("#t-box input[class=\'name-chat\']").attr("value") == ""){ alert("Пожалуйста, введите свое имя!")}else{
      //Добавляем в куки имя
      $.cookie("nameChat", $("#t-box input[class=\'name-chat\']").attr("value"));
 
      //Тащим сообщение из формы
      var msg = $("#t-box textarea[class=\'msg\']").val();
      //Если сообщение не пустое
      if(msg != ""){
        //Чистим форму
        $("#t-box textarea[class=\'msg\']").attr("value", "");
        //Генерируем Ajax запрос
        $.ajaxSetup({url: "assets/site/php/chat.php", type: "GET",data: "event=set&name="+
            $("#t-box input[class=\'name-chat\']").val()+"&msg="+msg});
        //Отправляем запрос
        $.ajax();
      }
    }
    //Возвращаем false, чтобы форма не отправлялась.
    return false;
  });
});',
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
      'pdoMenu' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pdoMenu',
          'description' => '',
          'editor_type' => 0,
          'category' => 3,
          'cache_type' => 0,
          'snippet' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
          'locked' => false,
          'properties' => 
          array (
            'showLog' => 
            array (
              'name' => 'showLog',
              'desc' => 'pdotools_prop_showLog',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать дополнительную информацию о работе сниппета. Только для авторизованных в контекте "mgr".',
              'area_trans' => '',
            ),
            'fastMode' => 
            array (
              'name' => 'fastMode',
              'desc' => 'pdotools_prop_fastMode',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Быстрый режим обработки чанков. Все необработанные теги (условия, сниппеты и т.п.) будут вырезаны.',
              'area_trans' => '',
            ),
            'level' => 
            array (
              'name' => 'level',
              'desc' => 'pdotools_prop_level',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Уровень генерируемого меню.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'pdotools_prop_parents',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список родителей, через запятую, для поиска результатов. По умолчанию выборка ограничена текущим родителем. Если поставить 0 - выборка не ограничивается. Если id родителя начинается с дефиса, он и его потомки исключается из выборки.',
              'area_trans' => '',
            ),
            'displayStart' => 
            array (
              'name' => 'displayStart',
              'desc' => 'pdotools_prop_displayStart',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ начальных узлов меню. Полезно при указании более одного "parents".',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'pdotools_prop_resources',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список ресурсов, через запятую, для вывода в результатах. Если id ресурса начинается с дефиса, этот ресурс исключается из выборки.',
              'area_trans' => '',
            ),
            'templates' => 
            array (
              'name' => 'templates',
              'desc' => 'pdotools_prop_templates',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список шаблонов, через запятую, для фильтрации результатов. Если id шаблона начинается с дефиса, ресурсы с ним исключается из выборки.',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'pdotools_prop_context',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение выборки по контексту ресурсов.',
              'area_trans' => '',
            ),
            'cache' => 
            array (
              'name' => 'cache',
              'desc' => 'pdotools_prop_cache',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Кэширование результатов работы сниппета.',
              'area_trans' => '',
            ),
            'cacheTime' => 
            array (
              'name' => 'cacheTime',
              'desc' => 'pdotools_prop_cacheTime',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 3600,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Время актуальности кэша в секундах.',
              'area_trans' => '',
            ),
            'cacheAnonymous' => 
            array (
              'name' => 'cacheAnonymous',
              'desc' => 'pdotools_prop_cacheAnonymous',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить кэширование только для неавторизованных посетителей.',
              'area_trans' => '',
            ),
            'plPrefix' => 
            array (
              'name' => 'plPrefix',
              'desc' => 'pdotools_prop_plPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'wf.',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс для выставляемых плейсхолдеров, по умолчанию "wf.".',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'pdotools_prop_showHidden',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать ресурсы, скрытые в меню.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'pdotools_prop_showUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать неопубликованные ресурсы.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'pdotools_prop_showDeleted',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Показывать удалённые ресурсы.',
              'area_trans' => '',
            ),
            'previewUnpublished' => 
            array (
              'name' => 'previewUnpublished',
              'desc' => 'pdotools_prop_previewUnpublished',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Включить показ неопубликованных документов, если у пользователя есть на это разрешение.',
              'area_trans' => '',
            ),
            'hideSubMenus' => 
            array (
              'name' => 'hideSubMenus',
              'desc' => 'pdotools_prop_hideSubMenus',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Спрятать неактивные ветки меню.',
              'area_trans' => '',
            ),
            'useWeblinkUrl' => 
            array (
              'name' => 'useWeblinkUrl',
              'desc' => 'pdotools_prop_useWeblinkUrl',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => true,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Генерировать ссылку с учетом класса ресурса.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'pdotools_prop_sortdir',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'ASC',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Направление сортировки: по убыванию или возрастанию.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'pdotools_prop_sortby',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'menuindex',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Любое поле ресурса для сортировки, включая ТВ параметр, если он указан в параметре "includeTVs". Можно указывать JSON строку с массивом нескольких полей. Для случайно сортировки укажите "RAND()"',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'pdotools_prop_limit',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Ограничение количества результатов выборки. Можно использовать "0".',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'pdotools_prop_offset',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => 0,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Пропуск результатов от начала.',
              'area_trans' => '',
            ),
            'rowIdPrefix' => 
            array (
              'name' => 'rowIdPrefix',
              'desc' => 'pdotools_prop_rowIdPrefix',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Префикс id="" для выставления идентификатора в чанк.',
              'area_trans' => '',
            ),
            'firstClass' => 
            array (
              'name' => 'firstClass',
              'desc' => 'pdotools_prop_firstClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'first',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для первого пункта меню.',
              'area_trans' => '',
            ),
            'lastClass' => 
            array (
              'name' => 'lastClass',
              'desc' => 'pdotools_prop_lastClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'last',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс последнего пункта меню.',
              'area_trans' => '',
            ),
            'hereClass' => 
            array (
              'name' => 'hereClass',
              'desc' => 'pdotools_prop_hereClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => 'active',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс для активного пункта меню.',
              'area_trans' => '',
            ),
            'parentClass' => 
            array (
              'name' => 'parentClass',
              'desc' => 'pdotools_prop_parentClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс категории меню.',
              'area_trans' => '',
            ),
            'rowClass' => 
            array (
              'name' => 'rowClass',
              'desc' => 'pdotools_prop_rowClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс одной строки меню.',
              'area_trans' => '',
            ),
            'outerClass' => 
            array (
              'name' => 'outerClass',
              'desc' => 'pdotools_prop_outerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс обертки меню.',
              'area_trans' => '',
            ),
            'innerClass' => 
            array (
              'name' => 'innerClass',
              'desc' => 'pdotools_prop_innerClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс внутренних ссылок меню.',
              'area_trans' => '',
            ),
            'levelClass' => 
            array (
              'name' => 'levelClass',
              'desc' => 'pdotools_prop_levelClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс уровня меню. Например, если укажите "level", то будет "level1", "level2" и т.д.',
              'area_trans' => '',
            ),
            'selfClass' => 
            array (
              'name' => 'selfClass',
              'desc' => 'pdotools_prop_selfClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс текущего документа в меню.',
              'area_trans' => '',
            ),
            'webLinkClass' => 
            array (
              'name' => 'webLinkClass',
              'desc' => 'pdotools_prop_webLinkClass',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Класс документа-ссылки.',
              'area_trans' => '',
            ),
            'tplOuter' => 
            array (
              'name' => 'tplOuter',
              'desc' => 'pdotools_prop_tplOuter',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <ul[[+classes]]>[[+wrapper]]</ul>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка всего блока меню.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'pdotools_prop_tpl',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Имя чанка для оформления ресурса. Если не указан, то содержимое полей ресурса будет распечатано на экран.',
              'area_trans' => '',
            ),
            'tplParentRow' => 
            array (
              'name' => 'tplParentRow',
              'desc' => 'pdotools_prop_tplParentRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplParentRowHere' => 
            array (
              'name' => 'tplParentRowHere',
              'desc' => 'pdotools_prop_tplParentRowHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления текущего контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplHere' => 
            array (
              'name' => 'tplHere',
              'desc' => 'pdotools_prop_tplHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк текущего документа',
              'area_trans' => '',
            ),
            'tplInner' => 
            array (
              'name' => 'tplInner',
              'desc' => 'pdotools_prop_tplInner',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка внутренних пунктов меню. Если пуст - будет использовать "tplInner".',
              'area_trans' => '',
            ),
            'tplInnerRow' => 
            array (
              'name' => 'tplInnerRow',
              'desc' => 'pdotools_prop_tplInnerRow',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplInnerHere' => 
            array (
              'name' => 'tplInnerHere',
              'desc' => 'pdotools_prop_tplInnerHere',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк-обёртка активного пункта меню.',
              'area_trans' => '',
            ),
            'tplParentRowActive' => 
            array (
              'name' => 'tplParentRowActive',
              'desc' => 'pdotools_prop_tplParentRowActive',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления активного контейнера с потомками.',
              'area_trans' => '',
            ),
            'tplCategoryFolder' => 
            array (
              'name' => 'tplCategoryFolder',
              'desc' => 'pdotools_prop_tplCategoryFolder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Специальный чанк оформления категории. Категория - это документ с потомками и или нулевым шаблоном, или с атрибутом "rel=\\"category\\"".',
              'area_trans' => '',
            ),
            'tplStart' => 
            array (
              'name' => 'tplStart',
              'desc' => 'pdotools_prop_tplStart',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Чанк оформления корневого пункта, при условии, что включен "displayStart".',
              'area_trans' => '',
            ),
            'checkPermissions' => 
            array (
              'name' => 'checkPermissions',
              'desc' => 'pdotools_prop_checkPermissions',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Укажите, какие разрешения нужно проверять у пользователя при выводе документов.',
              'area_trans' => '',
            ),
            'hereId' => 
            array (
              'name' => 'hereId',
              'desc' => 'pdotools_prop_hereId',
              'type' => 'numberfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Id документа, текущего для генерируемого меню. Нужно указывать только если скрипт сам его неверно определяет, например при выводе меню из чанка другого сниппета.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'pdotools_prop_where',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Массив дополнительных параметров выборки, закодированный в JSON.',
              'area_trans' => '',
            ),
            'select' => 
            array (
              'name' => 'select',
              'desc' => 'pdotools_prop_select',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Список полей для выборки, через запятую. Можно указывать JSON строку с массивом, например {"modResource":"id,pagetitle,content"}.',
              'area_trans' => '',
            ),
            'scheme' => 
            array (
              'name' => 'scheme',
              'desc' => 'pdotools_prop_scheme',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'value' => '',
                  'text' => 'System default',
                  'name' => 'System default',
                ),
                1 => 
                array (
                  'value' => -1,
                  'text' => '-1 (relative to site_url)',
                  'name' => '-1 (relative to site_url)',
                ),
                2 => 
                array (
                  'value' => 'full',
                  'text' => 'full (absolute, prepended with site_url)',
                  'name' => 'full (absolute, prepended with site_url)',
                ),
                3 => 
                array (
                  'value' => 'abs',
                  'text' => 'abs (absolute, prepended with base_url)',
                  'name' => 'abs (absolute, prepended with base_url)',
                ),
                4 => 
                array (
                  'value' => 'http',
                  'text' => 'http (absolute, forced to http scheme)',
                  'name' => 'http (absolute, forced to http scheme)',
                ),
                5 => 
                array (
                  'value' => 'https',
                  'text' => 'https (absolute, forced to https scheme)',
                  'name' => 'https (absolute, forced to https scheme)',
                ),
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Схема формирования ссылок: "uri" для подстановки поля uri документа (очень быстро) или параметр для modX::makeUrl().',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'pdotools_prop_toPlaceholder',
              'type' => 'textfield',
              'options' => 
              array (
              ),
              'value' => '',
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Если не пусто, сниппет сохранит все данные в плейсхолдер с этим именем, вместо вывода не экран.',
              'area_trans' => '',
            ),
            'countChildren' => 
            array (
              'name' => 'countChildren',
              'desc' => 'pdotools_prop_countChildren',
              'type' => 'combo-boolean',
              'options' => 
              array (
              ),
              'value' => false,
              'lexicon' => 'pdotools:properties',
              'area' => '',
              'desc_trans' => 'Вывести точное количество активных потомков документа в плейсхолдер [[+children]].',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => 'core/components/pdotools/elements/snippets/snippet.pdomenu.php',
          'content' => '/** @var array $scriptProperties */

// Convert parameters from Wayfinder if exists
if (isset($startId)) {
    $scriptProperties[\'parents\'] = $startId;
}
if (!empty($includeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $includeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',\' . $v;
        } else {
            $scriptProperties[\'resources\'] = $v;
        }
    }
}
if (!empty($excludeDocs)) {
    $tmp = array_map(\'trim\', explode(\',\', $excludeDocs));
    foreach ($tmp as $v) {
        if (!empty($scriptProperties[\'resources\'])) {
            $scriptProperties[\'resources\'] .= \',-\' . $v;
        } else {
            $scriptProperties[\'resources\'] = \'-\' . $v;
        }
    }
}

if (!empty($previewUnpublished) && $modx->hasPermission(\'view_unpublished\')) {
    $scriptProperties[\'showUnpublished\'] = 1;
}

$scriptProperties[\'depth\'] = empty($level) ? 100 : abs($level) - 1;
if (!empty($contexts)) {
    $scriptProperties[\'context\'] = $contexts;
}
if (empty($scriptProperties[\'context\'])) {
    $scriptProperties[\'context\'] = $modx->resource->context_key;
}

// Save original parents specified by user
$specified_parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));

if ($scriptProperties[\'parents\'] === \'\') {
    $scriptProperties[\'parents\'] = $modx->resource->id;
} elseif ($scriptProperties[\'parents\'] === 0 || $scriptProperties[\'parents\'] === \'0\') {
    if ($scriptProperties[\'depth\'] !== \'\' && $scriptProperties[\'depth\'] !== 100) {
        $contexts = array_map(\'trim\', explode(\',\', $scriptProperties[\'context\']));
        $parents = array();
        if (!empty($scriptProperties[\'showDeleted\'])) {
            $pdoFetch = $modx->getService(\'pdoFetch\');
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $pdoFetch->getChildIds(\'modResource\', 0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        } else {
            foreach ($contexts as $ctx) {
                $parents = array_merge($parents,
                    $modx->getChildIds(0, $scriptProperties[\'depth\'], array(\'context\' => $ctx)));
            }
        }
        $scriptProperties[\'parents\'] = !empty($parents) ? implode(\',\', $parents) : \'+0\';
        $scriptProperties[\'depth\'] = 0;
    }
    $scriptProperties[\'includeParents\'] = 1;
    $scriptProperties[\'displayStart\'] = 0;
} else {
    $parents = array_map(\'trim\', explode(\',\', $scriptProperties[\'parents\']));
    $parents_in = $parents_out = array();
    foreach ($parents as $v) {
        if (!is_numeric($v)) {
            continue;
        }
        if ($v[0] == \'-\') {
            $parents_out[] = abs($v);
        } else {
            $parents_in[] = abs($v);
        }
    }

    if (empty($parents_in)) {
        $scriptProperties[\'includeParents\'] = 1;
        $scriptProperties[\'displayStart\'] = 0;
    }
}

if (!empty($displayStart)) {
    $scriptProperties[\'includeParents\'] = 1;
}
if (!empty($ph)) {
    $toPlaceholder = $ph;
}
if (!empty($sortOrder)) {
    $scriptProperties[\'sortdir\'] = $sortOrder;
}
if (!empty($sortBy)) {
    $scriptProperties[\'sortby\'] = $sortBy;
}
if (!empty($permissions)) {
    $scriptProperties[\'checkPermissions\'] = $permissions;
}
if (!empty($cacheResults)) {
    $scriptProperties[\'cache\'] = $cacheResults;
}
if (!empty($ignoreHidden)) {
    $scriptProperties[\'showHidden\'] = $ignoreHidden;
}

$wfTemplates = array(
    \'outerTpl\' => \'tplOuter\',
    \'rowTpl\' => \'tpl\',
    \'parentRowTpl\' => \'tplParentRow\',
    \'parentRowHereTpl\' => \'tplParentRowHere\',
    \'hereTpl\' => \'tplHere\',
    \'innerTpl\' => \'tplInner\',
    \'innerRowTpl\' => \'tplInnerRow\',
    \'innerHereTpl\' => \'tplInnerHere\',
    \'activeParentRowTpl\' => \'tplParentRowActive\',
    \'categoryFoldersTpl\' => \'tplCategoryFolder\',
    \'startItemTpl\' => \'tplStart\',
);
foreach ($wfTemplates as $k => $v) {
    if (isset(${$k})) {
        $scriptProperties[$v] = ${$k};
    }
}
//---

/** @var pdoMenu $pdoMenu */
$fqn = $modx->getOption(\'pdoMenu.class\', null, \'pdotools.pdomenu\', true);
$path = $modx->getOption(\'pdomenu_class_path\', null, MODX_CORE_PATH . \'components/pdotools/model/\', true);
if ($pdoClass = $modx->loadClass($fqn, $path, false, true)) {
    $pdoMenu = new $pdoClass($modx, $scriptProperties);
} else {
    return false;
}
$pdoMenu->pdoTools->addTime(\'pdoTools loaded\');

$cache = !empty($cache) || (!$modx->user->id && !empty($cacheAnonymous));
if (empty($scriptProperties[\'cache_key\'])) {
    $scriptProperties[\'cache_key\'] = \'pdomenu/\' . sha1(serialize($scriptProperties));
}

$output = \'\';
$tree = array();
if ($cache) {
    $tree = $pdoMenu->pdoTools->getCache($scriptProperties);
}
if (empty($tree)) {
    $data = $pdoMenu->pdoTools->run();
    $data = $pdoMenu->pdoTools->buildTree($data, \'id\', \'parent\', $specified_parents);
    $tree = array();
    foreach ($data as $k => $v) {
        if (empty($v[\'id\'])) {
            if (!in_array($k, $specified_parents) && !$pdoMenu->checkResource($k)) {
                continue;
            } else {
                $tree = array_merge($tree, $v[\'children\']);
            }
        } else {
            $tree[$k] = $v;
        }
    }
    if ($cache) {
        $pdoMenu->pdoTools->setCache($tree, $scriptProperties);
    }
}
if (!empty($tree)) {
    $output = $pdoMenu->templateTree($tree);
}

if ($modx->user->hasSessionContext(\'mgr\') && !empty($showLog)) {
    $output .= \'<pre class="pdoMenuLog">\' . print_r($pdoMenu->pdoTools->getTime(), 1) . \'</pre>\';
}

if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder, $output);
} else {
    return $output;
}',
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
    ),
    'modTemplateVar' => 
    array (
      'translate' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'translate',
          'caption' => 'Нужно вставить только символы после',
          'description' => 'https://youtu.be/',
          'editor_type' => 0,
          'category' => 10,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
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
      'thema' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'thema',
          'caption' => 'Тема трансляции',
          'description' => '',
          'editor_type' => 0,
          'category' => 10,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'minLength' => '',
            'maxLength' => '',
            'regex' => '',
            'regexText' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
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
  ),
);