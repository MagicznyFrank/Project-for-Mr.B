<?php
include_once ('problem.php');
include_once ('run.php');

class info
{
    Public  $roomnr;
    Public  $resnr;

    public function test(){

         $this->question();
   }

   public function ClearScreen()
   {

       print ('-------------------------------------------------------'.PHP_EOL);



   }

   //Zebranie podstawowych informacji o nr pokoju i nr rezerwacji oraz sprawdzenie czy dane są poprawne

   public function question()
   {
       while(true) {

           echo 'Lecimy z tematem? [y/n]' . PHP_EOL;
           $ask = readline();
           if ($ask == 'y' && !is_numeric($ask)) {

               print 'NO TO LECIMY PA TERA!' . PHP_EOL;break;

           } else if ($ask == 'n' && !is_numeric($ask)) {

               print 'jak to kurde nie' . PHP_EOL;

           } else {

               print 'ślepy czy głupi wpisz "y" albo "n", a nie jakieś dzikie węże' . PHP_EOL;

           }

       }
        while(true)
        {


               if($ask == 'y' || !is_numeric($ask))
               {
                   print 'Podaj nr pokoju zgłaszającego'.PHP_EOL;

                   $roomnr = readline();

                   print 'Podaj nr rezerwacji'.PHP_EOL;

                   $resnr = readline();

               }

               if(!is_numeric($resnr) || !is_numeric($roomnr))
               {
                   print 'coś źle wpisałeś upewnij się, że dane są liczbowe'.PHP_EOL;
                   $this->ClearScreen();
               }
                else {break;}
            }

   }




}
