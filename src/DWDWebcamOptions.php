<?php
/**
 * Class DWDWebcamOptions
 *
 * @created      18.07.2023
 * @author       smiley <smiley@chillerlan.net>
 * @copyright    2023 smiley
 * @license      MIT
 */

namespace PHPTootBot\DWDWebcamBot;

use InvalidArgumentException;
use PHPTootBot\PHPTootBot\TootBotOptions;
use function implode;
use function in_array;
use function max;
use function min;
use function sprintf;
use function trim;

/**
 *
 */
class DWDWebcamOptions extends TootBotOptions{

	protected string $imageSize = '1920';
	protected int    $imageCount = 1;

	/**
	 * Check the image size input, throws on an invalid value
	 *
	 * valid sizes: 640, 816, 1200, 1920, full
	 */
	protected function set_imageSize(string $imageSize):void{
		$imageSize  = trim($imageSize);
		$validSizes = ['640', '816', '1200', '1920', 'full'];

		if(!in_array($imageSize, $validSizes, true)){
			$message = sprintf('invalid image size: "%s" (accepted: %s)', $imageSize, implode(', ', $validSizes));

			throw new InvalidArgumentException($message);
		}

		$this->imageSize = $imageSize;
	}

	/**
	 * Clamp the image count to a number between 1 and 4
	 */
	protected function set_imageCount(int $imageCount):void{
		$this->imageCount = max(1, min(4, $imageCount));
	}

}
