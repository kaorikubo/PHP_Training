<?php

$countries = [
  '日本',
  'アメリカ',
  'カナダ',
  'ロツア',
];

## --- Q1
echo $countries[2];

## --- Q2
$countries[3] = 'ロシア';
var_dump($countries);


## --- Q3
$countries[] = '中国';


$days = [
'sunday' => '日曜日',
'monday' => '月曜日',
'tuesday' => '火曜日',
'wednesday' => '土曜日',
'thursday' => '木曜日',
'friday' => '金曜日',
];

## --- Q4
echo $days['tuesday'];

## --- Q5
$days['wednesday'] = '水曜日';
var_dump($days);

## --- Q6
$$days['saturday'] = '土曜日';


# 繰り返し構文

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

## --- Q1
foreach ($array as $x => $y){
    echo ($x+1).'つめは'.$y."\n";
}

## --- Q2
for ($i = 0; $i < count($array); $i++){
  echo ($i+1).'つめは'.$array[$i]."\n";
}

# 多次元連想配列

$menu = [
  'カレーライス' => [
      '値段' => 1200,
      'ジャンル' => 'インド料理',
  ],
  'スパゲッティ' => [
      '値段' => 1000,
      'ジャンル' => 'イタリア料理',
  ],
  'ボルシチ' => [
      '値段' => 2000,
      'ジャンル' => 'ロシア料理',
  ],
];


## --- Q1
foreach($menu as $key => $value){
  echo $key.'は'.$value['ジャンル'].'で値段は'.$value['値段'].'円です。'."\n";
}

## --- Q2
$menu['そば'] = ['値段' => 800, 'ジャンル' => '日本料理'];

## --- Q3
$menu['カレーライス']['人気度'] = 5;
$menu['スパゲッティ']['人気度'] = 3;
$menu['ボルシチ']['人気度'] = 4;
$menu['そば']['人気度'] = 4;

# 関数
## --- Q1
function calcDiscountPrice($price){
  $discountPrice = $price * (1 - 20/100);
  return $discountPrice;
}

$price = 800;
$discountPrice = calcDiscountPrice($price);
echo $price.'の商品が今だけ'.$discountPrice.'です。';

## --- Q2
function whichIsBigger($num1, $num2){
  if($num1 > $num2){
      return '第一引数の方が大きい。値："'.$num1.'"';;
  } elseif($num1 < $num2) {
      return '第一引数の方が大きい。値："'.$num2.'"';
  } else {
      
  }
}

echo whichIsBigger(100, 2);
echo whichIsBigger(2, 50);

## --- Q3
function isPrimeNumber($num){
  if($num <1){
  return false;
} if($num == 2) {
  return true;
} if($num % 2 == 0) {
  return false;
} for($i = 3; $i * $i <= $num; $i+2){
  if($num % 2 == 0){
  return false;
  } else{
      return true;
  }
} 
}

var_dump(isPrimeNumber(11));


# オブジェクト
## --- Q1
class Item
{
  public $name;
  public $price;
  
  public function __construct($param1, $param2) {
        $this->name = $param1;
        $this->price = $param2;
    }
}

$Item = new Item('りんご', 100);
echo $Item->name.'の税抜価格は'.$Item->price.'円です。';


## --- Q2
class Item
{
  public $name;
  public $price;
  
  public function __construct($param1, $param2) {
        $this->name = $param1;
        $this->price = $param2;
    }
    public function fetchCalcTaxInPrice($taxRate){
        return $this->price * (1 + $taxRate);
    }
}


$Item = new Item('みかん', 200);
$taxIncludedPrice = $Item->fetchCalcTaxInPrice(0.1);
echo $Item->name.'の税込価格は'.$taxIncludedPrice.'円です。';