<?php

namespace Arma\Plugin\Service;

use MyHordes\Plugins\Interfaces\FixtureProcessorInterface;

class TownDataService implements FixtureProcessorInterface {

    public function process(array &$data, ?string $tag = null): void
    {
        $order = 0;
        $data = array_replace_recursive($data, [
            'arma' =>  [
                'name' =>'arma',
                'label' =>'Armageddon',
                'preset' => true,
                'ranked' => [1,7,15],
                'orderBy' => $order--,
                'help' => '<strong>Serez-vous assez fou </strong>? Si vous souhaitez vivre l\'expérience ultime de Hordes Armageddon, c\'est ici que ça se passe.',
            ],
            'small' =>  [
                'name' =>'small',
                'label' =>'Ville rapide',
                'preset' => true,
                'ranked' => [1,15,35],
                'orderBy' => $order--,
                'help' => 'Vous incarnez un petit group de survivants d\'élite. 10 joueurs face à l\'Armageddon, mais qui en valent pas moins de 20. Ok, on est loin des 40... Bonne chance.',
            ],
            'remote' => [
                'name'=>'remote',
                'label'=> 'Ville défi',
                'preset' => true,
                'ranked' => [1,10,25],
                'orderBy' => $order--,
                'help' => '20 survivants d\'élite, de quoi rivaliser avec les plus grandes légendes de l\'Outre-Monde.',
            ],
            'panda' =>  [
                'name' =>'panda',
                'label' =>'Ville impossible',
                'preset' => true,
                'ranked' => [1,7,15],
                'orderBy' => $order--,
                'help' => '<strong>Vous n\'êtes pas à la hauteur</strong>.',
            ],
            'custom' => [
                'name'=>'custom',
                'label'=>'Private Stadt',
                'preset' => false,
                'ranked' => false,
                'orderBy' => $order--
            ],
        ]);
    }
}