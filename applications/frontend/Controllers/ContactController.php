<?php

namespace Applications\Frontend\Controllers;

class ContactController extends \Library\BaseController {

  public function executeIndex(\Library\HTTPRequest $request) {
    //TODO: add resource using a Resource manage
    $this->page->addVar('title', 'Contact');
    $this->page->addVar('resx', $this->app->i8n->getLocalResourceArray("contact"));
    $this->page->addVar('submit_url', $this->app->router->pageUrls[\Library\Enums\ResourceKeys\PublicPageUrls::ContactUrl]);    
  }
}