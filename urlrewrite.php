<?php
$arUrlRewrite=array (
  1 => 
  array (
    'CONDITION' => '#^/online/([\\.\\-0-9a-zA-Z]+)(/?)([^/]*)#',
    'RULE' => 'alias=$1',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  10 => 
  array (
    'CONDITION' => '#^/site_yw/epassports/photogallery/#',
    'RULE' => '',
    'ID' => 'photogallery',
    'PATH' => '/site_yw/epassports/photogallery/index.php',
    'SORT' => 100,
  ),
  14 => 
  array (
    'CONDITION' => '#^/site_yw/personal/support/ticket/#',
    'RULE' => '',
    'ID' => 'citrus:support.ticket',
    'PATH' => '/site_yw/personal/support/ticket/index.php',
    'SORT' => 100,
  ),
  6 => 
  array (
    'CONDITION' => '#^/site_yw/personal/announcements/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/site_yw/personal/announcements/index.php',
    'SORT' => 100,
  ),
  7 => 
  array (
    'CONDITION' => '#^/site_yw/questions-and-answers/#',
    'RULE' => '',
    'ID' => 'bitrix:support.faq',
    'PATH' => '/site_yw/questions-and-answers/index.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^\\/?\\/mobileapp/jn\\/(.*)\\/.*#',
    'RULE' => 'componentName=$1',
    'ID' => NULL,
    'PATH' => '/bitrix/services/mobileapp/jn.php',
    'SORT' => 100,
  ),
  5 => 
  array (
    'CONDITION' => '#^/bitrix/services/ymarket/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/bitrix/services/ymarket/index.php',
    'SORT' => 100,
  ),
  2 => 
  array (
    'CONDITION' => '#^/online/(/?)([^/]*)#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/desktop_app/router.php',
    'SORT' => 100,
  ),
  9 => 
  array (
    'CONDITION' => '#^/site_yw/documents/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/site_yw/documents/index.php',
    'SORT' => 100,
  ),
  15 => 
  array (
    'CONDITION' => '#^/site_yw/workplace/#',
    'RULE' => '',
    'ID' => 'citrus:support.ticket',
    'PATH' => '/site_yw/workplace/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/stssync/calendar/#',
    'RULE' => '',
    'ID' => 'bitrix:stssync.server',
    'PATH' => '/bitrix/services/stssync/calendar/index.php',
    'SORT' => 100,
  ),
  11 => 
  array (
    'CONDITION' => '#^/site_yw/video/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/site_yw/video/index.php',
    'SORT' => 100,
  ),
  12 => 
  array (
    'CONDITION' => '#^/site_yw/forum/#',
    'RULE' => '',
    'ID' => 'bitrix:forum',
    'PATH' => '/site_yw/forum/index.php',
    'SORT' => 100,
  ),
  8 => 
  array (
    'CONDITION' => '#^/site_yw/news/#',
    'RULE' => '',
    'ID' => 'bitrix:news',
    'PATH' => '/site_yw/news/index.php',
    'SORT' => 100,
  ),
  13 => 
  array (
    'CONDITION' => '#^/site_yw/blog/#',
    'RULE' => '',
    'ID' => 'bitrix:blog',
    'PATH' => '/site_yw/blog/index.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
);
