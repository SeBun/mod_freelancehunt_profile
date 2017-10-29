<?php
/**
 * @package    Freelancehunt Profile Module
 * @version    1.0.0
 * @author     Igor Berdicheskiy - septdir.ru
 * @copyright  Copyright (c) 2013 - 2017 Igor Berdicheskiy. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 * @link       https://septdir.ru
 */

defined('_JEXEC') or die;

echo '<pre>', print_r('aaaa', true), '</pre>';
?>
<script>
	(function ($) {
		$(document).ready(function() {
			console.log('aaa');
			$.ajax({
				type: 'POST',
				dataType: 'json',
				url: '/index.php?option=com_ajax&module=freelancehunt_profile&format=json',
				data: {},
				success: function (response) {
				}
			});
		});
	})(jQuery);
</script>
