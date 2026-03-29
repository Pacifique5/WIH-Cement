<?php

declare(strict_types=1);

namespace WihCement\WihCement\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use WihCement\WihCement\Domain\Repository\NewsRepository;

class NewsController extends ActionController
{
    public function __construct(
        private readonly NewsRepository $newsRepository
    ) {}

    public function listAction(): ResponseInterface
    {
        $type = $this->request->hasArgument('type') ? $this->request->getArgument('type') : '';
        $news = $type
            ? $this->newsRepository->findByType($type)
            : $this->newsRepository->findAll();

        $this->view->assign('news', $news);
        $this->view->assign('activeType', $type);
        return $this->htmlResponse();
    }

    public function showAction(int $news): ResponseInterface
    {
        $newsObj = $this->newsRepository->findByUid($news);
        if (!$newsObj) {
            return $this->redirect('list');
        }
        $this->view->assign('news', $newsObj);
        return $this->htmlResponse();
    }
}
