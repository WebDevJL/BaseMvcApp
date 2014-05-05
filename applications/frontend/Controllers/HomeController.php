<?php

namespace Applications\Frontend\Controllers;

class HomeController extends \Library\BaseController {

  public function executeIndex(\Library\HTTPRequest $request) {
    //TODO: add resource using a Resource manage
    $this->page->addVar('title', 'Home');
    $this->page->addVar('resx', $this->app->i8n->getLocalResourceArray("home"));
    $this->page->addVar('about_url', $this->app->router->pageUrls[\Library\Enums\ResourceKeys\PublicPageUrls::AboutUrl]);
    
//    $this->page->addVar(
//            \Library\Enums\AppSettingKeys::Config_test, $this->app->config()->get(\Library\Enums\AppSettingKeys::Config_test));
//    $this->page->addVar(
//            \Library\Enums\AppSettingKeys::DefaultLanguage, $this->app->context()->language);
  }

}