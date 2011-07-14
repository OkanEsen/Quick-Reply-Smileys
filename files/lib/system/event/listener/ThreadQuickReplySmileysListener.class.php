<?php
// wcf imports
require_once(WCF_DIR.'lib/data/message/smiley/Smiley.class.php');
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * Get the smileys and show them in the quick reply container
 * 
 * @author		Okan Esen
 * @copyright	2011 Okan Esen
 * @license		GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package		de.okanesen.quickreply.smileys
 * @subpackage	lib.system.event.listener
 * @category 	Quick Reply Smileys
 */
class ThreadQuickReplySmileysListener implements EventListener {
	public $smileys = array();

	/**
	 * @see EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		// get smileys
		$smileysTemp = WCF::getCache()->get('smileys', 'smileys');
		$this->smileys = (isset($smileysTemp[0])) ? $smileysTemp[0] : array();
		
		// assign variables
		WCF::getTPL()->assign(array('smileys' => $this->smileys));
	}
}
?>