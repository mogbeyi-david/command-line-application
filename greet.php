#! /usr/bin/env php

<?php

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

require('vendor/autoload.php');

$app  = new Application('Command Line Application');

$app->register('sayHelloTo')
    ->setDescription('Offer a greeting to the given person')
    ->addArgument('name', InputArgument::OPTIONAL, 'Enter Your name here')
    ->setCode(function(InputInterface $input, OutputInterface $output){
        $name = $input->getArgument('name');
        $output->writeln('<comment>Hello, '. $name. '</comment>');
    });

$app->run();