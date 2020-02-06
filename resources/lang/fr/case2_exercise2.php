<?php

return array (
  'title' => 'Cas 2 Exercice 2 - Prévision de précipitation sur Terre-Neuve',
  'paragraph' => 
  array (
    1 => 'Nous sommes le 12 novembre à 1200Z et vous venez de débuter votre quart de travail comme météorologiste opérationnel pour Terre-Neuve et le nord-est du Québec. Aujourd’hui vous êtes en charge d’émettre les prévisions météo pour Natashquan, Qc (CYNA) et Deer Lake, T-N (CYDF). En examinant les cartes ci-bas vous pouvez voir que Natashquan est situé sur la côte du Golfe St-Laurent avec une ascendance topographique vers le nord. Deer Lake est situé dans une vallée orientée NE-SO sur la partie est du lac du même nom dans le centre-nord de Terre-Neuve.',
    2 => 'Vous avez déjà analysé les données satellite, radar, METAR et en altitude pour cette région et diagnostiqué la présence d’un front chaud (Cas 2 Exercice 1). Vous devez maintenant produire une prévision du type et quantité de précipitation pour CYNA et CYDF pour la période du 12 novembre 1500Z jusqu’au 13 novembre 0600Z.',
    3 => 'Dans la visionneuse ci-haut vous pouvez voir différents champs de modèle générés à partir de la passe 1200Z du RDPS de cette journée, valide du 12 novembre 1500Z au 13 novembre 0600Z. À la gauche, les champs de modèle sont :',
    4 => 'À la droite:',
    5 => 'Vous avez aussi accès aux données de sondage du modèle pour les 2 sites. Vous pourrez parcourir les pas de temps des sondages ci-bas pour CYNA et CYDF générés de la passe 1200Z du modèle RDPS et valides chaque 3 hrs de 1200Z le 12 novembre jusqu’à 0600Z le 13 novembre.',
    6 => 'En utilisant l’information ci-haut, remplissez les tables de prévision suivantes en choisissant le type de précipitation le plus probable et les quantités pour les 3 hrs précédentes.',
    7 => 'Dans la boîte ci-dessous, expliquez votre raisonnement et présentez les preuves qui étayent vos prévisions.',
  ),
  'tab' => 
  array (
    1 => 
    array (
      'label' => 
      array (
        1 => 'Carte de reférence',
        2 => 'Carte – CYNA',
        3 => 'Carte – CYDF',
      ),
      'caption' => 
      array (
        1 => 'Image satellite 10.3μ IR GOES sur la côte nord-est prise à 1200Z. Natashquan (CYNA) et Deer Lake (CYDF) sont encerclées en rouge.',
        2 => 'Vue Google Map autour de Natashquan (CYNA), montrant le terrain.',
        3 => 'Vue Google Map autour de Deer Lake (CYDF), montrant le terrain.',
      ),
    ),
    2 => 
    array (
      'label' => 
      array (
        1 => 'SFC TEMP PRES',
        2 => 'SFC VENT PRES',
        3 => 'TEMP THERMOMÈTRE MOUILLÉ',
      ),
      'caption' => 
      array (
        1 => 'Température de surface tracée en rouge (chaud) à bleu (frais) avec la pression moyenne de surface en noir valide le 12 novembre 2019 1500Z jusqu’au 13 novembre 2019 0600Z.',
        2 => 'Barbules de vent codés en couleurs de vitesse de vent à 10m au-dessus du sol avec la pression au niveau moyen de la mer superposée en noir, valide de 1500Z le 12 novembre 2019 à 0600Z le 13 novembre 2019.',
        3 => 'Température potentielle du thermomètre mouillé à 850mb tracée en °C de jaune (chaud) à vert (fais) avec les hauteurs géopotentielles de 850 mb superposées, valide de 1500Z le 12 novembre 2019 à 0600Z le 13 novembre 2019.',
      ),
    ),
    3 => 
    array (
      'label' => 
      array (
        1 => '3HR QPP 850MB TEMP',
        2 => '700MB HR HAUTEURS',
        3 => '500MB TOURBILLON HAUTEURS',
        4 => '1000-500 ÉPAISSEURS PRES SFC',
      ),
      'caption' => 
      array (
        1 => 'Quantités de précipitation prévues aux 3 hrs avec la température en °C à 850mb valide du 12 novembre 2019 1500Z au 13 novembre 2019 0600Z',
        2 => 'Areas of Relative humidity greater than 50% at 700mb, overlaid with geopotential heights at 700mb, valide de 1500Z le 12 novembere 2019 à 0600Z le 13 novembre 2019.',
        3 => 'Tourbillon absolu à 500mb avec les hauteurs géopotentielles de 500mb superposées, valide de 1500Z le 12 novembre 2019 à 0600Z le 13 novembre 2019.',
        4 => 'Contours d’épaisseurs 1000-500mb avec la pression au niveau moyen de la mer superposée, valide de 1500Z le 12 novembre 2019 à 0600Z le 13 novembre 2019.',
      ),
    ),
    4 => 
    array (
      'label' => 
      array (
        1 => 'PNT CYNA Téphi',
        2 => 'CYDF Téphi',
      ),
      'caption' => 
      array (
        1 => 'Sondage du modèle à Natashquan, Qc de la passe 1200Z du RDPS valide aux 3 hrs du 12 novembre 1200Z au 13 novembre 0600Z',
        2 => 'Sondage du modèle à Deer Lake, T-N de la passe 1200Z du RDPS valide aux 3 hrs du 12 novembre 1200Z au 13 novembre 0600Z',
      ),
    ),
  ),
  'list' => 
  array (
    1 => 
    array (
      'item' => 
      array (
        1 => 'Température de surface: température tracée en rouge (chaud) vers bleu (frais) avec la pression au niveau moyen de la mer en noir.',
        2 => 'Vents près de la surface: barbules de vent codés en couleurs de vitesse de vent à 10m au-dessus du sol avec la pression au niveau moyen de la mer superposée en noir.',
        3 => 'Température du thermomètre mouillé à 850mb : Température potentielle du thermomètre mouillé à 850mb tracée en °C de jaune (chaud) à vert (fais) avec les hauteurs géopotentielles de 850 mb superposées.',
      ),
    ),
    2 => 
    array (
      'item' => 
      array (
        1 => 'QPP 3hrs: Quantités de précipitation prévues aux 3 hrs avec la température à 850mb en °C superposée.',
        2 => 'HR 700mb: Secteurs où l’humidité relative à 700mb est supérieure à 50% avec les hauteurs géopotentielles de 700mb superposées.',
        3 => 'Tourbillon 500mb: Tourbillon absolu à 500mb avec les hauteurs géopotentielles de 500mb superposées.',
        4 => 'Épaisseurs 1000-500mb: contours d’épaisseurs 1000-500mb avec la pression au niveau moyen de la mer superposée.',
      ),
    ),
  ),
);
