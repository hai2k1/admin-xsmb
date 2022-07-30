<?php 
return [
  'labels' => [
    'title' => 'configure',
    'description' => 'Site related configuration',
    'setting' => 'configure',
    'Site Url Help' => 'The site domain name determines the display path of static resources (avatars, pictures, etc.), which must be the same as the APP address path in the env file, and can include the port number, such as http://www.baidu.com:8000 .',
    'Site Logo Text' => 'The priority of text LOGO display is lower than that of pictures. When no picture is uploaded as the LOGO, this item will take effect.',
    'Site Debug Help' => 'When the debug mode is turned on, the exception capture information will be displayed, and when it is turned off, only the 500 status code will be returned.',
  ],
  'fields' => [
    'site_url' => 'site domain name',
    'site_title' => 'site title',
    'site_logo_text' => 'Site text logo',
    'site_logo' => 'Site image logo',
    'site_logo_mini' => 'Site image LOGO (miniature)',
    'site_debug' => 'debug mode',
    'site_lang' => 'site language',
  ],
  'options' => [
  ],
];