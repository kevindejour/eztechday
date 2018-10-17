<?php

namespace Ez\newblockphpBundle\Listener;

use eZ\Publish\Core\Repository\SiteAccessAware\ContentService;
use EzSystems\EzPlatformPageFieldType\FieldType\Page\Block\Renderer\BlockRenderEvents;
use EzSystems\EzPlatformPageFieldType\FieldType\Page\Block\Renderer\Event\PreRenderEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
/**
 * Class YoutubeBlockListener
 * @package EzSystems\EzYoutubeBlockBundle\Block\Event\Listener
 */
class NewblockphpListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            BlockRenderEvents::getBlockPreRenderEventName('newblockphp') => 'onBlockPreRender'
        ];
    }

    public function onBlockPreRender(PreRenderEvent $event)
    {
        $blockValue = $event->getBlockValue();
        $renderRequest = $event->getRenderRequest();
        $parameters = $renderRequest->getParameters();
        $block_text = $blockValue->getAttribute('texte');

        $parameters['new_parameter'] = "some news parameter";

        $renderRequest->setParameters($parameters);
    }
}