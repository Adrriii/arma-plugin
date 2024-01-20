<?php

namespace Arma\Plugin\Service;

use App\Entity\LogEntryTemplate;
use MyHordes\Plugins\Interfaces\FixtureProcessorInterface;

class LogsDataService implements FixtureProcessorInterface {

    public function process(array &$data): void
    {
		$data = array_merge_recursive($data, [
            ['text'=>'Les Hordes commencent à sérieusement s\'intéresser à vous... peut-être serait-il mieux de commencer à vous barricader.', 'name'=>'nightlyAttackStarting', 'type'=>LogEntryTemplate::TypeNightly, 'class'=>LogEntryTemplate::ClassCritical, 'secondaryType'=>null, 'variableTypes'=>array()],
		]);
    }
}
