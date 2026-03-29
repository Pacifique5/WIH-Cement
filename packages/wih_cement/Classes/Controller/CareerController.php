<?php

declare(strict_types=1);

namespace WihCement\WihCement\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use WihCement\WihCement\Domain\Repository\JobRepository;
use WihCement\WihCement\Domain\Repository\ApplicationRepository;
use WihCement\WihCement\Domain\Model\Application;

class CareerController extends ActionController
{
    public function __construct(
        private readonly JobRepository $jobRepository,
        private readonly ApplicationRepository $applicationRepository
    ) {}

    public function listAction(): ResponseInterface
    {
        $jobs = $this->jobRepository->findActiveJobs();
        $this->view->assign('jobs', $jobs);
        return $this->htmlResponse();
    }

    public function showAction(int $job): ResponseInterface
    {
        $jobObj = $this->jobRepository->findByUid($job);
        $this->view->assign('job', $jobObj);
        return $this->htmlResponse();
    }

    public function applyAction(int $job): ResponseInterface
    {
        $jobObj = $this->jobRepository->findByUid($job);
        $this->view->assign('job', $jobObj);
        return $this->htmlResponse();
    }

    public function submitApplicationAction(Application $application): ResponseInterface
    {
        $this->applicationRepository->add($application);
        $this->sendApplicationNotification($application);
        $this->view->assign('applicationSent', true);
        $this->view->assign('job', $application->getJob());
        return $this->htmlResponse();
    }

    private function sendApplicationNotification(Application $application): void
    {
        $mail = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Mail\MailMessage::class);
        $mail->to($this->settings['hrEmail'])
             ->subject('New Job Application: ' . ($application->getJob()?->getTitle() ?? 'Unknown Position'))
             ->text(sprintf(
                 "Applicant: %s\nEmail: %s\nPhone: %s\n\nCover Letter:\n%s",
                 $application->getFullName(),
                 $application->getEmail(),
                 $application->getPhone(),
                 $application->getCoverLetter()
             ))
             ->send();
    }
}
