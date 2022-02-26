<?php
namespace src;


class info
{
    Public  $roomnr;
    Public  $resnr;




   public function Border()
   {
       print ('-------------------------------------------------------'.PHP_EOL);
   }

   //Zebranie podstawowych informacji o nr pokoju i nr rezerwacji oraz sprawdzenie czy dane są poprawne

   public function question()
   {
       while(true) {

           echo 'Czy chciałbyś dodać zgłoszenie? [y/n]' . PHP_EOL;
           $ask = readline();
           if ($ask == 'y' && !is_numeric($ask)) {

               break;

           } else if ($ask == 'n' && !is_numeric($ask)) {

               print 'Nie to nie' . PHP_EOL;
               $this->Border();
               exit;

           } else {

               print 'Upewnij się, że wpisujesz "y" lub "n" ' . PHP_EOL;

           }

       }
        while(true)
        {
               if($ask == 'y' || !is_numeric($ask))
               {
                   $this->Border();
                   print 'Podaj nr pokoju zgłaszającego'.PHP_EOL;

                   $this->roomnr = readline();

                   $this->Border();
                   print 'Podaj nr rezerwacji'.PHP_EOL;

                   $this->resnr = readline();

                   $test = new problem();
                   $test->problem_description();
                   $test2 = new db($this->roomnr,$this->resnr,$test->description,$test->category);
                   $test2->connect_db();
                   $test2->add_record_to_db();

               }

               if(!is_numeric($this->resnr) || !is_numeric($this->roomnr))
               {
                   print 'coś źle wpisałeś upewnij się, że dane są liczbowe'.PHP_EOL;

               }
                else {break;}
            }


   }





}
