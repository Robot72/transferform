<?php 

namespace app\models;

use Yii;
use yii\base\Model;

class TransferForm extends Model 
{
	public $from;
	public $to;
	public $date;
	public $time;
	public $numberFromFlight;
	public $numberToFlight;
	public $addressTo;
	public $addressFrom;
	public $loyalty;
	public $childChair;
	public $countPassengers;
	public $name;
	public $phone;
	public $email;
	public $cardNumber;

	public function rules()
	{
		return [
			[['name', 'phone', 'email'], 'required'],
			[['loyalty'], 'number'],
		];
	}


}