<?php

// src/Command/PluginCommand.php
namespace Aviboy2006\MauticPluginCreator\Command;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class PluginCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        
        $this
            ->setName('customplugin:create')
            ->setDescription('Create a custom plugin')
            ->addArgument(
                'bundlename',
                InputArgument::OPTIONAL,
                'Enter Bundle Name (Give name is camelcase do not include Bundle word): '
            ) 
            ->addArgument(
                'author',
                InputArgument::OPTIONAL,
                'Enter Author Name for plugin:'
            ) 

        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $bundle_name = $input->getArgument('bundlename');
       
        $author = $input->getArgument('author');

       

        $output->writeln($author);
    }
}