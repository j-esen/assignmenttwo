<?php

return array(

	'secret'  => getenv('NOCAPTCHA_SECRET') ?: '6LfXVgoTAAAAAPitkzt9q16hXuijEXdglUNCzOj6',
	'sitekey' => getenv('NOCAPTCHA_SITEKEY') ?: '6LfXVgoTAAAAAGtJBu2QDlyhZ3eeC4ATArl_wTYH',

	'lang'    => app()->getLocale(),

);
