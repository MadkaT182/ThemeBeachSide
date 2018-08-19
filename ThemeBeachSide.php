<?php

class ThemeBeachSidePlugin extends MantisPlugin
 {

   function register()
    {
      $this->name = 'ThemeBeachSide';
      $this->description = 'A BeachSide theme to modify Mantis Look';
      $this->page = '';

      $this->version = '0.0.1';
      $this->requires = array(
        "MantisCore" => "2.0.0",
      );

      $this->author = 'MadkaT';
      $this->contact = 'yourmail@address.com';
      $this->url = 'https://github.com/MadkaT182';
    }

    function hooks()
      {
        return array(
          "EVENT_LAYOUT_RESOURCES" => 'scripts',
        );
      }

    function scripts()
      {
        echo '<link rel="stylesheet" href="' . plugin_file( 'beachside.css' ) . '">';
      }
 }
?>
