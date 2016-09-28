<?php

    require_once __DIR__."/../src/word.php";

    class WordTest extends PHPUnit_Framework_TestCase
    {
        function test_OneMatch(){

          //Arrange

          $test_sentence = "Ducks are delicious.";
          $test_palabra= "Ducks";
          $test_word = new Word($test_sentence, $test_palabra);
          //Act
          $result = $test_word->wordCount();
          //Assert
          $this->assertEquals(1, $result);
        }

        function test_MultipleMatch()
        {
            //Arrange
          $test_sentence = "Ducks are delicious and Ducks are Ducks";
          $test_palabra= "Ducks";
          $test_word = new Word ($test_sentence, $test_palabra);
            //Act
          $result = $test_word->wordCount();
          //Assert
          $this->assertEquals(3, $result);
        }

        function test_NoMatch()
        {
            //Arrange
          $test_sentence = "Chickens are bettern that other Ucks.";
          $test_palabra= "Ducks";
          $test_word = new Word ($test_sentence, $test_palabra);
            //Act
          $result = $test_word->wordCount();
            //Assert
          $this->assertEquals(0, $result);
        }
    }
?>
