<?php 
return array (
  'i18n' => 
  array (
    'lang' => 'ru',
    'locale' => 'ru_RU.UTF8',
    'path' => SITE.'\lang',
  ),
  'theme' => 
  array (
    'logo' => '/theme/logo/logo.png',
    'favicon' => '/theme/icon/favicon.ico',
    'current' => 'Default',
  ),
  'cron' => 
  array (
    'last_run' => 1340555893,
  ),
  'user' => 
  array (
    'refresh' => 60,
    'register' => 
    array (
      'verification' => true,
    ),
    'avatar' => 
    array (
      'default' => 'avatars/0/avatar.jpg',
    ),
    'last_visit' => 1337543993,
  ),
  'image' => 
  array (
    'presets' => 
    array (
      'blog' => 
      array (
        'avatar' => 
        array (
          'size' => '100x100',
          'actions' => 
          array (
            0 => 'resize',
          ),
        ),
      ),
      'post' => 
      array (
        'large' => 
        array (
          'size' => '700x500',
          'actions' => 
          array (
            0 => 'resize',
          ),
        ),
      ),
      'avatar' => 
      array (
        'navbar' => 
        array (
          'size' => '38x38',
          'actions' => 
          array (
            0 => 'sizecrop',
          ),
        ),
        'comment' => 
        array (
          'size' => '48x48',
          'actions' => 
          array (
            0 => 'sizecrop',
          ),
        ),
        'small' => 
        array (
          'size' => '24x24',
          'actions' => 
          array (
            0 => 'sizecrop',
          ),
        ),
        'post' => 
        array (
          'size' => '24x24',
          'actions' => 
          array (
            0 => 'sizecrop',
          ),
        ),
        'profile' => 
        array (
          'size' => '32x32',
          'actions' => 
          array (
            0 => 'sizecrop',
          ),
        ),
        'photo' => 
        array (
          'size' => '200x200',
          'actions' => 
          array (
            0 => 'resize',
          ),
        ),
      ),
    ),
  ),
  'ReCaptcha' => 
  array (
    'public' => '6Lc2s9ESAAAAACmHbFjk5VUf_IUd7Srum4K2KTRo',
    'private' => '6Lc2s9ESAAAAALSiny44S4M3Q0tWH-WxnKrvQQrd',
    'api_server' => 'http://www.google.com/recaptcha/api',
    'api_secure_server' => 'https://www.google.com/recaptcha/api',
    'verify_server' => 'www.google.com',
    'signup_url' => 'https://www.google.com/recaptcha/admin/create',
    'theme' => 'clean',
  ),
  'friends' => 
  array (
  ),
  '/users/reset/9' => true,
  '/users/reset/1' => true,
  'users' => 
  array (
    'reset' => 
    array (
      1 => true,
    ),
  ),
);