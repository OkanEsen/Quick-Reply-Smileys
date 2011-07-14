/**
 * @author	Okan Esen
 * @copyright	2011 Okan Esen
 * @license	Creative Commons <by-nd> <http://creativecommons.org/licenses/by-nd/3.0/deed.de>
 */
var QuickReplySmiley = Class.create({
	/**
	 * Inserts a smiley.
	 */
	insert: function(code) {
		var quickReplyInput = $('text');
		quickReplyInput.value += ' '+code+' ';
		quickReplyInput.focus();
	}
});