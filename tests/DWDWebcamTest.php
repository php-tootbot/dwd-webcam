<?php
/**
 * Class DWDWebcamTest
 *
 * @created      18.07.2023
 * @author       smiley <smiley@chillerlan.net>
 * @copyright    2023 smiley
 * @license      MIT
 */

namespace PHPTootBot\DWDWebcamBotTest;

use PHPTootBot\DWDWebcamBot\DWDWebcam;
use PHPTootBot\DWDWebcamBot\DWDWebcamOptions;
use PHPTootBot\PHPTootBot\TootBotInterface;
use PHPUnit\Framework\TestCase;

/**
 *
 */
class DWDWebcamTest extends TestCase{

	public function testInstance():void{
		$options = new DWDWebcamOptions;
		$options->dataDir = __DIR__.'/../data';

		$this::assertInstanceOf(TootBotInterface::class, new DWDWebcam($options));
	}

}
