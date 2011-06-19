<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Anja Leichsenring <aleichsenring@ab-softlab.de>, ab-softlab
*  
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 3 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * Action
 */
class Tx_AbCustomercare_Domain_Model_Action extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * type
	 *
	 * @var integer $type
	 */
	protected $type;

	/**
	 * channel
	 *
	 * @var string $channel
	 */
	protected $channel;

	/**
	 * files
	 *
	 * @var string $files
	 */
	protected $files;

	/**
	 * time
	 *
	 * @var DateTime $time
	 */
	protected $time;

	/**
	 * notes
	 *
	 * @var string $notes
	 */
	protected $notes;

	/**
	 * Sets the type
	 *
	 * @param integer $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Returns the type
	 *
	 * @return integer
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the channel
	 *
	 * @param string $channel
	 * @return void
	 */
	public function setChannel($channel) {
		$this->channel = $channel;
	}

	/**
	 * Returns the channel
	 *
	 * @return string
	 */
	public function getChannel() {
		return $this->channel;
	}

	/**
	 * Sets the files
	 *
	 * @param string $files
	 * @return void
	 */
	public function setFiles($files) {
		$this->files = $files;
	}

	/**
	 * Returns the files
	 *
	 * @return string
	 */
	public function getFiles() {
		return $this->files;
	}

	/**
	 * Sets the time
	 *
	 * @param DateTime $time
	 * @return void
	 */
	public function setTime(DateTime $time) {
		$this->time = $time;
	}

	/**
	 * Returns the time
	 *
	 * @return DateTime
	 */
	public function getTime() {
		return $this->time;
	}

	/**
	 * Sets the notes
	 *
	 * @param string $notes
	 * @return void
	 */
	public function setNotes($notes) {
		$this->notes = $notes;
	}

	/**
	 * Returns the notes
	 *
	 * @return string
	 */
	public function getNotes() {
		return $this->notes;
	}

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {

	}

}
?>