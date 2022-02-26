<?php
namespace src;

class problem
{
    public $description;
    public $category;


    public function problem_description()
    {
            $line = new info();
            $line->border();
            print 'Dokładnie opisz problem' . PHP_EOL;
            $this -> description = readline();
            $line->border();
            while(true) {
                print 'Wybierz kategorie problemu' . PHP_EOL;
                print '1. Obsługa pokoju' . PHP_EOL;
                print '2. Usterka techniczna' . PHP_EOL;
                print '3. Uwagi' . PHP_EOL;
                $this->category = readline();
                    if($this->category > 0 && $this->category < 4 && is_numeric($this->category)){
                        break;
                    }
                    else {
                        print 'Upewnij się, że wpisujesz kategorie od 1 do 3'.PHP_EOL;
                        $line->border();
                    }


             }
            }




    }

