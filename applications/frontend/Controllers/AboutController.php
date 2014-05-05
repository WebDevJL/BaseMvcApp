<?php

namespace Applications\Frontend\Controllers;

class AboutController extends \Library\BaseController {

  public function executeIndex(\Library\HTTPRequest $request) {
    //TODO: add resource using a Resource manage
    $this->page->addVar('title', 'About');
    $this->page->addVar('resx', $this->app->i8n->getLocalResourceArray("about"));
    $this->page->addVar('resume_url', $this->app->router->pageUrls[\Library\Enums\ResourceKeys\PublicPageUrls::ResumeUrl]);    
  }
}