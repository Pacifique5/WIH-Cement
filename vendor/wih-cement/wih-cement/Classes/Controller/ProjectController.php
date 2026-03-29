<?php

declare(strict_types=1);

namespace WihCement\WihCement\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ProjectController extends ActionController
{
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    public function showAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}
