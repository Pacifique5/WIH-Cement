<?php

declare(strict_types=1);

namespace WihCement\WihCement\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Mail\MailMessage;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class ContactController extends ActionController
{
    public function formAction(): ResponseInterface
    {
        return $this->htmlResponse();
    }

    public function sendAction(): ResponseInterface
    {
        $data = $this->request->getArguments();

        /** @var MailMessage $mail */
        $mail = GeneralUtility::makeInstance(MailMessage::class);
        $mail->to($this->settings['adminEmail'])
             ->replyTo($data['email'] ?? '')
             ->subject('Contact Form: ' . ($data['subject'] ?? 'New Message'))
             ->text(sprintf(
                 "Name: %s\nEmail: %s\nPhone: %s\nMessage:\n%s",
                 $data['name'] ?? '',
                 $data['email'] ?? '',
                 $data['phone'] ?? '',
                 $data['message'] ?? ''
             ))
             ->send();

        $this->view->assign('messageSent', true);
        return $this->htmlResponse();
    }
}
