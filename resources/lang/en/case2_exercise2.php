<?php

return array (
  'title' => 'Case 2 Exercise 2 - Precipitation Forecast over Newfoundland',
  'paragraph' => 
  array (
    1 => 'It is November 12 at 12:00Z, and you have begun working your shift as an operational meteorologist for Northeastern Quebec and Newfoundland. Today, you are in charge of issuing weather forecasts for Natashquan, QC (CYNA) and Deer Lake, NL (CYDF). Examining the maps in the TABs below, you can see that Natashquan is located on the shore of the Gulf of St Lawrence, with terrain rising to the north. The town of Deer Lake is located in a valley oriented NE-SW on the eastern edge of the lake from which it is named, in north-central Newfoundland.',
    2 => 'You have already analyzed the satellite, RADAR, METARs, and upper air data over the area, and diagnosed the presence of a warm front (Case 2 Exercise 1). You now must create a forecast of precipitation type and amount for both CYNA and CYDF from 15:00Z November 12 until 06:00Z November 13.',
    3 => 'In the viewer above, you can see various model fields generated from the 12:00Z run of the RDPS from that day, valid from 15:00Z November 12 until 06:00Z November 13. On the left, the model fields are:',
    4 => 'On the right:',
    5 => 'You also have access to model soundings for both sites. Step through the time steps of the soundings below for CYNA and CYDF, generated from the 12:00Z model run of the RDPS and valid every 3hrs from 12:00Z November 12 until 06:00Z November 13.',
    6 => 'Using the above information, fill-in the following forecast tables, choosing the likeliest precipitation type and amount for the previous 3hrs:',
    7 => 'In the box below, explain your reasoning and outline the evidence that supports your forecasts.',
  ),
  'tab' => 
  array (
    1 => 
    array (
      'label' => 
      array (
        1 => 'Reference map',
        2 => 'Map – CYNA',
        3 => 'Map – CYDF',
      ),
      'caption' => 
      array (
        1 => '10.3 micron IR GOES satellite image over the northeast coast, taken at 12:00Z. The locations of Natashquan (CYNA) and Deer Lake (CYDF) are circled in red.',
        2 => 'Google Map view around Natashquan (CYNA), detailing the terrain.',
        3 => 'Google Map view around Deer Lake (CYDF), detailing the terrain.',
      ),
    ),
    2 => 
    array (
      'label' => 
      array (
        1 => 'SFC TEMP PRES',
        2 => 'SFC WIND PRES',
        3 => 'WET BULB TEMP',
      ),
      'caption' => 
      array (
        1 => 'Surface temperature plotted in reds (warm) to blues (cool), overlaid with mean sea level pressure in black valid 1500Z 12 November 2019 to 0600Z 13 November 2019.',
        2 => 'Wind barbs colour-coded to wind speed of winds at 10m height above ground level, overlaid with mean sea level pressure in black valid 1500Z 12 November 2019 to 0600Z 13 November 2019.',
        3 => 'Wet-bulb potential temperature at 850mb in oC plotted in yellows (warm) to greens (cool), overlaid with geopotential heights at 850mb valid 1500Z 12 November 2019 to 0600Z 13 November 2019.',
      ),
    ),
    3 => 
    array (
      'label' => 
      array (
        1 => '3HR QPF 850MB TEMP',
        2 => '700MB RH HEIGHTS',
        3 => '500MB VORT HEIGHTS',
        4 => '1000-500 THICKNESS SFC PRES',
      ),
      'caption' => 
      array (
        1 => '3HR Quantitative Precipitation Amounts, overlaid with temperature in &deg;C at 850mb valid 1500Z 12 November 2019 to 0600Z 13 November 2019.',
        2 => 'Areas of Relative humidity greater than 50% at 700mb, overlaid with geopotential heights at 700mb valid 1500Z 12 November 2019 to 0600Z 13 November 2019.',
        3 => 'Absolute vorticity at 500mb, overlaid with geopotential heights at 500mb valid 1500Z 12 November 2019 to 0600Z 13 November 2019.',
        4 => '1000-500mb thickness lines, overlaid with mean sea level pressure valid 1500Z 12 November 2019 to 0600Z 13 November 2019.',
      ),
    ),
    4 => 
    array (
      'label' => 
      array (
        1 => 'CYNA Tephi',
        2 => 'CYDF Tephi',
      ),
      'caption' => 
      array (
        1 => 'Model sounding at Natashquan, QC from the 1200Z model run of the RDPS, valid every 3hrs from 1200Z November 12 2019 until 0600Z November 13.',
        2 => 'Model sounding at Deer Lake, NL from the 1200Z model run of the RDPS, valid every 3hrs from 1200Z November 12 2019 until 0600Z November 13.',
      ),
    ),
  ),
  'list' => 
  array (
    1 => 
    array (
      'item' => 
      array (
        1 => 'Surface Temperature: Surface temperature plotted in reds (warm) to blues (cool), overlaid with mean sea level pressure in black.',
        2 => 'Near-surface winds: Wind barbs colour-coded to wind speed of winds at 10m height above ground level, overlaid with mean sea level pressure in black.',
        3 => '850mb Wet-bulb: Wet-bulb potential temperature at 850mb in oC plotted in yellows (warm) to greens (cool), overlaid with geopotential heights at 850mb.',
      ),
    ),
    2 => 
    array (
      'item' => 
      array (
        1 => '3HR QPF: 3HR Quantitative Precipitation Amounts, overlaid with temperature in &deg;C at 850mb.',
        2 => '700mb RH: Areas of Relative humidity greater than 50% at 700mb, overlaid with geopotential heights at 700mb.',
        3 => '500mb Vort: Absolute vorticity at 500mb, overlaid with geopotential heights at 500mb.',
        4 => '1000-500mb Thickness: 1000-500mb thickness lines, overlaid with mean sea level pressure.',
      ),
    ),
  ),
);
