<?php

declare(strict_types=1);

namespace WihCement\WihCement\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use WihCement\WihCement\Domain\Repository\ProductRepository;
use WihCement\WihCement\Domain\Repository\InquiryRepository;
use WihCement\WihCement\Domain\Model\Inquiry;

class ProductController extends ActionController
{
    public function __construct(
        private readonly ProductRepository $productRepository,
        private readonly InquiryRepository $inquiryRepository
    ) {}

    public function listAction(): ResponseInterface
    {
        $products = $this->productRepository->findAll();
        $this->view->assign('products', $products);
        return $this->htmlResponse();
    }

    public function showAction(int $product): ResponseInterface
    {
        $productObj = $this->productRepository->findByUid($product);
        if (!$productObj) {
            return $this->redirect('list');
        }
        $this->view->assign('product', $productObj);
        return $this->htmlResponse();
    }

    public function inquiryAction(int $product): ResponseInterface
    {
        $productObj = $this->productRepository->findByUid($product);
        $this->view->assign('product', $productObj);
        return $this->htmlResponse();
    }

    public function submitInquiryAction(Inquiry $inquiry): ResponseInterface
    {
        $this->inquiryRepository->add($inquiry);
        $this->sendInquiryNotification($inquiry);
        $this->view->assign('inquirySent', true);
        $this->view->assign('product', $inquiry->getProduct());
        return $this->htmlResponse();
    }

    private function sendInquiryNotification(Inquiry $inquiry): void
    {
        $mail = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Mail\MailMessage::class);
        $mail->to($this->settings['salesEmail'])
             ->subject('New Product Inquiry: ' . ($inquiry->getProduct()?->getName() ?? 'General'))
             ->text(sprintf(
                 "From: %s (%s)\nEmail: %s\nPhone: %s\nQuantity: %s\nType: %s\n\nMessage:\n%s",
                 $inquiry->getFullName(),
                 $inquiry->getCompany(),
                 $inquiry->getEmail(),
                 $inquiry->getPhone(),
                 $inquiry->getQuantity(),
                 $inquiry->getInquiryType(),
                 $inquiry->getMessage()
             ))
             ->send();
    }
}
