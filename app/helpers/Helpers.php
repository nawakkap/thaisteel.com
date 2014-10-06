<?php
class Helpers {

	public static function number_format_clean($number,$precision=0,$dec_point='.',$thousands_sep=',')
	{
		return trim(number_format($number,$precision,$dec_point,$thousands_sep),'0'.$dec_point);
	}
}