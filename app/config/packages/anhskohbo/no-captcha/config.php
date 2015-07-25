<?php

return array(

	'secret'  => getenv('NOCAPTCHA_SECRET') ?: '6Ld5_QkTAAAAAOSNy7bSATCECG7I68VaFF7Cd0lR',
	'sitekey' => getenv('NOCAPTCHA_SITEKEY') ?: '6Ld5_QkTAAAAAKs5-acdZMMnxRsSRKyuhwFse8nn',

	'lang'    => app()->getLocale(),

);
