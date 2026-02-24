<?php

namespace Arma\Plugin\Service;

use MyHordes\Plugins\Interfaces\FixtureProcessorInterface;

class EmoteDataService implements FixtureProcessorInterface {

    public function process(array &$data, ?string $tag = null): void
    {
        $data = array_replace_recursive($data, [
            ['tag'=>':hcastle:', 'path'=>'build/images/pictos/r_hcastle.gif', 'isactive'=> true, 'requiresunlock'=> true, 'index'=> 1000, 'groups' => ['emotes']],
			['tag'=>':zepui:', 'path'=>'build/images/pictos/r_zepui.gif', 'isactive'=> true, 'requiresunlock'=> true, 'index'=> 1001, 'groups' => ['emotes']],
			['tag'=>':porte:', 'path'=>'build/images/pictos/r_porte.gif', 'isactive'=> true, 'requiresunlock'=> true, 'index'=> 1002, 'groups' => ['emotes']],
			['tag'=>':reset:', 'path'=>'build/images/pictos/r_reset.gif', 'isactive'=> true, 'requiresunlock'=> true, 'index'=> 1003, 'groups' => ['emotes']],
		]);
    }
}
