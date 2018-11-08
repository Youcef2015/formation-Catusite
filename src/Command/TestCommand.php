<?php
/**
 * User: ylezghed
 * Date: 08/11/18
 * Time: 15:45
 */



namespace App\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('captusite:import:user')
            ->setDescription('Import la liste des utilisateurs')
            ->setHelp('import une liste d\'utilsateurs dans un fichier CSV');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo 'je sui dans la commande';
    }

}
