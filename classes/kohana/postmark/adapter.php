<?php defined('SYSPATH') or die('No direct script access.');

require_once Kohana::find_file('vendor', 'postmark/src/Postmark/MailAdapterInterface');

class Kohana_Postmark_Adapter implements Postmark\MailAdapterInterface {
	
	public static function getApiKey()
	{
		return Kohana::$config->load('postmark')->get('api_key');
	}
	
	public static function setupDefaults(Postmark\Mail &$mail)
	{
		$mail->from(Kohana::$config->load('postmark')->get('from_address'), Kohana::$config->load('postmark')->get('from_name'));
	}
	
	public static function log($logData)
	{
		Kohana::$log->add('info', Arr::get($logData, 'return'));
	}
}

