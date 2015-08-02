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
	public $countPassangers;
	public $name;
	public $phone;
	public $email;

	public function rules()
	{
		return [
			[['name', 'phone', 'email'], 'require'],
			[['loyalty'], 'number'],
		];
	}


}