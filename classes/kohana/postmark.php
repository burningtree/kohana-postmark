<?php defined('SYSPATH') or die('No direct script access.');

require_once Kohana::find_file('vendor', 'postmark/src/Postmark/MailAdapterInterface');

class Kohana_Postmark {
	
	public static function compose()
	{
		if ( ! class_exists('Postmark\Mail'))
		{
			require_once Kohana::find_file('vendor', 'postmark/src/Postmark/Mail', 'php');
		}
		
		return Postmark\Mail::compose();
	}
}

class Mail_Postmark_Adapter extends Postmark_Adapter { }
