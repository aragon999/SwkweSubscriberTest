<?php

namespace SwkweSubscriberTest\Subscriber;

use Enlight\Event\SubscriberInterface;

final class TestSubscriber implements SubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
          //  'Enlight_Controller_Action_PostDispatchSecure_Frontend' => 'onTest',
            'Theme_Inheritance_Template_Directories_Collected' => 'onTest',
        ];
    }

    /**
     * @param \Enlight_Event_EventArgs $args
     */
    public function onTest(\Enlight_Event_EventArgs $args)
    {
        echo "Test";
        die();
    }
}
