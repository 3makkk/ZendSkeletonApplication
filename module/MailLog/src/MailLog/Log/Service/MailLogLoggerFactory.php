<?php
/**
 * Created by PhpStorm.
 * User: emak
 * Date: 27.04.15
 * Time: 14:51
 */
namespace MailLog\Log\Service;

use MailLog\Log\Formatter\MailException;
use Zend\Log\Logger;
use Zend\Log\Writer\Mail;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class MailLogLoggerFactory implements FactoryInterface {


    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $transport = $serviceLocator->get('Soflomo\Mail\Transport');
        $message   = $serviceLocator->get('Soflomo\Mail\Message');
        $message->setTo('log@erkundbar.de');
        $message->setSubject('Error Log');
        $writer = new Mail($message, $transport);

        $logger = new Logger();
        $logger->addWriter($writer);

        return $logger;
    }
}