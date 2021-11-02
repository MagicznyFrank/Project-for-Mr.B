<?php
include_once ('info.php');
include_once ('run.php');

class problem
{
    public $descritpion;
    public $category;
    function problem_description()
    {
        print ('-------------------------------------------------------'.PHP_EOL);
        print ('Dokładnie opisz problem');

        $description = readline();

        switch ($description){
            case 0:
                $category = 0;
                break;
            case 1:
                $category = 1;
                break;
            case 2:
                $category = 2;




        }


    }
}