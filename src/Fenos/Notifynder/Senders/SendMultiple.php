<?php
/**
 * Created by Fabrizio Fenoglio.
 */

namespace Fenos\Notifynder\Senders;


/**
 * Class SendMultiple
 *
 * @package Fenos\Notifynder\Senders
 */
class SendMultiple implements Sender {

    /**
     * @var array
     */
    protected $infoNotifications = [];

    /**
     * @param $infoNotifications
     */
    function __construct($infoNotifications)
    {
        $this->infoNotifications = $infoNotifications;
    }

    /**
     * Send multiple notifications
     *
     * @param StoreNotification $storeNotification
     * @return mixed
     */
    public function send(StoreNotification $storeNotification)
    {
        return $storeNotification->sendMultiple($this->infoNotifications);
    }
} 