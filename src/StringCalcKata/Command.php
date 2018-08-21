<?php
namespace StringCalcKata;

use Symfony\Component\Console\Command\Command as SymfonyConsoleCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Command extends SymfonyConsoleCommand
{
    /** @var Calculator */
    private $calculator;

    public function __construct()
    {
        parent::__construct();
        $this->calculator = new Calculator();
    }

    public function configure()
    {
        $this
            ->setName('calculate')
            ->addArgument('inputstring', InputArgument::REQUIRED)
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $inputString = $input->getArgument('inputstring');
        $result = $this->calculator->calculate($inputString);
        $output->writeln($result->display());
    }
}
