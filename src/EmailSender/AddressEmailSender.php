<?php


namespace App\EmailSender;


use Sylius\Component\Core\Model\OrderInterface;
use Sylius\Component\Mailer\Sender\SenderInterface;

class AddressEmailSender
{
    /**
     * @var SenderInterface
     */
    private $emailSender;

    public function __construct(SenderInterface $emailSender)
    {
        $this->emailSender = $emailSender;
    }

    public function sendEmailAfterAddress(OrderInterface $order)
    {
        $this->emailSender->send(
            'address_sent',
            [$order->getCustomer()->getEmail()],
            [
                'order' => $order,
                'channel' => $order->getChannel(),
                'localeCode' => $order->getLocaleCode()
            ]
        );
    }

}
