<?php

namespace Arma\Plugin\Service;

use MyHordes\Fixtures\DTO\Awards\AwardTitlePrototypeDataContainer;
use MyHordes\Plugins\Interfaces\FixtureProcessorInterface;

class AwardTitleDataService implements FixtureProcessorInterface {

    public function process(array &$data, ?string $tag = null): void
    {
        $container = new AwardTitlePrototypeDataContainer($data);
		
        $container->add()->title('Châtelain')->unlockquantity(1)->associatedtag(':hcastle:')->associatedpicto('r_hcastle_#00')->commit();
		$container->add()->title('Encore une dure journée')->unlockquantity(100)->associatedtag(':zepui:')->associatedpicto('r_zepui_#00')->commit();
		$container->add()->title('On a pas oublié quelque chose ?')->unlockquantity(5)->associatedtag(':porte:')->associatedpicto('r_porte_#00')->commit();
		$container->add()->title('Légende vivante')->unlockquantity(1)->associatedtag(':reset:')->associatedpicto('r_reset_#00')->commit();
		
        $data = $container->toArray();
    }
}
