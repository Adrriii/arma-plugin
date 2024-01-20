<?php

namespace Arma\Plugin\Service;

use MyHordes\Plugins\Interfaces\FixtureProcessorInterface;

class TownDataService implements FixtureProcessorInterface {

    public function process(array &$data): void
    {
        $data = array_replace_recursive($data, [
            'small' =>  [
                'name' =>'small',
                'label' =>'Ville rapide',
                'preset' => true,
                'ranked' => [1,15,35],
                'orderBy' =>  2,
                'help' => 'Vous incarnez un petit group de survivants d\'élite. 10 joueurs face à l\'Armageddon, mais qui en valent pas moins de 20. Ok, on est loin des 40... Bonne chance.',
            ],
            'remote' => [
                'name'=>'remote',
                'label'=> 'Ville défi',
                'preset' => true,
                'ranked' => [1,10,25],
                'orderBy' =>  1,
                'help' => '20 survivants d\'élite, de quoi rivaliser avec les plus grandes légendes de l\'Outre-Monde.',
            ],
            'panda' =>  [
                'name' =>'panda',
                'label' =>'Armageddon',
                'preset' => true,
                'ranked' => [1,7,15],
                'orderBy' => 0,
                'help' => '<strong>Vous n\'êtes pas à la hauteur</strong>. Mais si vous souhaitez tout de même vivre l\'expérience ultime de Hordes Armageddon, c\'est ici que ça se passe.',
            ],
            'custom' => [
                'name'=>'custom',
                'label'=>'Private Stadt',
                'preset' => false,
                'ranked' => false,
                'orderBy' => -1
            ],
        ]);
    }
}