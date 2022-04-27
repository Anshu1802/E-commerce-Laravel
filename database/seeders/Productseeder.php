<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;



class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

         [   'name'=>'Burger',
         'price'=>'69',
         'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT89lJxm0mPMlxBUGJFpVdQ7aoGb4-NeW674Q&usqp=CAU",
         'catageory'=>'western',
         'discription'=>'A good and delicious burger at just cheaper price',


        ],

        [
            'name'=>'Samosa Pav',
            'price'=>'17',
            'gallery'=>"https://lh5.googleusercontent.com/p/AF1QipO_iBtuMcdE5JDkDQgDg6CBmUMGNVDcBTk7heje",
            'catageory'=>'Famous',
            'discription'=>' a famous indian dish you should try',
   
   
        ],


           [
            'name'=>'Jalebi',
            'price'=>'200',
            'gallery'=>"https://c.ndtvimg.com/2021-06/prhstvbg_aloo-ki-jalebi_625x300_04_June_21.jpg",
            'catageory'=>'sweets',
            'discription'=>'a sweet sugar based sweet famous in gujrat state',
   
   
           ],

           [
            'name'=>'hotdog',
            'price'=>'60',
            'gallery'=>"https://www.verywellfit.com/thmb/TZxWrabzJann51pUtqt1I-CXunM=/1280x960/smart/filters:no_upscale()/hot-dog-crop-ab84bab6d58244e7be4c3c44413f4350.jpg",
            'catageory'=>'France',
            'discription'=>'A sweet sauce with spice tikki a perfect combination of the food',
   
   
           ],
           [
            'name'=>'Pizza',
            'price'=>'399',
            'gallery'=>"https://www.dailyhawker.com/wp-content/uploads/2021/11/best-pizza.jpg",
            'catageory'=>'Italian',
            'discription'=>'A cheese burst thin chrust pizaa at your door step',
   
   
           ],

           [
            'name'=>'Drinks',
            'price'=>'20',
            'gallery'=>"https://media.istockphoto.com/photos/soft-drinks-splashing-picture-id655123574?k=20&m=655123574&s=170667a&w=0&h=kNfet0U_qBsFdHDhpPHk8532R03rkniDu9fPXx_bLLM=",
            'catageory'=>'Refreshment',
            'discription'=>'A drinks with refreshment ',
   
   
           ],
           [
            'name'=>'Momo',
            'price'=>'70',
            'gallery'=>"https://res.cloudinary.com/swiggy/image/upload/f_auto,q_auto,fl_lossy/cij1ogv9lkhkms1rd32c",
            'catageory'=>'Nepal',
            'discription'=>'A dish with the trend of food , nepal search',
   
   
           ],
           [
            'name'=>'Noodles',
            'price'=>'99',
            'gallery'=>"https://www.ambitiouskitchen.com/wp-content/uploads/2021/03/Sweet-Spicy-Hot-Chili-Chicken-Noodles-4.jpg",
            'catageory'=>'Japanese',
            'discription'=>'A bit spice type noodles with extra veg toppings',
   
   
           ],


        //    next 8 images are here 
        [
            'name'=>'Cheese Cake',
            'price'=>'326',
            'gallery'=>"https://storage.googleapis.com/gen-atmedia/3/2014/11/7b084eaf9d7d564dd2667094c3dd1260a5e4d646.jpeg",
            'catageory'=>'Austrailian ',
            'discription'=>'A smooth texture with cheesy dip cake mouth watering cake at shop',
   
   
           ],
           [
            'name'=>'Franky',
            'price'=>'60',
            'gallery'=>"https://www.watscooking.com/images/dish/large/Screen_Shot_2017-04-24_at_10.16_.21_PM_.png",
            'catageory'=>'German ',
            'discription'=>'a veg roti with manchuranian , mayo , cheese and corn in it perfect combination',
   
   
           ],

           [
            'name'=>'Nitrogen khaman',
            'price'=>'336',
            'gallery'=>"https://thebellyrulesthemind.net/wp-content/uploads/2018/12/Homemade-Khaman-Dhokla1-720x540.png",
            'catageory'=>'Indian ',
            'discription'=>'A gujrati fav dish kaham and sev available at shop 24 hrs',
   
   
           ],

           [
            'name'=>'Usal Misal',
            'price'=>'40',
            'gallery'=>"https://www.whiskaffair.com/wp-content/uploads/2017/11/Mixed-Sprouts-Misal-pav-5.jpg",
            'catageory'=>'Indian (maharastran spl)',
            'discription'=>'A dish with spieces and snacks served with onion and chill',
   
   
           ],

           [
            'name'=>'Dosa',
            'price'=>'40',
            'gallery'=>"https://static.toiimg.com/thumb/63841432.cms?width=1200&height=900",
            'catageory'=>'Indian (south-indian) ',
            'discription'=>'Delicia , served with chutney and sambhar famous at south side in India',
   
   
           ],

           [
            'name'=>'Chhole kulche',
            'price'=>'50',
            'gallery'=>"https://1.bp.blogspot.com/-z0mlXh3oM2k/X1rUrA9WZTI/AAAAAAAAR4Y/C2nsztIcWXcQUtBdlCfQVpcNzl_uSxAmQCLcBGAsYHQ/s1000/Chole%2BKulche.webp",
            'catageory'=>'Indian (northern) ',
            'discription'=>'A better and healty option to the breafast lover ',
   
   
           ],
           


           [
            'name'=>'Lassi',
            'price'=>'45',
            'gallery'=>"https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fassets.marthastewart.com%2Fstyles%2Fwmax-300%2Fd18%2Flassi-257-md109290%2Flassi-257-md109290_vert.jpg%3Fitok%3DFEhJF-0q&q=60",
            'catageory'=>'Indian (punjab spl) ',
            'discription'=>'A thick and creamy texture of milk with sugar and you can customized the lassi like chocolate etc',
   
   
           ],
           [
            'name'=>'Gujrati Thali',
            'price'=>'200 ',
            'gallery'=>"https://content.jdmagicbox.com/comp/def_content/kathiyawadi-restaurants/1-kathiyawadi-restaurants-1-ki1aq.jpg?clr=#525214?fit=around%7C270%3A130&crop=270%3A130%3B%2A%2C%2A",
            'catageory'=>'Indian (Gujrat-india) ',
            'discription'=>'Delicia , served with chutney and sambhar famous at south side in India',
   
   
           ],
         
    
    
    
    
    
    
    
    
        ]
    );
    }
}
