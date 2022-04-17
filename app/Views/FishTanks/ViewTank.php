
<!-- <div class="row"> -->

<div class="row" >


    <div class="col-md-6 col-xl-4 col mb-4">
        <div class="card bg-dark border-0 text-white">
            <img class="card-img" src="Uploads/UserImages/<?php echo $FishTank->TankPhoto; ?>" loading="lazy" alt="Card image">
            <!-- <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                This is a wider card with supporting text below as a natural lead-in to additional content. This
                content is a little bit longer.
                </p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div> -->
        </div>
    </div>

    <div class="col-lg-8 mb-4 col ">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                <div class="card-body">
                    <h5 class="card-title text-primary"><?php echo $FishTank->TankName;?></h5>
                    <p class="mb-4">
                    <?php echo nl2br($FishTank->TankDescription); ?>
                    </p>

                </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                <div class="card-body pb-0 px-0 px-md-4">
                    <img src="../Template/Sneat/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                </div>
                </div>
            </div>
        </div>
    </div>



    <div class="col-md-6 col-lg-4 col-xl-4 col">
        <div class="card h-80">
        <div class="card-header d-flex align-items-center justify-content-between pb-0">
            <div class="card-title mb-0">
            <h5 class="m-0 me-2">Configured Devices</h5>
            <small class="text-muted"><?php echo count($TankDevices); ?> devices connected</small>
            </div>
            <div class="dropdown">
            <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                <a class="dropdown-item" href="javascript:void(0);">Tank Devices -></a>
                <!-- <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a> -->
            </div>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3" style="position: relative;">
           
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 311px; height: 139px;"></div></div><div class="contract-trigger"></div></div></div>
            <ul class="p-0 m-0">

                <?php //print_r($TankDevices); ?>

            <?php foreach ($TankDevices as $Device){ ?>    
                <li class="d-flex mb-4 pb-1">
                    <div class="avatar flex-shrink-0 me-3">
                    <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
                    </div>
                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                    <div class="me-2">
                        <h6 class="mb-0"><?php echo $Device->DeviceName; ?></h6>
                        <small class="text-muted"><?php echo substr($Device->DeviceDescription,0,35); ?></small>
                    </div>
                    <!-- <div class="user-progress">
                        <small class="fw-semibold">82.5k</small>
                    </div> -->
                    </div>
                </li>
            <?php } ?>
            </ul>
        </div>
        </div>
    </div>


    <div class="col-md-6 col-lg-4 col">
        <div class="card h-80">
        <div class="card-header d-flex align-items-center justify-content-between pb-0">
            <div class="card-title mb-0">
            <h5 class="m-0 me-2">Tank Temperature</h5>
            <small class="text-muted">Past 24 Hours</small>
            </div>
            <div class="dropdown">
            <button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                <a class="dropdown-item" href="javascript:void(0);">Tank Devices -></a>
                <!-- <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a> -->
            </div>
            </div>
        </div>
        <div class="card-body my-4 px-0">
            <div class="tab-content p-0">
            <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel" style="position: relative;">
                
                <div id="incomeChart" style="min-height: 215px;"><div id="apexchartska4q2qva" class="apexcharts-canvas apexchartska4q2qva apexcharts-theme-light" style="width: 358px; height: 215px;"><svg id="SvgjsSvg1744" width="358" height="215" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1746" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 10)"><defs id="SvgjsDefs1745"><clipPath id="gridRectMaskka4q2qva"><rect id="SvgjsRect1751" width="346.6901035308838" height="176.80866563796997" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskka4q2qva"></clipPath><clipPath id="nonForecastMaskka4q2qva"></clipPath><clipPath id="gridRectMarkerMaskka4q2qva"><rect id="SvgjsRect1752" width="368.6901035308838" height="202.80866563796997" x="-14" y="-14" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1772" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1773" stop-opacity="0.5" stop-color="rgba(105,108,255,0.5)" offset="0"></stop><stop id="SvgjsStop1774" stop-opacity="0.25" stop-color="rgba(195,196,255,0.25)" offset="0.95"></stop><stop id="SvgjsStop1775" stop-opacity="0.25" stop-color="rgba(195,196,255,0.25)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1750" x1="0" y1="0" x2="0" y2="174.80866563796997" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="174.80866563796997" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1778" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1779" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1781" font-family="Helvetica, Arial, sans-serif" x="0" y="203.80866563796997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1782"></tspan><title></title></text><text id="SvgjsText1784" font-family="Helvetica, Arial, sans-serif" x="48.670014790126245" y="203.80866563796997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1785">Jan</tspan><title>Jan</title></text><text id="SvgjsText1787" font-family="Helvetica, Arial, sans-serif" x="97.3400295802525" y="203.80866563796997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1788">Feb</tspan><title>Feb</title></text><text id="SvgjsText1790" font-family="Helvetica, Arial, sans-serif" x="146.01004437037878" y="203.80866563796997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1791">Mar</tspan><title>Mar</title></text><text id="SvgjsText1793" font-family="Helvetica, Arial, sans-serif" x="194.68005916050504" y="203.80866563796997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1794">Apr</tspan><title>Apr</title></text><text id="SvgjsText1796" font-family="Helvetica, Arial, sans-serif" x="243.3500739506313" y="203.80866563796997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1797">May</tspan><title>May</title></text><text id="SvgjsText1799" font-family="Helvetica, Arial, sans-serif" x="292.0200887407575" y="203.80866563796997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1800">Jun</tspan><title>Jun</title></text><text id="SvgjsText1802" font-family="Helvetica, Arial, sans-serif" x="340.69010353088373" y="203.80866563796997" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-weight="400" fill="#a1acb8" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1803">Jul</tspan><title>Jul</title></text></g></g><g id="SvgjsG1806" class="apexcharts-grid"><g id="SvgjsG1807" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1809" x1="0" y1="0" x2="340.6901035308838" y2="0" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1810" x1="0" y1="43.70216640949249" x2="340.6901035308838" y2="43.70216640949249" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1811" x1="0" y1="87.40433281898498" x2="340.6901035308838" y2="87.40433281898498" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1812" x1="0" y1="131.10649922847747" x2="340.6901035308838" y2="131.10649922847747" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1813" x1="0" y1="174.80866563796997" x2="340.6901035308838" y2="174.80866563796997" stroke="#eceef1" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1808" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1815" x1="0" y1="174.80866563796997" x2="340.6901035308838" y2="174.80866563796997" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1814" x1="0" y1="1" x2="0" y2="174.80866563796997" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1753" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1754" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1776" d="M 0 174.80866563796997L 0 113.62563266468048C 17.034505176544187 113.62563266468048 31.635509613582066 126.73628258752822 48.67001479012625 126.73628258752822C 65.70451996667043 126.73628258752822 80.30552440370832 87.40433281898498 97.3400295802525 87.40433281898498C 114.37453475679669 87.40433281898498 128.97553919383458 122.36606594657898 146.01004437037875 122.36606594657898C 163.04454954692295 122.36606594657898 177.6455539839608 34.96173312759399 194.680059160505 34.96173312759399C 211.7145643370492 34.96173312759399 226.31556877408707 104.88519938278198 243.35007395063127 104.88519938278198C 260.38457912717547 104.88519938278198 274.9855835642133 65.55324961423875 292.0200887407575 65.55324961423875C 309.0545939173017 65.55324961423875 323.6555983543396 91.77454945993424 340.6901035308838 91.77454945993424C 340.6901035308838 91.77454945993424 340.6901035308838 91.77454945993424 340.6901035308838 174.80866563796997M 340.6901035308838 91.77454945993424z" fill="url(#SvgjsLinearGradient1772)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskka4q2qva)" pathTo="M 0 174.80866563796997L 0 113.62563266468048C 17.034505176544187 113.62563266468048 31.635509613582066 126.73628258752822 48.67001479012625 126.73628258752822C 65.70451996667043 126.73628258752822 80.30552440370832 87.40433281898498 97.3400295802525 87.40433281898498C 114.37453475679669 87.40433281898498 128.97553919383458 122.36606594657898 146.01004437037875 122.36606594657898C 163.04454954692295 122.36606594657898 177.6455539839608 34.96173312759399 194.680059160505 34.96173312759399C 211.7145643370492 34.96173312759399 226.31556877408707 104.88519938278198 243.35007395063127 104.88519938278198C 260.38457912717547 104.88519938278198 274.9855835642133 65.55324961423875 292.0200887407575 65.55324961423875C 309.0545939173017 65.55324961423875 323.6555983543396 91.77454945993424 340.6901035308838 91.77454945993424C 340.6901035308838 91.77454945993424 340.6901035308838 91.77454945993424 340.6901035308838 174.80866563796997M 340.6901035308838 91.77454945993424z" pathFrom="M -1 218.51083204746246L -1 218.51083204746246L 48.67001479012625 218.51083204746246L 97.3400295802525 218.51083204746246L 146.01004437037875 218.51083204746246L 194.680059160505 218.51083204746246L 243.35007395063127 218.51083204746246L 292.0200887407575 218.51083204746246L 340.6901035308838 218.51083204746246"></path><path id="SvgjsPath1777" d="M 0 113.62563266468048C 17.034505176544187 113.62563266468048 31.635509613582066 126.73628258752822 48.67001479012625 126.73628258752822C 65.70451996667043 126.73628258752822 80.30552440370832 87.40433281898498 97.3400295802525 87.40433281898498C 114.37453475679669 87.40433281898498 128.97553919383458 122.36606594657898 146.01004437037875 122.36606594657898C 163.04454954692295 122.36606594657898 177.6455539839608 34.96173312759399 194.680059160505 34.96173312759399C 211.7145643370492 34.96173312759399 226.31556877408707 104.88519938278198 243.35007395063127 104.88519938278198C 260.38457912717547 104.88519938278198 274.9855835642133 65.55324961423875 292.0200887407575 65.55324961423875C 309.0545939173017 65.55324961423875 323.6555983543396 91.77454945993424 340.6901035308838 91.77454945993424" fill="none" fill-opacity="1" stroke="#696cff" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskka4q2qva)" pathTo="M 0 113.62563266468048C 17.034505176544187 113.62563266468048 31.635509613582066 126.73628258752822 48.67001479012625 126.73628258752822C 65.70451996667043 126.73628258752822 80.30552440370832 87.40433281898498 97.3400295802525 87.40433281898498C 114.37453475679669 87.40433281898498 128.97553919383458 122.36606594657898 146.01004437037875 122.36606594657898C 163.04454954692295 122.36606594657898 177.6455539839608 34.96173312759399 194.680059160505 34.96173312759399C 211.7145643370492 34.96173312759399 226.31556877408707 104.88519938278198 243.35007395063127 104.88519938278198C 260.38457912717547 104.88519938278198 274.9855835642133 65.55324961423875 292.0200887407575 65.55324961423875C 309.0545939173017 65.55324961423875 323.6555983543396 91.77454945993424 340.6901035308838 91.77454945993424" pathFrom="M -1 218.51083204746246L -1 218.51083204746246L 48.67001479012625 218.51083204746246L 97.3400295802525 218.51083204746246L 146.01004437037875 218.51083204746246L 194.680059160505 218.51083204746246L 243.35007395063127 218.51083204746246L 292.0200887407575 218.51083204746246L 340.6901035308838 218.51083204746246"></path><g id="SvgjsG1755" class="apexcharts-series-markers-wrap" data:realIndex="0"><g id="SvgjsG1757" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskka4q2qva)"><circle id="SvgjsCircle1758" r="6" cx="0" cy="113.62563266468048" class="apexcharts-marker no-pointer-events wudk9hcq9" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle><circle id="SvgjsCircle1759" r="6" cx="48.67001479012625" cy="126.73628258752822" class="apexcharts-marker no-pointer-events wbp2qijst" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1760" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskka4q2qva)"><circle id="SvgjsCircle1761" r="6" cx="97.3400295802525" cy="87.40433281898498" class="apexcharts-marker no-pointer-events wzj6ugli1" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1762" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskka4q2qva)"><circle id="SvgjsCircle1763" r="6" cx="146.01004437037875" cy="122.36606594657898" class="apexcharts-marker no-pointer-events wmtano5pji" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1764" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskka4q2qva)"><circle id="SvgjsCircle1765" r="6" cx="194.680059160505" cy="34.96173312759399" class="apexcharts-marker no-pointer-events warxnthwe" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1766" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskka4q2qva)"><circle id="SvgjsCircle1767" r="6" cx="243.35007395063127" cy="104.88519938278198" class="apexcharts-marker no-pointer-events wuoa21hl1" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1768" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskka4q2qva)"><circle id="SvgjsCircle1769" r="6" cx="292.0200887407575" cy="65.55324961423875" class="apexcharts-marker no-pointer-events wcvbnnb79" stroke="transparent" fill="transparent" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="6"></circle></g><g id="SvgjsG1770" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskka4q2qva)"><circle id="SvgjsCircle1771" r="6" cx="340.6901035308838" cy="91.77454945993424" class="apexcharts-marker no-pointer-events whsk7d3um" stroke="#696cff" fill="#ffffff" fill-opacity="1" stroke-width="4" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="6"></circle></g></g></g><g id="SvgjsG1756" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1816" x1="0" y1="0" x2="340.6901035308838" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1817" x1="0" y1="0" x2="340.6901035308838" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1818" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1819" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1820" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1821" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1822" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1749" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1804" class="apexcharts-yaxis" rel="0" transform="translate(-8, 0)"><g id="SvgjsG1805" class="apexcharts-yaxis-texts-g"></g></g><g id="SvgjsG1747" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 107.5px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(105, 108, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
               
            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 359px; height: 377px;"></div></div><div class="contract-trigger"></div></div></div>
            </div>
        </div>
        </div>
    </div>

</div>

