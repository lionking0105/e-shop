<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        \App\Product::truncate();
            //phones and tablets
        $product = new \App\Product([
            'imagePath' => '8Pad.jpg',
           'title' => '8Pad',
           'description' => 'Lorem ipsum dolor sit amet consectetur',
           'price' => 10 
          ]);
          $product->save();
        $product = new \App\Product([
             'imagePath' => 'Black Tablet.jpg',
             'title' => 'Black Tablet',
             'description' => 'Lorem ipsum dolor sit amet consectetur',
             'price' => 6 
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'Huawei.jpg',
            'title' => 'Huawei',
            'description' => 'Lorem ipsum dolor sit amet consectetur',
            'price' => 10 
       ]);
       $product->save();

       $product = new \App\Product([
        'imagePath' => 'Nice phone.jpg',
        'title' => 'Nice phone',
        'description' => 'Lorem ipsum dolor sit amet consectetur',
        'price' => 10 
       ]);
       $product->save();
       $product = new \App\Product([
        'imagePath' => 'Nice Tab.jpg',
        'title' => 'Nice Tab',
        'description' => 'Lorem ipsum dolor sit amet consectetur',
        'price' => 6 
   ]);
   $product->save();

   $product = new \App\Product([
    'imagePath' => 'Ocean Pad.jpg',
       'title' => 'Ocean Pad',
       'description' => 'Lorem ipsum dolor sit amet consectetur',
       'price' => 10 
  ]);
  $product->save();

  $product = new \App\Product([
    'imagePath' => 'Orange black pad.jpg',
   'title' => 'Orange black pad',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();

  $product = new \App\Product([
    'imagePath' => 'realme.jpg',
   'title' => 'realme',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();

  //Electronics
  $product = new \App\Product([
    'imagePath' => 'Black sub-woofer.jpg',
   'title' => 'Black sub-woofer',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();
$product = new \App\Product([
     'imagePath' => 'Good stereo.jpg',
     'title' => 'Good stereo',
     'description' => 'Lorem ipsum dolor sit amet consectetur',
     'price' => 6 
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'HIFIINT Tv.jpg',
    'title' => 'HIFIINT Tv',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Major stereo.jpg',
'title' => 'Major stereo',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'Nice stereo.jpg',
'title' => 'Nice stereo',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Nice T&G speaker.jpg',
'title' => 'Nice T&G speaker',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'owlenze projector.jpg',
'title' => 'owlenze projector',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Poce headphones.jpg',
'title' => 'Poce headphones',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'T&G speaker.jpg',
'title' => 'T&G speaker',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'White sub-woofer.jpg',
'title' => 'White sub-woofer',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);

$product->save();


  //Computing
  $product = new \App\Product([
    'imagePath' => 'Black Hp.jpg',
   'title' => 'Black Hp',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();
$product = new \App\Product([
     'imagePath' => 'catrigde.jpg',
     'title' => 'catrigde',
     'description' => 'Lorem ipsum dolor sit amet consectetur',
     'price' => 6 
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'Eee Pc.jpg',
    'title' => 'Eee Pc',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'epson printer.jpg',
'title' => 'epson printer',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'Hp Desktop.jpg',
'title' => 'Hp Desktop',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'HP INKS.jpg',
'title' => 'HP INKS',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'I 5 HP.jpg',
'title' => 'I 5 HP',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'KINGSTON.jpg',
'title' => 'KINGSTON',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'LENOVO LAPTOP.jpg',
'title' => 'LENOVO LAPTOP',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Prebook 640.jpg',
'title' => 'Prebook 640',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);

$product->save();


  //Fashions
  $product = new \App\Product([
    'imagePath' => 'Trancend Hard disk.jpg',
   'title' => 'Trancend Hard disk',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();
$product = new \App\Product([
     'imagePath' => 'wireless adapter.jpg',
     'title' => 'wireless adapter',
     'description' => 'Lorem ipsum dolor sit amet consectetur',
     'price' => 6 
]);
$product->save();

//fashion
$product = new \App\Product([
    'imagePath' => 'Beauty Dress.png',
    'title' => 'Beauty Dress',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Golden watch.png',
'title' => 'Golden watch',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'handsome.jpg',
'title' => 'handsome',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Nice sneakers.jpg',
'title' => 'Nice sneakers',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Nice speks.png',
'title' => 'Nice speks',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Nice watch.png',
'title' => 'Nice watch',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'silver watch.png',
'title' => 'silver watch',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Super neckless.png',
'title' => 'Super neckless',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);

$product->save();

//Gaming
$product = new \App\Product([
    'imagePath' => 'Black ps.jpg',
   'title' => 'Black ps',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();
$product = new \App\Product([
     'imagePath' => 'Brick game.jpg',
     'title' => 'Brick game',
     'description' => 'Lorem ipsum dolor sit amet consectetur',
     'price' => 6 
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'Chaseboard.jpg',
    'title' => 'Chaseboard',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Game controls.jpg',
'title' => 'Game controls',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'Grand theft auto.jpg',
'title' => 'Grand theft auto',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Playstation 4.jpg',
'title' => 'Playstation 4',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Ps4 pad.jpg',
'title' => 'Ps4 pad',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'spider game.jpg',
'title' => 'spider game',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'uncharted game.jpg',
'title' => 'uncharted game',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

//Sporting Goods
$product = new \App\Product([
    'imagePath' => 'Ball.jpg',
   'title' => 'Ball',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();

$product = new \App\Product([
    'imagePath' => 'Camera.jpg',
    'title' => 'Camera',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Gloves.jpg',
'title' => 'Gloves',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'Gym tools.jpg',
'title' => 'Gym tools',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Nice sport shoe.jpg',
'title' => 'Nice sport shoe',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'sport pajamas.jpg',
'title' => 'sport pajamas',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Sports ware.jpg',
'title' => 'Sports ware',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

//Home and Office
$product = new \App\Product([
    'imagePath' => 'Cleaning brush.jpg',
   'title' => 'Cleaning brush',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();
$product = new \App\Product([
     'imagePath' => 'Fasemaller mark pens.jpg',
     'title' => 'Fasemaller mark pens',
     'description' => 'Lorem ipsum dolor sit amet consectetur',
     'price' => 6 
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'Microscope.jpg',
    'title' => 'Microscope',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Pen.jpg',
'title' => 'Pen',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'Pottery tool set.jpg',
'title' => 'Pottery tool set',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Ruling.jpg',
'title' => 'Ruling',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'shopping bag.jpg',
'title' => 'shopping bag',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();


//Garden outdoors
$product = new \App\Product([
    'imagePath' => 'Garden Decoration.jpg',
   'title' => 'Garden Decoration',
   'description' => 'Lorem ipsum dolor sit amet consectetur',
   'price' => 10 
  ]);
  $product->save();
$product = new \App\Product([
     'imagePath' => 'Garden light.jpg',
     'title' => 'Garden light',
     'description' => 'Lorem ipsum dolor sit amet consectetur',
     'price' => 6 
]);
$product->save();

$product = new \App\Product([
    'imagePath' => 'Nice garden.jpg',
    'title' => 'Nice garden',
    'description' => 'Lorem ipsum dolor sit amet consectetur',
    'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Nice secure light.jpg',
'title' => 'Nice secure light',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();
$product = new \App\Product([
'imagePath' => 'Power garden.jpg',
'title' => 'Power garden',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 6 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Powerful torch.jpg',
'title' => 'Powerful torch',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'remonbest.jpg',
'title' => 'remonbest',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Solar panel.jpg',
'title' => 'Solar panel',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();

$product = new \App\Product([
'imagePath' => 'Security light.jpg',
'title' => 'Security light',
'description' => 'Lorem ipsum dolor sit amet consectetur',
'price' => 10 
]);
$product->save();


    }



}
