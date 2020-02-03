<?php

return array (
  'title' => 'Case 1',
  'paragraph' => 
  array (
    1 => 'It is October 8 at 12:00Z (8am local), and you have begun working your shift as an operational meteorologist for central Ontario. Today, you are in charge of issuing weather forecasts for Kapuskasing, ON (CYYU) and Timmins, ON (CYTS).',
    2 => 'Topographically, the ground gently rises from the northwest to the southeast over the area, meaning that NW flow is upslope.',
    3 => 'You received a briefing from your colleague on the night shift before he left:',
    4 => 'You sit down to begin your shift, and immediately pull-up the following satellite imagery and surface observations.',
    5 => 'The first satellite loop above is the GOES Fog Product. It is a subtraction between the 3.7µ channel and the 10.3µ channel. At night in the absence of solar radiation, high cloud appears white and low stratus cloud and fog appears dark. The second satellite loop shows a multispectral IR image, where lower cloud is mapped to blue and higher cloud is mapped to white at night.',
    6 => 'Click on the red station boxes on the 12Z GOES fog product satellite image below to view the last 12hrs of METARs for that site.',
    7 => 'Because it is just after 12Z, you now have access to new upper air soundings from the area. The three upper air sounding sites relevant for your geographic area are Pickle Lake, ON; Buffalo, NY; and Maniwaki, QC. In the image below, the 850mb winds from the soundings are plotted, as well as the actual 500mb height pattern from the 12Z soundings with the 12Z GOES NIGHT IR satellite image.',
    8 => 'You next pull up each of the soundings.',
    9 => 'After analyzing all these observations, you decide to examine some NWP fields. In the loop below, the model-derived MSLP is contoured, near-surface level wind barbs are plotted, and areas of strong winds are contoured in greens/yellows.',
    10 => 'The vertical profiles for Timmins (YTS) and Kapuskasing (YYU) above are from the 06Z run of the RDPS model, valid over 15hrs from 0900Z October 8th until 0000Z October 9th.',
    11 => 'You next examine climatological information for both Kapuskasing and Timmins in the fall. The graphs below depict the diurnal probability of fog over 24hours for September (blue), October (pink) and November (yellow) based on the last 37 years of data.',
    12 => 'It is now almost 13:00Z (9am local), and you receive a phone call from a client:',
    13 => 'Given your analysis, what do you tell her? Please explain your reasoning with at least 5 pieces of evidence for each forecast site.',
  ),
  'caption' => 
  array (
    1 => 'Topographic map of central Canada with Timmins (CYTS) and Kapuskasing (CYYU) highlighted.',
    2 => 'GOES night IR image valid at 1200Z 8 October 2019. 500 mb geopotential heights and 850 mb winds are superimposed on top of the image. Pickle Lake, Maniwaki and Buffalo are indicated on the map.',
    3 => 'Model-derived mean sea level pressure (MSLP) and 925 mb winds valid from 0900Z 8 October to 0000Z 9 October 2019. Shaded regions indicate areas of stronger winds.',
  ),
  'quote' => 
  array (
    1 => 'It was not a very busy night. Mostly clear skies expected today under a ridge of high pressure. Satellite imagery is showing some low stratus cloud in areas of central Ontario, and a few sites are reporting reductions to visibility in fog.',
    2 => 'Hi, this is Emily Smith with the provincial government in Ontario. We need to get some updates on the fog in central Ontario. Specifically, we need to know when you expect the fog to clear out and visibility to improve to at least 6SM in Timmins, and whether you expect any fog to develop over Kapuskasing this morning.',
  ),
  'tab' => 
  array (
    1 => 
    array (
      'label' => 
      array (
        1 => 'GOES FOG Product',
        2 => 'GOES NIGHT IR',
      ),
      'caption' => 
      array (
        1 => 'GOES fog product valid from 0900Z-1200Z 8 October 2019.',
        2 => 'GOES night IR product valid from 0900Z-1200Z 8 October 2019,',
      ),
    ),
    2 => 
    array (
      'label' => 
      array (
        1 => '12Z Sounding Pickle Lake',
        2 => '12Z Sounding Buffalo',
        3 => '12Z Sounding Maniwaki',
      ),
    ),
    3 => 
    array (
      'label' => 
      array (
        1 => 'YTS NWP Soundings',
        2 => 'YYU NWP Soundings',
      ),
    ),
    4 => 
    array (
      'label' => 
      array (
        1 => 'YTS Fog Climatology',
        2 => 'YYU Fog Climatology',
      ),
      'caption' => 
      array (
        1 => 'Fog climatology for September (blue), October (pink) and November (yellow) at Timmins(CYTS). The graph indicates the probability, in a given hour, that fog could occur.',
        2 => 'Fog climatology for September (blue), October (pink) and November (yellow) at Kapuskasing (CYYU). The graph indicates the probability, in a given hour, that fog could occur.',
      ),
    ),
  ),
  'points' => 'points',
  'score-header' => 
  array (
    'marks-on-page' => 'Marks on this page',
    'reasoning' => 'Reasoning',
    'points' => 'points',
  ),
);
