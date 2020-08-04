<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rows= [
            [
                'isbn'          =>'9029002901973',
                'title'         =>'99 Days',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Novel',
                'author'        =>'Arthur',
                'published'     =>'1993-03-12',
            ],
            [
                'isbn'          =>'9182323912821',
                'title'         =>'Journey to The Moon',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Novel',
                'author'        =>'Corden',
                'published'     =>'1999-02-12'
            ],
            [
                'isbn'          =>'9201090980909',
                'title'         =>'PHP Cookbook',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Information Technology',
                'author'        =>'Jason',
                'published'     =>'2007-08-23'
            ],
            [
                'isbn'          =>'90129318237412',
                'title'         =>'Western Cooking',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Hobby',
                'author'        =>'Armin',
                'published'     =>'1898-08-26'
            ],
            [
                'isbn'          =>'9219012093412',
                'title'         =>'I Know What You Did Last Summer',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Novel',
                'author'        =>'Billy',
                'published'     =>'2011-04-21'
            ],
            [
                'isbn'          =>'91823912821',
                'title'         =>'Dummy\'s Guide to Java',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Information Technology',
                'author'        =>'Linda',
                'published'     =>'2002-02-18'
            ],
            [
                'isbn'          =>'92091209309109',
                'title'         =>'History of England',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'History',
                'author'        =>'Michael',
                'published'     =>'1980-05-20'
            ],
            [
                'isbn'          =>'90192283981798',
                'title'         =>'Diary of Wimpy Kid',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Novel',
                'author'        =>'Zack',
                'published'     =>'2002-05-15'
            ],
            [
                'isbn'          =>'9732901939120',
                'title'         =>'Python Mastering',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Information Technology',
                'author'        =>'Jack',
                'published'     =>'2007-12-30'
            ],
             [
                'isbn'          =>'98238819283912',
                'title'         =>'Wood\'s Craft',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Hobby',
                'author'        =>'Lilly',
                'published'     =>'2001-02-28'
            ],
             [
                'isbn'          =>'9189182739921',
                'title'         =>'Legend of Pele',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'History',
                'author'        =>'John',
                'published'     =>'1988-07-18'
            ],
             [
                'isbn'          =>'9230123923741',
                'title'         =>'Financial Management',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Bussiness',
                'author'        =>'Albert',
                'published'     =>'2006-09-13'
            ],
             [
                'isbn'          =>'92823012937123',
                'title'         =>'Brain\'s Capacity',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Science',
                'author'        =>'Leonardo',
                'published'     =>'1980-05-20'
            ],
             [
                'isbn'          =>'92939931097920',
                'title'         =>'The Wonders of Galaxy',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Science',
                'author'        =>'Ricky',
                'published'     =>'2000-09-12'
            ],
             [
                'isbn'          =>'92930129301235',
                'title'         =>'Sergeant Hassan',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'History',
                'author'        =>'Ahmad',
                'published'     =>'1986-07-24'
            ],
             [
                'isbn'          =>'90923423420934',
                'title'         =>'City Hunter',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Novel',
                'author'        =>'Dill',
                'published'     =>'2016-03-21'
            ],
             [
                'isbn'          =>'92381928387238',
                'title'         =>'How to Draw Cartoon',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Hobby',
                'author'        =>'Fred',
                'published'     =>'2009-02-26'
            ],
             [
                'isbn'          =>'9823571602321',
                'title'         =>'Savings For Future',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Bussiness',
                'author'        =>'Ted',
                'published'     =>'2010-10-29'
            ],
             [
                'isbn'          =>'9012398748127',
                'title'         =>'Information Security for Beginner',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Information Technology',
                'author'        =>'Bob',
                'published'     =>'2011-01-09'
            ],
             [
                'isbn'          =>'92039019248092',
                'title'         =>'Night of Zorro',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Novel',
                'author'        =>'Khalid',
                'published'     =>'1995-12-08'
            ],
             [
                'isbn'          =>'901923091209923',
                'title'         =>'7 Wonders of The World',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Novel',
                'author'        =>'Lindsay',
                'published'     =>'2007-12-30'
            ],
             [
                'isbn'          =>'97389128909123',
                'title'         =>'Zero To Hero Super Memory',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Science',
                'author'        =>'Alfred',
                'published'     =>'2003-09-19'
            ],
             [
                'isbn'          =>'992192378681262',
                'title'         =>'Road To Merdeka',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'History',
                'author'        =>'Ali',
                'published'     =>'2000-10-16'
            ],
             [
                'isbn'          =>'98019283891828',
                'title'         =>'Traditional\'s Cook',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Hobby',
                'author'        =>'Nina',
                'published'     =>'2004-02-17'
            ],
             [
                'isbn'          =>'99737882109233',
                'title'         =>'Cisco Guide 2020',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Information Technology',
                'author'        =>'Rodrick',
                'published'     =>'1980-05-20'
            ],
             [
                'isbn'          =>'28190475689',
                'title'         =>'How to Cook',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Cooking',
                'author'        =>'Gordon',
                'published'     =>'2010-08-22'
            ],
             [
                'isbn'          =>'019283719376',
                'title'         =>'Beginner\'s Guide to Success',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Personal Development',
                'author'        =>'Jeremiah',
                'published'     =>'2010-06-20'
            ],
             [
                'isbn'          =>'9401903912899',
                'title'         =>'Positive Mind',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Personal Development',
                'author'        =>'Kendrick',
                'published'     =>'1990-06-23'
            ],
             [
                'isbn'          =>'829103730984',
                'title'         =>'Knight Of Robinhood',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Novel',
                'author'        =>'Drake',
                'published'     =>'2012-09-30'
            ],
             [
                'isbn'          =>'98199823772314',
                'title'         =>'Time Management',
                'description'   =>'lakjsdlakjsdlkjalsdjalsjd',
                'category'      =>'Personal Development',
                'author'        =>'Andrew',
                'published'     =>'2008-04-14'
            ]
            
             ];

        foreach($rows as $row){
            DB::table('book')->insert($row);
        }
            
    }
}
