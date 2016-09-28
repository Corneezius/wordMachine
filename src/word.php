<?php

    class Word
    {
        private $sentence;
        private $palabra;
        private $frequency;

        function __construct($input_sentence, $input_palabra)
        {
            $this->sentence = $input_sentence;
            $this->palabra = $input_palabra;
            $this->count = 0;
        }

        function getSentence()
        {
            return $this->sentence;
        }

        function setSentence($input_sentence)
        {
            $this->sentence = (string) $input_sentence;
        }

        function getPalabra()
        {
            return $this->palabra;
        }

        function setPalabra($input_palabra)
        {
            $this->palabra = (string) $input_palabra;
        }

        function setFrequency($appearances)
        {
            $this->frequency = (int) $appearances;
        }

        function wordCount()
        {
            $input_sentence = $this->getSentence();
            $lower_sentence = strtolower($input_sentence);
            $input_palabra = $this->getPalabra();
            $lower_palabra = strtolower($input_palabra);
            $sentence_bit = explode(" ", $lower_sentence);
            $result = 0;

            foreach ($sentence_bit as $bit) {

              if ($bit == $lower_palabra)
              {
                $result++;
              }

            }
          return $result;
        }
    }
