<?php

declare(strict_types=1);

namespace WihCement\WihCement\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use WihCement\WihCement\Domain\Repository\DealerRepository;
use WihCement\WihCement\Domain\Model\Dealer;

class DealerController extends ActionController
{
    public function __construct(
        private readonly DealerRepository $dealerRepository
    ) {}

    public function formAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }

    public function registerAction(Dealer $dealer): ResponseInterface
    {
        $dealer->setStatus('pending');
        $dealer->setIsApproved(false);
        $this->dealerRepository->add($dealer);
        $this->sendDealerNotification($dealer);
        $this->view->assign('registrationSent', true);
        return $this->htmlResponse();
    }

    /**
     * JSON API endpoint for dealer map (typeNum=1001)
     */
    public function mapApiAction(): string
    {
        $dealers = $this->dealerRepository->findApprovedDealers();
        $data = [];
        foreach ($dealers as $dealer) {
            $data[] = [
                'name' => $dealer->getCompanyName(),
                'contact' => $dealer->getContactPerson(),
                'region' => $dealer->getRegion(),
                'country' => $dealer->getCountry(),
                'lat' => $dealer->getLatitude(),
                'lng' => $dealer->getLongitude(),
                'phone' => $dealer->getPhone(),
            ];
        }
        return json_encode(['dealers' => $data], JSON_THROW_ON_ERROR);
    }

    private function sendDealerNotification(Dealer $dealer): void
    {
        $mail = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Mail\MailMessage::class);
        $mail->to($this->settings['salesEmail'])
             ->subject('New Dealer Application: ' . $dealer->getCompanyName())
             ->text(sprintf(
                 "Company: %s\nContact: %s\nEmail: %s\nPhone: %s\nCountry: %s\nRegion: %s",
                 $dealer->getCompanyName(),
                 $dealer->getContactPerson(),
                 $dealer->getEmail(),
                 $dealer->getPhone(),
                 $dealer->getCountry(),
                 $dealer->getRegion()
             ))
             ->send();
    }
}
