@extends('layouts.app')
@section('content')
    <div class="body-site-wrapper">
        <header class="header">
            <div class="main-page-header">
                <div data-parallaxify-range="20" class="circle-bg"></div>
                <div class="main-page-header-img"></div>
                <div class="main-page-header-wrapper vca">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="main-page-header-content light">
                                    <div class="h3 leafes light ttu">{!!@$txt->welcome_title !!}</div>
                                    <div class="fz81">{!! @$txt->welcome_title2 !!}</div>
                                    <ul>
                                      {!! @$txt->welcome_list !!}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="section main-page-advantages-section gray-section tac">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="h2 semibold">{!! @$txt->welcome_title3 !!}</div>
                        <p class="semibold">{!! @$txt->welcome_title4 !!} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="main-page-advantages-block">
                        <div class="col-md-4 col-sm-4">
                            <div class="advantage-card">
                                <div class="img">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="62mm" height="80mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 6200 8000">
                      <defs>
                          <style type="text/css">.fil0 {fill:black}</style>
                      </defs>
                                        <g id="Слой_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <g id="_3037175093824">
                                                <path d="M4526.88 5850.63c128.37,-29.91 378.81,-240.05 472.76,-289.76 48.28,35.38 783.19,1104.37 875.91,1228.64 35.03,46.95 39.43,34.04 54.36,98.14 -164.75,0 -306.83,-28.51 -457.42,-30.58 -136.57,-1.88 -350.5,-68.01 -421.17,21.17 -22.5,28.4 -198.84,698.78 -219.43,787.19 -57.66,-15.4 -88.14,-80.81 -149.49,-170.78l-682.82 -964.22c-48.78,-67.43 -83.69,-121.99 -132.76,-187.5 -48.3,-64.48 -96.24,-133.16 -132.96,-202.54 74.77,-6.22 228.34,-52.88 291.81,-74.21l287.7 -93.55 355.05 514.23c46.27,61.76 70.4,141.54 163.47,141.54 65.26,0 122,-47.01 122,-106.76 0,-67.81 -61.54,-137.19 -93.81,-180.69 -40.64,-54.8 -73.23,-102.5 -113.57,-160.94 -40.02,-57.96 -74.63,-107.6 -112.93,-161.57 -20.78,-29.29 -35.51,-46.13 -58.29,-78.97l-48.41 -88.84zm-3233.08 655.77c0,56.09 88.71,263.84 283.67,-21.35 41.92,-61.32 77.82,-107.84 121.66,-168.1l235.19 -344.32 276.39 89.62c72.58,24.43 223.76,71.53 303.12,78.14 -13.68,51.23 -512.67,739.58 -538.06,773.47l-472.51 671.27c-28.18,39.18 -36.5,66.69 -87.46,80.3l-213.19 -778.13c-62.71,-98.52 -272.47,-33.64 -412.07,-30.14 -158.31,3.95 -299.45,30.49 -472.76,30.49 15.47,-66.42 175.06,-273.75 224.46,-339.8l466.1 -662.43c47.47,-63.38 195.39,-292.08 239.71,-324.55 95.51,63.96 371.26,266.11 472.76,289.76 -25.65,96.07 -427.01,570.32 -427.01,655.77zm1982.55 -549.02c-322.42,0 -553.38,4.67 -871.15,-89.62 -172.36,-51.14 -330.38,-98.67 -481.08,-174.69 -303.31,-153 -533.51,-301.48 -779.01,-547.77 -118.6,-118.97 -199.55,-216.79 -302.3,-353.47 -102.84,-136.8 -172.88,-265.66 -250.53,-420.48 -131.44,-262.07 -274.5,-738.42 -274.5,-1052.28 0,-607.17 6.91,-653.24 188.56,-1199.23 57.48,-172.76 169.42,-357.03 265.96,-511.81 84.91,-136.15 252.83,-335.48 362.81,-445.46 2.22,-2.22 5.47,-5.35 7.73,-7.51l176.74 -158.77c359.01,-301.86 854.4,-549.48 1320.66,-616.14 620.2,-88.68 1004.18,-39.01 1549.08,165.4 223.54,83.85 632.97,336.56 799.19,497.08 264.86,255.77 377.06,386.94 572.63,708.41 368.9,606.39 464.07,1382.75 283.39,2107.91 -213.2,855.7 -885.14,1615.06 -1716.09,1913.5 -248.22,89.15 -575.76,184.93 -852.09,184.93zm-3202.58 -2912.82c0,390.94 3.26,504.59 100.48,890.79 83.49,331.68 293.8,776.54 507.25,1048.29 84.25,107.25 279.57,339.85 383.55,409.48l-890.96 1259.34c-58.44,80.12 -100.32,112.81 -100.32,235.19 0,345.94 455.94,222.44 640.65,213.64 114.32,-5.45 186.79,-15.38 304.87,-15.38 8.9,106.92 154.06,648.03 206.3,723.98 74.79,108.74 203.06,147.15 340.44,66.76 69.24,-40.5 349.17,-459.04 411.02,-549.75 92.87,-136.21 778.03,-1073.32 796.04,-1140.76l442.26 15.25c110.44,0 152.73,-15.25 259.25,-15.25 13.77,51.57 39.45,71.69 69.77,113.23 31.43,43.05 55.17,76.79 82.68,115.57l314.19 448.34c86.79,125.72 671.7,966.16 731.06,1007.48 131.96,91.84 272.33,44.11 343.51,-51.91 51.27,-69.15 124.68,-371.54 151.7,-473.57 17.9,-67.64 55.2,-191.04 60.88,-259.37 250.66,0 467.55,45.75 716.77,45.75 114.77,0 364.05,-163.29 134.94,-470.45l-897.46 -1268.09c104.58,-70.03 291.67,-292.13 374.75,-403.03 107.86,-143.98 225.91,-318.31 302.78,-490.24 243.19,-543.86 313.75,-814.38 313.75,-1455.29 0,-575.55 -261.98,-1260.23 -570.78,-1671.02 -132.78,-176.62 -370.21,-456.29 -542.2,-586.34 -72.68,-54.96 -141.99,-104.02 -220.14,-161.12 -365.95,-267.35 -1075.73,-521.39 -1533.7,-525.1 -84.18,-0.68 -122.95,-15.14 -183.26,-15.14l-335.95 30.2c-261.94,22.16 -674.66,135.6 -889.36,239.17 -267.96,129.26 -588.05,302.47 -799.47,512.06l-190.17 191.08c-278.72,303.99 -208.21,235.88 -401.86,528.42 -233.06,352.06 -433.26,983.62 -433.26,1457.79z" class="fil0"></path>
                                                <path d="M3322.1 2770.05c302.11,70.39 742.51,-41.15 820.35,49.67 28.19,32.9 34.37,91.07 13.09,126.76 -41.26,69.22 -318.3,42.55 -199.91,196.57 26.68,34.72 -4.12,11.17 44.72,31.53 54.9,22.88 84.27,1.17 84.27,83.48 0,95.07 -210.41,-4.28 -228.76,137.26 37.43,160.64 152.51,55.22 152.51,167.75 0,122.46 -228.76,-4.76 -228.76,152.5 0,136.14 152.5,46.95 152.5,167.76 0,82.3 -173.35,46.24 -265.18,54.1 -84.42,7.22 -28.4,-8.35 -100.82,-8.35 -74.14,0 -15.21,14.08 -88.57,9.87l-530.32 -3.29c-87.35,7.95 -48.26,-6.58 -97.88,-6.58 -67.7,0 -59.75,15.25 -137.26,15.25l0 -686.27c0,-143.18 -183,-143.18 -183,0l0 762.52 -442.26 0 0 -1235.28 442.26 0c0,101.12 -22.49,244.01 91.5,244.01 74.67,0 91.91,-57.94 92.04,-136.72 0.21,-132.59 -11.47,-108.96 63.72,-180.28 174.21,-165.23 552.5,-218.08 637.38,-536.91 17.98,-67.53 21.1,-137.37 106.64,-137.37 188.78,0 94.41,330.59 -141.22,545.06 -63.05,57.38 -111.85,72.74 -57.04,186.96zm-701.52 -152.5c-139.91,-32.6 -394.23,-15.25 -549.01,-15.25 -43.02,0 -94.52,27 -118.82,48.93 -35.31,31.86 -48.93,70.84 -48.93,134.07l0 1265.79c0,211.32 359.83,152.5 625.26,152.5 159.53,0 82.24,-74.45 227.49,-77.52 223.98,-4.74 1124.44,35 1236.54,-29.24 186.51,-106.9 114.39,-298.69 114.2,-309.44 -1.78,-97.7 138.91,-45.45 68.81,-346.32 162.28,-108.67 90.18,-260.48 76.25,-320.26 45.63,-68.14 106.75,-105.89 106.75,-228.76 0,-136.41 -107.59,-253.69 -219.88,-283.38 -70.13,-18.54 -412.88,-6.37 -512.13,-6.37l112.01 -192.99c71.44,-142.54 116.13,-319.17 -0.89,-451.9 -151.51,-171.83 -394.32,-115.25 -477.75,64.76 -55.8,120.42 19.86,114.31 -148.15,263.6 -86.47,76.84 -156.85,102.5 -265.6,146.17 -93.91,37.72 -175.07,109.33 -226.15,185.61z" class="fil0"></path>
                                                <path d="M4816.63 1687.28c0,80.78 101.5,175.65 168.64,288.87 262.61,442.87 334.63,713.3 334.63,1266.66 0,304.11 -103.94,635.55 -203.25,849.03 -30.87,66.35 -55.16,107.64 -91.31,167.94l-213.13 305.38 -266.36 267.42c-333.82,297.63 -902.79,514.78 -1345.75,514.78 -392.13,0 -569.74,-24.24 -919.42,-163.35 -125.05,-49.75 -332.36,-165.91 -440.19,-246.08 -77.67,-57.75 -107.71,-93.83 -180.68,-93.83 -90.56,0 -131.66,85.05 -105.88,150.67 39.57,100.75 420.28,315.16 522.64,362.85 693.54,323.14 1581.52,320.16 2243.48,-79.83 291.96,-176.42 206.81,-126.27 440.09,-322.42 35.95,-30.23 48.11,-34.16 83.62,-68.89 836.97,-818.78 967.99,-2227.36 277.95,-3138.27 -32.9,-43.43 -94.33,-141.17 -141.47,-165 -79.28,-40.06 -163.61,11.35 -163.61,104.07z" class="fil0"></path>
                                                <path d="M683.79 3120.81c0,549.16 160.9,1058.11 468.3,1468.5 67.18,89.7 76.84,132.79 172.21,132.79 101.86,0 106.75,-64.81 106.75,-137.25 0,-29.3 -152.27,-234.14 -180.07,-277.43 -494.83,-770.69 -411.87,-1903.12 176.35,-2562.86 127,-141.63 252.58,-270.39 411.04,-381.99 294.74,-222.13 768.98,-407.31 1178.72,-407.31 517.68,0 839.58,60.95 1274.71,326.57 100.55,61.38 212.73,176.69 296.08,176.69 90.4,0 132.63,-88.24 108.53,-153.31 -23.12,-62.41 -103.93,-106.4 -160.38,-145.6l-375.1 -219.66c-309.26,-156.38 -664.7,-228.7 -1082.84,-228.7 -724.15,0 -1315.93,347.53 -1681.35,712.95 -111.04,111.04 -250.5,277.57 -332.42,414.85 -162.15,271.72 -227.55,397.57 -313.68,738.6 -40.61,160.79 -66.85,350.09 -66.85,543.16z" class="fil0"></path>
                                                <path d="M2407.08 3807.08c-52.19,-224.01 -275.06,-43.99 -164.15,57.73 73.35,67.28 130.15,6.52 164.15,-57.73z" class="fil0"></path>
                                            </g>
                                        </g>
                    </svg>
                                </div>
                                <div class="text">
                                    <div class="advantage-header fz16 ttu">{!! @$txt->welcome_text1 !!} </div>
                                    <div class="advantage-desc fz16">{!! @$txt->welcome_text2 !!}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="advantage-card">
                                <div class="img">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="80mm" height="80mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd; width: 66px; height: 66px" viewBox="0 0 8000 8000">
                      <defs>
                          <style type="text/css">.fil0 {fill:black}</style>
                      </defs>
                                        <g id="Слой_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <g id="_3037175209168">
                                                <path d="M4109.23 616.27c0,82.2 71.84,120.95 151.2,120.95 65.92,0 352.89,-377.97 786.18,-377.97l2192.23 0c246.93,0 362.86,245.61 362.86,483.8l0 1768.91c0,668.06 -157.73,815.4 -548.06,1205.73l-3522.7 3522.7c-144.4,144.4 -199.54,230.56 -434.67,230.56 -177.87,0 -307.17,-178.66 -404.43,-275.92l-2041.05 -2041.05c-126.8,-126.81 -275.92,-232.1 -275.92,-449.78 0,-73.87 17.69,-135.98 45.46,-181.33 24.19,-39.51 66.42,-89.94 101.73,-125.05 79.67,-79.2 147.69,-147.25 227.01,-226.56l2509.72 -2509.75c20.9,-20.99 31.48,-32.57 53.01,-52.82l131.04 -125.98c2.91,-3.3 10.93,-13.1 13.81,-16.43l198.78 -194.3c9.81,-10.19 20.52,-20.24 30.84,-29.64l16.16 -14.08c313.75,-283.48 144,-288.69 616.69,-150.81 302.28,88.17 774.4,217.9 1044.98,361.07 -32.93,141.36 -181.79,352.29 -20.42,685.65l104.5 167.65c128.01,163.68 331.28,280.62 550.91,280.62 182.37,0 363.69,-38 501.45,-148.67 19.67,-15.8 27.59,-24.66 47.71,-43 216.74,-197.59 340.65,-560.89 204.25,-864.11l-148.31 -229.67c-43.19,-53.89 -136.76,-120.59 -206.71,-156.14 -88,-44.73 -473.98,-195.19 -473.98,35.53 0,166.82 244.33,98.24 399.92,204.84 433.3,296.87 228.41,959.31 -278.97,959.31 -427.41,0 -631.91,-449.12 -453.57,-786.18 99.47,23.18 375.89,186.17 423.34,257.03 -46.86,22.47 -96.44,12.63 -148.5,32.93 -77.69,30.3 -99.19,129.07 -45.06,190.86 121.67,138.91 465.7,-33.5 465.7,-178.44 0,-254.88 -320.91,-402.89 -524.06,-504.03 -864.31,-430.33 -2488.97,-871.79 -3497.57,-871.79 -146.7,0 -326.99,21.5 -413.56,130.72 -125.12,157.84 18.15,310.38 147.37,407.62 125.9,94.75 698.24,391.41 810.76,392.49 72.92,0.7 120.66,-47.28 120.66,-129.53 0,-129.79 -309.51,-188.79 -529.83,-316.82 -107.18,-62.29 -245.57,-105.93 -316.82,-212.34 227.2,-52.93 567.7,-12.48 810.04,21.5 164.7,23.1 643.78,87.93 762.32,144.81 -56.98,85.09 -264.68,272.24 -351.51,359.07l-2887.71 2887.71c-118.58,118.58 -253.63,245.44 -281.47,444.43 -61.41,438.86 253.19,638.53 515.81,901.15l1799.15 1799.14c105.72,105.72 249.28,277.73 378.89,346.82 273.57,145.81 595.93,65.18 805.17,-153.04l165.1 -167.52c1191.22,-1214.09 2399.8,-2407.08 3602.27,-3609.43 243.63,-243.6 442.23,-528.21 442.23,-1009.18l0 -1995.69c0,-478.72 -288.03,-710.59 -755.95,-710.59l-1799.14 0c-413.67,0 -693.79,67.1 -983.04,286.95 -56.23,42.73 -196.24,149.29 -196.24,227.09z" class="fil0"></path>
                                                <path d="M3213.49 6115.8l-1375.84 -1368.32 1874.73 -1882.26 1375.87 1368.18 -1874.76 1882.4zm-1674.46 -1402.32c0,159.06 143.96,242.24 321.27,419.55 119.61,119.61 228.13,228.13 347.74,347.73l853.95 854.49c190.77,194.84 284.18,-4.48 574.78,-295.08l1715.31 -1716.88c67.65,-90.94 31.73,-158.73 -36.71,-226.3l-1202.35 -1201.55c-473.84,-473.84 -314.08,-464.55 -975.17,196.54 -182.6,182.6 -354.12,354.13 -536.72,536.73l-937.37 937.37c-31.14,31.13 -124.73,102.69 -124.73,147.4z" class="fil0"></path>
                                                <path d="M4850.06 7586.07c-290.87,0 -449.22,-257.02 -574.52,-257.02 -91.51,0 -211.57,137.15 -21.72,263.63 277.1,184.61 327.6,235.29 626.48,235.29 397.29,0 569.38,-447 760.71,-766.3l1022.45 -1744.3c39.41,-65.45 73.17,-119.4 111.88,-190.49 38.7,-71.05 101.41,-137.64 89.93,-206.25 -14.46,-86.42 -85.39,-138.71 -168.79,-100.84 -75.77,34.41 -624.64,1020.54 -694.63,1136.19l-682.35 1162.16c-39.7,69.39 -77.66,129.17 -116.51,200.99 -64.71,119.65 -179.99,266.94 -352.93,266.94z" class="fil0"></path>
                                                <path d="M4018.52 3836.59c-143.8,-76.09 -274.7,-116.11 -436.89,-59.12 -147.08,51.68 -258.57,195.8 -258.57,391.73 0,236.27 151.18,383.95 151.18,589.64 0,120.79 -255.41,373.5 -499.07,-135.91 -22,-45.99 -33.19,-121.11 -90.56,-121.11 -61.21,0 -196.55,48.48 -196.55,90.71 0,100.58 64.9,181.42 110.85,267.13l55.46 80.61c-82.95,123.87 -136.07,114.69 -136.07,211.66 0,29.56 122.15,261.48 317.5,-30.24 404.25,270.7 870.11,-66.99 724.34,-527.79 -9.51,-30.05 -18.16,-57.21 -28.71,-92.24 -21.9,-72.71 -222.34,-468.53 45.19,-468.53 192.25,0 275.02,246.81 362.85,377.97 47.6,-22.83 211.67,-44.88 211.67,-105.83 0,-76.53 -117.78,-239.23 -151.19,-302.37 282.1,-188.91 28.5,-302.38 15.12,-302.38 -83.29,0 -147.17,93.15 -196.55,136.07z" class="fil0"></path>
                                            </g>
                                        </g>
                    </svg>
                                </div>
                                <div class="text">
                                    <div class="advantage-header fz16 ttu">{!! @$txt->welcome_text3 !!}</div>
                                    <div class="advantage-desc fz16">{!! @$txt->welcome_text4 !!}</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="advantage-card">
                                <div class="img">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" width="100mm" height="80mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 10000 8000">
                      <defs>
                          <style type="text/css">
                              .fil0 {fill:black}
                              .fil2 {fill:#7C7C7C}
                              .fil1 {fill:#8C8C8C}
                          </style>
                      </defs>
                                        <g id="Слой_x0020_1">
                                            <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                            <g id="_3037175202512">
                                                <path d="M2487.14 7331.96c-230.41,0 -408.85,-59.51 -572.07,-219.18 -518.16,-506.89 -62.53,-1435.71 703.53,-1278 687.31,141.5 815.78,1106.96 172.28,1421.55 -78.33,38.3 -186.83,75.63 -303.74,75.63zm7435.64 -1831.81l0 784.01c-1.4,37.6 -3.32,64.9 -5.95,77.18 -48.06,224.98 -231.37,375.91 -503.24,374.73 -531.34,-2.31 -386.22,-42.16 -462.08,188.26 -165.1,501.5 -703.51,803.98 -1219.44,701.5 -324.42,-64.44 -600.04,-280.84 -739.52,-561.18 -37.67,-75.73 -104.73,-225.03 -104.73,-328.84l-3381.8 0c0,97.55 -71.86,280.4 -110.31,344.94 -519.2,871.73 -1627.89,664.32 -1938.43,-117.17 -88.25,-222.09 -13.29,-228 -117.85,-229l-564.87 1.23c-175.77,0.01 -270.74,0.07 -385.92,-69.32 -91.4,-55.07 -166.98,-144.19 -200.95,-254.3 -10.59,-34.34 -16.73,-109.14 -20.12,-202.18l0 -688.18c0,-311.49 9.18,-454.93 303.49,-596.15 0,-94.45 -11.24,-1397.42 8.81,-1454.47 16.17,-46.02 61.03,-87.59 111.48,-95.05 153.2,-22.63 194.41,91.27 194.45,227.03 0.03,80.56 -11.58,114.45 -11.42,195.11 0.17,81.78 11.21,123.33 11.4,194.85 0.39,149.24 -13.21,243.06 -0.95,391.14l-12.66 400.48 1.64 117.06c179.99,17.83 1094.02,1.42 1366.48,3.46l2753.14 0.11c186.27,-0.84 1291.72,11.58 1371.94,-6.25 13.22,-104.03 4.53,-1938.49 3.31,-2076.26 -2.05,-229.88 15.82,-2018.72 -9.52,-2069.66 -12.88,-56.75 -67.88,-107.09 -121.59,-117.49l-5753.29 -2.28c-85.42,0.5 -137.98,-1.55 -179.8,-47.82 -18.18,-20.11 -31.57,-47.54 -36.91,-77.82l0 -57.94c2.5,-13.93 6.88,-27.89 13.43,-41.51 31.58,-65.62 71.62,-74.64 159.6,-78.87 75.38,0 132.42,-15.09 217.23,-10.5 67.7,3.66 131.3,15.57 216.78,10.95 67.7,-3.67 131.31,-15.57 216.79,-10.95 69.05,3.74 140.17,17.51 226.99,10.32 251.93,-20.85 305.85,10.58 433.57,0 63.67,-5.27 135.82,-16.4 216.78,-9.7 234.03,19.38 336.81,-10.95 443.39,1.02 57.54,6.46 142.56,16 216.79,7.67 57.54,-6.46 142.56,-16.01 216.78,-7.67 230.35,25.86 304.09,-17.67 443.02,1.37 201.9,27.68 286.61,-20.14 433.57,0 56.84,7.79 154,14.21 226.01,3.31 64.46,-9.76 149.61,-11.86 216.78,-1.69 153.29,23.2 284.08,-22.63 433.57,0 155.27,23.5 287.43,-21.82 442.71,1.69 149.48,22.62 280.28,-23.21 433.56,0 151.45,22.92 240.51,-26.12 442.79,1.61 158.9,21.78 264.71,14.57 419,14.57 121.77,38.11 199.18,100.17 265.46,200.62 73.82,111.87 71.32,206.19 71.32,383.92 0,307.11 0,614.22 0,921.33l606.99 0c0,-100.56 -2.54,-204.08 -0.68,-304.18 2.57,-139.18 154.39,-203.39 258.85,-105.74 32,29.91 43.39,48.55 45.72,106.03 3.94,97.22 -0.39,205.4 -0.39,303.89 246.08,0 418.4,-13.06 592.67,68.51 267.77,125.32 328.43,294.25 469.45,506.07 43.07,64.69 85.18,130.13 128.1,197.08 86.8,135.38 166.72,261.61 253.46,396.88 22.52,35.13 41.78,62.61 65.15,97.44 23.56,35.1 40.74,66.74 62.72,99.86l253.99 396.36c23.14,37.96 41.17,60.11 63.92,98.67 22.77,38.59 39.73,62.99 63.78,98.81 78.46,116.88 180.42,279.63 182.5,467.85 2.39,216.16 -0.44,434.36 -0.44,650.78 283.69,136.12 303.5,275.23 303.5,574.47zm-2742.3 1073.08c0,-666.74 821.12,-1009.23 1287.17,-539.27 310.37,312.96 303.61,771.77 16.5,1073.36 -219.19,230.25 -583.94,290.74 -873.9,152.57 -261.61,-124.64 -429.77,-393.46 -429.77,-686.66zm-6709.42 -1094.76c0,-114.09 -11.61,-270.97 162.59,-270.97l8823.05 0c110.39,0 162.58,72.56 162.58,184.26l0 856.29c0,98.62 -61.16,173.43 -162.58,173.43 -524.54,0 -451.32,31.03 -472.67,-80.13 -15.62,-81.3 -58.18,-189.98 -97.14,-260.55 -95.65,-173.28 -138.95,-213.86 -272.83,-334.16 -137.83,-123.85 -408.04,-235.65 -609.8,-235.65 -273.3,0 -431.25,26.91 -656.92,177.7 -149.5,99.89 -249.64,219.85 -342.47,372.91 -40.7,67.11 -117.05,258.27 -117.05,359.88l-3381.8 0c0,-109.1 -70.87,-277.3 -111.91,-354.17 -61.28,-114.79 -173.67,-247.34 -271.88,-324.27 -439.59,-344.35 -996.66,-301.8 -1407.3,57.97 -41.21,36.11 -76.03,82.47 -110.53,127.94 -73.08,96.33 -124.22,194.67 -164.73,312.19 -40.43,117.29 -22.65,180.34 -68.96,180.34l-737.06 0c-175.87,0 -162.59,-170.13 -162.59,-270.98 0,-53.23 151.75,-31.15 151.75,-162.59l0 -346.85c0,-39.79 -27.45,-81.22 -51.82,-99.93 -55.59,-42.69 -99.93,-13.54 -99.93,-62.66zm8848.99 -693.7l-5.22 118.01c-171.15,18.82 -2710.97,7.97 -2746.79,-4.17 -11.88,-92.38 -2.28,-242.16 -2.97,-341.46l0.52 -2373.3c4.37,-34.55 3.03,-13.06 7.9,-23.63 266.29,14.11 1159.26,-29.58 1323.91,21.63 221.15,68.77 318.16,309.42 471.1,536.93 25.01,37.2 37.8,62.56 62.75,99.84l199.55 309.89c22.26,35.59 42.44,62.2 65.08,97.51 24.47,38.16 43.15,70.56 67.11,106.31 80.13,119.54 494.12,756.84 519.04,825.01 60.33,165.05 5.28,412.94 38.02,627.43z" class="fil0"></path>
                                                <g>
                                                    <path d="M7180.48 2768.69l498.6 0c38.35,0 117.03,152.86 156.15,212.39 35.42,53.91 419.6,657.05 429.16,698.1l-1083.91 0 0 -910.49zm693.82 1213.81c187.11,-0.38 543.63,10.72 631.57,-94.36 30.88,-35.41 72.86,-114.24 72.86,-176.44 0,-170.95 -59.53,-230.03 -175.55,-409.77 -89.05,-137.95 -423.74,-721.21 -522.53,-789 -130.31,-89.44 -468.86,-58.57 -667.65,-58.57 -443.22,0 -315.98,555.53 -335.96,856.24 11.84,218.94 -54.72,626.08 285.83,678.85l711.43 -6.95z" class="fil0"></path>
                                                </g>
                                                <path d="M167.57 1684.78c0,117.44 67.11,173.43 184.27,173.43l3305.93 0c226.13,0 223.87,-314.34 10.83,-314.34l-3360.12 0c-66.47,0 -140.91,74.45 -140.91,140.91z" class="fil0"></path>
                                                <path d="M1381.55 1088.63c0,74.67 68.48,151.75 140.91,151.75l3392.64 0c35.95,0 74.35,-26.43 93.21,-47.7 81.83,-92.31 20.3,-255.8 -93.21,-255.8l-3392.64 0c-54.13,0 -108.39,44.61 -125.64,91.14 -2.65,7.13 -15.27,59.1 -15.27,60.61z" class="fil0"></path>
                                                <path d="M167.57 2291.77c0,104.43 56.61,173.43 162.59,173.43l2113.62 0c217.67,0 217.67,-314.34 0,-314.34l-2113.62 0c-83.79,0 -162.59,62.89 -162.59,140.91z" class="fil0"></path>
                                                <path d="M2151.13 6540.71c0,147.51 36.28,255.96 180.59,318.01 215.91,92.86 426.4,-80 426.4,-252.98l0 -65.03c0,-130.47 -133.37,-270.98 -314.34,-270.98 -144.77,0 -292.65,131.33 -292.65,270.98z" class="fil0"></path>
                                                <path d="M167.57 1066.95c0,97.57 46.88,173.43 130.07,173.43l650.35 0c75.62,0 138.67,-76.88 138.72,-151.82 0.06,-71.32 -64.1,-151.68 -138.72,-151.68l-650.35 0c-60.37,0 -130.07,69.7 -130.07,130.07z" class="fil0"></path>
                                                <path d="M7039.57 4600.51c236.33,0 444.41,45.1 444.41,-173.43 0,-66.46 -74.45,-140.91 -140.91,-140.91l-314.34 0c-89.81,0 -165.38,78.06 -160.12,160.35 5.32,83.21 76.51,153.99 170.96,153.99z" class="fil0"></path>
                                                <path d="M1078.06 5673.58c0,246.81 -44.13,444.4 173.42,444.4 182.47,0 140.91,-283.38 140.91,-444.4 0,-220.56 -314.33,-216.41 -314.33,0z" class="fil0"></path>
                                                <path d="M3516.86 5651.9l0 325.18c0,61.08 68.84,140.9 130.07,140.9 93.64,0 184.26,-28.04 184.26,-162.58 0,-260.7 44.95,-444.41 -184.26,-444.41 -61.23,0 -130.07,79.83 -130.07,140.91z" class="fil0"></path>
                                                <path d="M6562.65 5695.26c0,104.69 -17.24,302.04 34.82,366.23 91.24,112.49 279.52,46.77 279.52,-84.41l0 -325.18c0,-131.19 -188.28,-196.91 -279.52,-84.41 -24.12,29.74 -34.82,76.34 -34.82,127.77z" class="fil0"></path>
                                                <path d="M9001.45 5695.26c0,234.25 -43.03,422.72 184.27,422.72 65.11,0 130.07,-76.47 130.07,-140.9l0 -325.18c0,-171.45 -314.34,-221.45 -314.34,43.36z" class="fil0"></path>
                                                <path d="M5803.91 5673.58c0,246.81 -44.13,444.4 173.43,444.4 42.04,0 85.81,-31.49 106.09,-56.49 52.75,-65.04 52.75,-428.97 0,-494 -85.2,-105.04 -279.52,-64.01 -279.52,106.09z" class="fil0"></path>
                                                <path d="M4275.6 5716.93c0,222.37 -33.39,401.05 184.26,401.05 61.22,0 130.07,-79.82 130.07,-140.9l0 -325.18c0,-158.79 -314.33,-243.34 -314.33,65.03z" class="fil0"></path>
                                                <path d="M5045.17 5641.06l0 346.85c0,169.57 303.5,178.43 303.5,0l0 -346.85c0,-178.39 -303.5,-168.78 -303.5,0z" class="fil0"></path>
                                                <path d="M772.17 4784.77l1.64 117.06c179.99,17.83 1094.02,1.42 1366.48,3.46l2753.14 0.11c186.27,-0.84 1291.72,11.58 1371.94,-6.25 13.22,-104.03 4.53,-1938.49 3.31,-2076.26 -2.05,-229.88 15.82,-2018.72 -9.52,-2069.66l0 4139.93 -5473.76 0c0,-17.3 1.44,-38.53 0.97,-54.99 -0.2,-6.92 -0.84,-24.41 -2.36,-30.58 -6.66,-27.01 0.95,-6.3 -11.84,-22.82z" class="fil1"></path>
                                                <path d="M9320.05 4784.77c-18.59,21.03 -11.14,-28.42 -16.25,42.53 -1.15,15.9 1.15,47.78 1.15,65.86l-2731.46 0 0 -2732.94c-4.87,10.57 -3.53,-10.92 -7.9,23.63l-0.52 2373.3c0.69,99.3 -8.91,249.08 2.97,341.46 35.82,12.14 2575.64,22.99 2746.79,4.17l5.22 -118.01z" class="fil2"></path>
                                                <path d="M7654.99 6540.71c0,147.51 36.28,255.96 180.59,318.01 215.91,92.86 426.4,-80 426.4,-252.98l0 -65.03c0,-130.47 -133.37,-270.98 -314.33,-270.98 -144.77,0 -292.66,131.33 -292.66,270.98z" class="fil0"></path>
                                            </g>
                                        </g>
                    </svg>
                                </div>
                                <div class="text">
                                    <div class="advantage-header fz16 ttu">{!! @$txt->welcome_text5 !!}</div>
                                    <div class="advantage-desc fz16">{!! @$txt->welcome_text6 !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section main-page-grid-section gray-section">
            <div class="container">
                <div class="row">
                    <div class="main-page-grid-block">
                        <ul>
                            @foreach($categories as $k=>$v)
                                @if($k==0)
                            <li class="col-md-12">
                                <a href="{{ $urls[$v->meta->data_id]}}" class="grid-item">
                                    <div class="grid-center black">
                                        <div class="h3 semibold ttu">{{$v->title}}</div>
                                        <p>{!!$v->description!!}</p>
                                    </div>
                                    <div class="grid-img">
                                        <div class="img"><img src="{{$v->images}}" alt=""></div>
                                    </div>
                                </a>
                            </li>
                                @endif
                                @if(in_array($k,[1,2,3]))
                                    <li class="col-md-4"><a href="{{ $urls[$v->meta->data_id]}}" class="grid-item">
                                            <div class="grid-top">
                                                <div class="h4">{{$v->title}}</div>
                                                <p class="light">{!!$v->description!!}</p>
                                            </div>
                                            <div class="grid-img">
                                                <div class="img"><img src="{{$v->images}}" alt=""></div>
                                            </div></a></li>
                                @endif
                                @if(in_array($k, [4,5,8]))
                                    <li class="col-md-6"><a href="{{ $urls[$v->meta->data_id]}}" class="grid-item">
                                            <div class="grid-top">
                                                <p>{{$v->title}}</p>
                                            </div>
                                            <div class="grid-center">
                                                <div class="h3 semibold ttu">{!! $v->description !!}</div>
                                            </div>
                                            <div class="grid-img">
                                                <div class="img"><img src="{{$v->images}}" alt=""></div>
                                            </div></a></li>
                                @endif
                                @if(in_array($k, [6,7]))
                                    <li class="col-md-3"><a href="{{ $urls[$v->meta->data_id]}}" class="grid-item">
                                            <div class="grid-top">
                                                <p>{{$v->title}}</p>
                                            </div>
                                            <div class="grid-img">
                                                <div class="img"><img src="{{$v->images}}" alt=""></div>
                                            </div></a></li>
                                    @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section main-page-about-section">
            <div class="container">
                <div class="row">
                    <div class="main-page-about-block vca">
                        <div class="col-md-4">
                            <div class="main-page-about-block-left">
                                <div class="img"><img src="img/thumbs/main-page-about-img.jpg" alt="about"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="main-page-about-block-right">
                                <div class="text">
                                    <div class="h1 light">{!! @$txt->welcome_footer !!}</div>
                                    <div class="custom-scroll-block">
                                        {!! @$txt->welcome_footer_text !!} </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
