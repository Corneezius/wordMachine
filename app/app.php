<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/word.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
           'twig.path' => __DIR__.'/../views'

       ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');

      });

    $app->get("/word", function() use($app) {
        $input_sentence = $_GET['sentence'];
        $input_palabra = $_GET['word'];
        $new_Word = new Word ($input_sentence, $input_palabra);

        $word_count = $new_Word->wordCount($input_sentence, $input_palabra);

        return $app['twig']->render('wordResult.html.twig', array('result' => $word_count));


    });

    return $app;

 ?>
