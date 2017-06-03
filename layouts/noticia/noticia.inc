<?php

// Plugin definition
$plugin = array(
  'title' => t('Bootstrap Noticia'),
  'category' => t('Columns: 2'),
  'icon' => 'noticia.png',
  'theme' => 'noticia',
  'css' => 'noticia.css',
  'regions' => array(
  	'title' => t('Title'),
  	'content' => t('Content'),
  	'sidebar' => t('Sidebar')
  ),
);
