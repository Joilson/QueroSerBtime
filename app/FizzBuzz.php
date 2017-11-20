<?php

class FizzBuzz
{
    /**
     *
     * @var DataProvider
     */
    private $dataProvider;
    
    public function __construct()
    {
        $this->dataProvider =  new DataProvider();
    }
    
    public function run()
    {
        foreach ($this->dataProvider->getNumbers() as $number) {

            if ($this->isFizzBuzz($number)) {
                
                $this->displayFizzBuzz();
            }elseif ($this->isFizz($number)) {
                
                $this->displayFizz();
            } elseif ($this->isBuzz($number)) {
                
                $this->displayBuzz();
            } else{
                
                echo "$number \n";
            }
        }
    }
    
    public function isFizz($number)
    {
        return $number % 3 == 0;
    }
    
    public function isBuzz($number)
    {
         return $number % 5 == 0;
    }
    
    public function isFizzBuzz($number)
    {
        return $this->isFizz($number) && $this->isBuzz($number);
    }
    
    public function displayFizz()
    {
        echo "Fizz \n";
    }
    
    public function displayBuzz()
    {
        echo "Buzz \n";
    }
    
    public function displayFizzBuzz()
    {
        echo "FizzBuzz \n";
    }
    
}