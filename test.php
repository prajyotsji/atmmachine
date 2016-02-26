<?php
require_once 'CardHolder.php';

class AtmTest extends PHPUnit_Framework_TestCase
{
	private $card1, $card2,
	$cardHolder;

	protected function setUp() {
		$this->card1 = array('cardNo'=>1234567890, 'pin'=>1120);
		$this->card2 = array('cardNo'=>1234567899, 'pin'=>1122);
		$this->cardHolder = new CardHolder();
	}

	/**
	 * @test
	 */
	public function testInsertCard() {
		$card = $this->cardHolder->insertCard($this->card1);
		$card = $this->cardHolder->insertCard($this->card2);
		$this->assertEquals($this->card1, $card);
		$this->assertNotEquals($this->card2, $card);
		// $this->assertFalse($this->cardHolder->isCardPresent());
		// $this->assertTrue($this->cardHolder->isCardPresent());
	}

	// /**
	//  * @test
	//  */
	// public function testOneCard() {
	// 	$card = $this->cardHolder->insertCard($this->card1);
	// 	$this->assertEquals($this->card1, $card);
	// }



}