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
引数に渡した整数を素数かどうか判定する関数を作成します。以下の条件のもと、渡した数字が素数かどうか判定しましょう。

### --- 条件
- 整数を引数に受け取って、素数だった場合にtrue、そうではなかった場合にfalseを返す関数を、isPrimeNumberという名前で定義してください。
- 返り値をvar_dumpで出力しましょう。

### --- ヒント
- 素数に1と0は含まないので、1以下の数字はfalseを返すようにすると書きやすくなります。
- 自分より小さい数字で割り切れないので、うまくfor文を使ってあげると計算することができます。



# オブジェクト
## --- Q1
商品クラスを使用して、条件を満たした上で下記の文字列を出力してください。

### --- 条件
- コンストラクタメソッドを作成してください
- 引数から `$param1` 受け取った商品名を `name` プロパティに格納してください
- 引数から `$param2` 受け取った商品の価格を `price` プロパティに格納してください

### --- 出力文字列
```
りんごの税抜価格は100円です。
```

```php
class Item
{
  public $name;
  public $price;
}
```

## --- Q2
Q1で使用した商品クラスを同じく使用して、条件を満たした上で下記の文字列を出力してください。

### --- 条件
- priceを税込価格に変換して返すメソッド名は `fetchCalcTaxInPrice` と命名してください。
- fetchCalTaxInPriceメソッドの返り値を文字列結合して、最終的な文字列を完成させてください。

### --- 出力文字列
```
みかんの税込価格は220円です。
```