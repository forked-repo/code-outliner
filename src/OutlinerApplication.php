<?php

namespace Spatie\Outline;

use Spatie\Outline\Commands\OutlineFileCommand;
use Symfony\Component\Console\Application;

class OutlinerApplication extends Application
{
    public function __construct()
    {
        parent::__construct("Spatie's code outliner", '0.1');

        $command = new OutlineFileCommand();

        $this->add($command);

        $this->setDefaultCommand($command->getName(), true);
    }
}