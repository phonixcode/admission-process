<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        // $botman->hears('Hello', function (BotMan $bot) {
        //     $bot->reply('Hi there!');
        // });

        // $botman->hears('How are you', function (BotMan $bot) {
        //     $bot->reply('I am doing well, thank you. How about you?');
        // });

        $botman->hears('What are the admission requirements for {school}', function (BotMan $bot, $school) {
            // Convert the school name to lowercase for easy comparison
            $school_lowercase = strtolower($school);

            switch ($school_lowercase) {
                case 'harvard university':
                    $response = "The admission requirements for Harvard University depend on the program you are interested in. Please check the Harvard University website or contact their admissions office for more information.";
                    break;
                case 'stanford university':
                    $response = "To be considered for admission to Stanford University, you must complete the required coursework and submit a strong application, including essays, letters of recommendation, and test scores. Please check the Stanford University website or contact their admissions office for more information.";
                    break;
                case 'massachusetts institute of technology':
                    $response = "To be considered for admission to MIT, you must complete the required coursework and demonstrate a strong aptitude in science, math, and engineering. Please check the MIT website or contact their admissions office for more information.";
                    break;
                default:
                    $response = "I'm sorry, I'm not familiar with that school. Please check the school's website or contact their admissions office for more information about their admission requirements.";
                    break;
            }

            $bot->reply($response);
        });

        $botman->hears('What courses does {school} offer?', function (BotMan $bot, $school) {
            // Convert the school name to lowercase for easy comparison
            $school_lowercase = strtolower($school);

            switch ($school_lowercase) {
                case 'harvard university':
                    $response = "Harvard University offers a wide range of courses in various fields, including humanities, social sciences, natural sciences, and engineering. To see a list of courses and their requirements, please check the Harvard University website or contact their admissions office.";
                    break;
                case 'stanford university':
                    $response = "Stanford University offers courses in various fields, including humanities, social sciences, natural sciences, and engineering. To see a list of courses and their requirements, please check the Stanford University website or contact their admissions office.";
                    break;
                case 'massachusetts institute of technology':
                    $response = "Massachusetts Institute of Technology offers courses in science, technology, engineering, and mathematics (STEM) fields, as well as courses in the humanities, social sciences, and management. To see a list of courses and their requirements, please check the MIT website or contact their admissions office.";
                    break;
                default:
                    $response = "I'm sorry, I'm not familiar with that school. Please check the school's website or contact their admissions office for more information about the courses they offer.";
                    break;
            }

            $bot->reply($response);
        });

        $botman->hears('What are the requirements for {school} courses?', function (BotMan $bot, $school) {
            // Convert the school name to lowercase for easy comparison
            $school_lowercase = strtolower($school);

            switch ($school_lowercase) {
                case 'harvard university':
                    $response = "The requirements for Harvard University courses depend on the specific course you are interested in. To see a list of courses and their requirements, please check the Harvard University website or contact their admissions office.";
                    break;
                case 'stanford university':
                    $response = "The requirements for Stanford University courses depend on the specific course you are interested in. To see a list of courses and their requirements, please check the Stanford University website or contact their admissions office.";
                    break;
                case 'massachusetts institute of technology':
                    $response = "The requirements for Massachusetts Institute of Technology courses depend on the specific course you are interested in. To see a list of courses and their requirements, please check the MIT website or contact their admissions office.";
                    break;
                default:
                    $response = "I'm sorry, I'm not familiar with that school. Please check the school's website or contact their admissions office for more information about the courses they offer and their requirements.";
                    break;
            }

            $bot->reply($response);
        });

        // $botman->hears('What courses do you offer', function (BotMan $bot) {
        //     $bot->reply('We offer a wide range of courses in different fields, including business, engineering, health sciences, and more. Please visit our website to learn more about our programs.');
        // });

        $botman->hears('What are the visa requirements for international students', function (BotMan $bot) {
            $bot->reply('The visa requirements depend on your country of origin and the program you are interested in. Please check with your local embassy or consulate and the school’s international student office for more information.');
        });


        $botman->fallback(function (BotMan $bot) {
            $bot->reply("Sorry, I don't understand. Could you please rephrase your question?");
        });

        $botman->listen();
    }

    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function (Answer $answer) {

            $name = $answer->getText();

            $this->say('Nice to meet you ' . $name);
        });
    }
}
