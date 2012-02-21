<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * Add Portal Feeds
 * 
 * @svn			$Id: PortalFeedListener.class.php 1541 2010-08-20 16:12:51Z TobiasH87 $
 * @package		com.woltlab.community.portal.feed
 */
class PortalFeedListener implements EventListener
{
	/**
	 * @see		EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName)
	{
		//requirements for Feed
		WCF::getTPL()->append(array(
			'specialStyles' => WCF::getTPL()->fetch('portalFeed'),
		));
	}        
}
?>