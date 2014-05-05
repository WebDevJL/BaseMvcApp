<?php

namespace Applications\Frontend\Controllers;

class ResumeController extends \Library\BaseController {

  public function executeIndex(\Library\HTTPRequest $request) {
    //TODO: add resource using a Resource manage
    $this->page->addVar('title', 'Resume');
    $this->page->addVar('resx', $this->app->i8n->getLocalResourceArray("resume"));
    $this->page->addVar('contact_url', $this->app->router->pageUrls[\Library\Enums\ResourceKeys\PublicPageUrls::ContactUrl]);    
  }

}