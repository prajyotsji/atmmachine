<?php 
Class CardHolder
{
	private $insertedCard;

	public function insertCard($card) {
		if ($this->isCardPresent()) {
			echo "Card exists";
			return $this->insertedCard;
		}
		$this->insertedCard = $card;
		return $this->insertedCard;
	}

	public function isCardPresent() {
		if (!empty($this->insertedCard)) {
			return true;
		}
		return false;
	}
}