?/php  
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * 
 *
 *
*/

declare(strict_types=1);

namespace pocketmine;

use pocketmine\permission\ServerOperator;

interface IPlayer extends ServerOperator{

	public function isOnline() : bool;

	public function getName() : string;

	public function isBanned() : bool;

	/**
	 * @return void
	 */
	public function setBanned(bool $banned);

	public function isWhitelisted() : bool;

	/**
	 * @return void
	 */
	public function setWhitelisted(bool $value);

	/**
	 * @return Player|null
	 */
	public function getPlayer();

	/**
	 * @return int|null
	 */
	public function getFirstPlayed();

	/**
	 * @return int|null
	 */
	public function getLastPlayed();

	public function hasPlayedBefore() : bool;

}
