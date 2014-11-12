<?php

/**
 * This file is part of the Kdyby (http://www.kdyby.org)
 *
 * Copyright (c) 2008 Filip Procházka (filip@prochazka.su)
 *
 * For the full copyright and license information, please view the file license.txt that was distributed with this source code.
 */

namespace Kdyby\Monolog;

use Kdyby;
use Monolog;
use Nette;



/**
 * @author Filip Procházka <filip@prochazka.su>
 */
class Logger extends Monolog\Logger
{

    protected static $levels = array(
        100 => 'DEBUG',
        200 => 'INFO',
        250 => 'MINOR_NOTICE',                  //added to be able to log 4 things and not to use warning
        250 => 'NOTICE',
        300 => 'WARNING',
        400 => 'ERROR',
        500 => 'CRITICAL',
        550 => 'ALERT',
        600 => 'EMERGENCY',
    );
	/**
	 * @param string $channel
	 * @return CustomChannel
	 */
	public function channel($channel)
	{
		return new CustomChannel($channel, $this);
	}

}
