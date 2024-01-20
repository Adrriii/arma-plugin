<?php

namespace Arma\Plugin\Service;

use App\Entity\LogEntryTemplate;
use MyHordes\Plugins\Interfaces\FixtureProcessorInterface;

class PictoDataService implements FixtureProcessorInterface {

    public function process(array &$data): void
    {
		$data = array_merge_recursive($data, [
			[
				'label' => 'Château',
				'description' => 'Nombre de châteaux que vous êtes parvenu à ériger.',
				'icon' => 'r_hcastle',
				'rare' => true,
			],
			[
				'label' => 'Plus rien à fouiller ?',
				'description' => 'Nombre de ressources de mauvaise qualité que vous avez trouvé dans un secteur épuisé.',
				'icon' => 'r_zepui',
				'rare' => false,
			],
			[
				'label' => 'Portier',
				'description' => 'Nombre de fois où vous vous êtes chargé de fermer les portes de la ville.',
				'icon' => 'r_porte',
				'rare' => false,
			],
			[
				'label' => 'Âme légendaire',
				'description' => 'Votre âme a assimilé des générations entières de survivants. Vous êtes une légende.',
				'icon' => 'r_reset',
				'rare' => false,
			],
		]);
    }
}
