<style>
    .container {
        margin-top:30px;
    }

    h1, h2, h3, h4, h5, h6 {
        font-family: 'Source Sans Pro';
        font-weight:700;
    }

    .fancyTab {
        text-align: center;
        padding:15px 0;
        background-color: #eee;
        box-shadow: 0 0 0 1px #ddd;
        top:15px;
        transition: top .2s;
    }

    .fancyTab.active {
        top:0;
        transition:top .2s;
    }

    .whiteBlock {
        display:none;
    }

    .fancyTab.active .whiteBlock {
        display:block;
        height:2px;
        bottom:-2px;
        background-color:#fff;
        width:99%;
        position:absolute;
        z-index:1;
    }

    .fancyTab a {
        font-family: 'Source Sans Pro';
        font-size:1.65em;
        font-weight:300;
        transition:.2s;
        color:#333;
    }

    /*.fancyTab .hidden-xs {
      white-space:nowrap;
    }*/

    .fancyTabs {
        border-bottom:2px solid #ddd;
        margin: 15px 0 0;
    }

    li.fancyTab a {
        padding-top: 15px;
        top:-15px;
        padding-bottom:0;
    }

    li.fancyTab.active a {
        padding-top: inherit;
    }

    .fancyTab .fa {
        font-size: 40px;
        width:100%;
        padding: 15px 0 5px;
        color:#666;
    }

    .fancyTab.active .fa {
        color: #cfb87c;
    }

    .fancyTab a:focus {
        outline:none;
    }

    .fancyTabContent {
        border-color: transparent;
        box-shadow: 0 -2px 0 -1px #fff, 0 0 0 1px #ddd;
        padding: 30px 15px 15px;
        position:relative;
        background-color:#fff;
    }

    .nav-tabs > li.fancyTab.active > a,
    .nav-tabs > li.fancyTab.active > a:focus,
    .nav-tabs > li.fancyTab.active > a:hover {
        border-width:0;
    }

    .nav-tabs > li.fancyTab:hover {
        background-color:#f9f9f9;
        box-shadow: 0 0 0 1px #ddd;
    }

    .nav-tabs > li.fancyTab.active:hover {
        background-color:#fff;
        box-shadow: 1px 1px 0 1px #fff, 0 0px 0 1px #ddd, -1px 1px 0 0px #ddd inset;
    }

    .nav-tabs > li.fancyTab:hover a {
        border-color:transparent;
    }

    .nav.nav-tabs .fancyTab a[data-toggle="tab"] {
        background-color:transparent;
        border-bottom:0;
    }

    .nav-tabs > li.fancyTab:hover a {
        border-right: 1px solid transparent;
    }

    .nav-tabs > li.fancyTab > a {
        margin-right:0;
        border-top:0;
        padding-bottom: 30px;
        margin-bottom: -30px;
    }

    .nav-tabs > li.fancyTab {
        margin-right:0;
        margin-bottom:0;
    }

    .nav-tabs > li.fancyTab:last-child a {
        border-right: 1px solid transparent;
    }

    .nav-tabs > li.fancyTab.active:last-child {
        border-right: 0px solid #ddd;
        box-shadow: 0px 2px 0 0px #fff, 0px 0px 0 1px #ddd;
    }

    .fancyTab:last-child {
        box-shadow: 0 0 0 1px #ddd;
    }

    .tabs .nav-tabs li.fancyTab.active a {
        box-shadow:none;
        top:0;
    }


    .fancyTab.active {
        background: #fff;
        box-shadow: 1px 1px 0 1px #fff, 0 0px 0 1px #ddd, -1px 1px 0 0px #ddd inset;
        padding-bottom:30px;
    }

    .arrow-down {
        display:none;
        width: 0;
        height: 0;
        border-left: 20px solid transparent;
        border-right: 20px solid transparent;
        border-top: 22px solid #ddd;
        position: absolute;
        top: -1px;
        left: calc(50% - 20px);
    }

    .arrow-down-inner {
        width: 0;
        height: 0;
        border-left: 18px solid transparent;
        border-right: 18px solid transparent;
        border-top: 12px solid #fff;
        position: absolute;
        top: -22px;
        left: -18px;
    }

    .fancyTab.active .arrow-down {
        display: block;
    }

    @media (max-width: 1200px) {

        .fancyTab .fa {
            font-size: 36px;
        }

        .fancyTab .hidden-xs {
            font-size:22px;
        }

    }


    @media (max-width: 992px) {

        .fancyTab .fa {
            font-size: 33px;
        }

        .fancyTab .hidden-xs {
            font-size:18px;
            font-weight:normal;
        }

    }


    @media (max-width: 768px) {

        .fancyTab > a {
            font-size:18px;
        }

        .nav > li.fancyTab > a {
            padding:15px 0;
            margin-bottom:inherit;
        }

        .fancyTab .fa {
            font-size:30px;
        }

        .nav-tabs > li.fancyTab > a {
            border-right:1px solid transparent;
            padding-bottom:0;
        }

        .fancyTab.active .fa {
            color: #333;
        }

    }
</style>
<div class="container-fluid">
    <div class="container">
        <section id="fancyTabWidget" class="tabs t-tabs">
            <ul class="nav nav-tabs fancyTabs" role="tablist">

                <li class="tab fancyTab active">
                    <div class="arrow-down">
                        <div class="arrow-down-inner"></div>
                    </div>
                    <a id="tab0" href="#tabBody0" role="tab" aria-controls="tabBody0" aria-selected="true"
                       data-toggle="tab" tabindex="0"><span class="fa fa-desktop"></span><span
                                class="hidden-xs">Connect</span></a>
                    <div class="whiteBlock"></div>
                </li>

                <li class="tab fancyTab">
                    <div class="arrow-down">
                        <div class="arrow-down-inner"></div>
                    </div>
                    <a id="tab1" href="#tabBody1" role="tab" aria-controls="tabBody1" aria-selected="true"
                       data-toggle="tab" tabindex="0"><span class="fa fa-firefox"></span><span
                                class="hidden-xs">Create</span></a>
                    <div class="whiteBlock"></div>
                </li>

                <li class="tab fancyTab">
                    <div class="arrow-down">
                        <div class="arrow-down-inner"></div>
                    </div>
                    <a id="tab2" href="#tabBody2" role="tab" aria-controls="tabBody2" aria-selected="true"
                       data-toggle="tab" tabindex="0"><span class="fa fa-envira"></span><span
                                class="hidden-xs">Discover</span></a>
                    <div class="whiteBlock"></div>
                </li>

                <li class="tab fancyTab">
                    <div class="arrow-down">
                        <div class="arrow-down-inner"></div>
                    </div>
                    <a id="tab3" href="#tabBody3" role="tab" aria-controls="tabBody3" aria-selected="true"
                       data-toggle="tab" tabindex="0"><span class="fa fa-mortar-board"></span><span class="hidden-xs">Align</span></a>
                    <div class="whiteBlock"></div>
                </li>

                <li class="tab fancyTab">
                    <div class="arrow-down">
                        <div class="arrow-down-inner"></div>
                    </div>
                    <a id="tab4" href="#tabBody4" role="tab" aria-controls="tabBody4" aria-selected="true"
                       data-toggle="tab" tabindex="0"><span class="fa fa-stack-overflow"></span><span class="hidden-xs">Capture</span></a>
                    <div class="whiteBlock"></div>
                </li>

                <li class="tab fancyTab">
                    <div class="arrow-down">
                        <div class="arrow-down-inner"></div>
                    </div>
                    <a id="tab5" href="#tabBody5" role="tab" aria-controls="tabBody5" aria-selected="true"
                       data-toggle="tab" tabindex="0"><span class="fa fa-question-circle"></span><span
                                class="hidden-xs">Order</span></a>
                    <div class="whiteBlock"></div>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content fancyTabContent" aria-live="polite">
                <div class="tab-pane  fade active in" id="tabBody0" role="tabpanel" aria-labelledby="tab0"
                     aria-hidden="false" tabindex="0">
                    <div>
                        <div class="row">

                            <div class="col-md-12">
                                <h2>This is the content of tab one.</h2>
                                <p>This field is a rich HTML field with a content editor like others used in Sitefinity.
                                    It accepts images, video, tables, text, etc. Street art polaroid microdosing la
                                    croix taxidermy. Jean shorts kinfolk distillery lumbersexual pinterest XOXO
                                    semiotics. Tilde meggings asymmetrical literally pork belly, heirloom food truck
                                    YOLO. Meh echo park lyft typewriter. </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane  fade" id="tabBody1" role="tabpanel" aria-labelledby="tab1" aria-hidden="true"
                     tabindex="0">
                    <div class="row">

                        <div class="col-md-12">
                            <h2>This is the content of tab two.</h2>
                            <p>This field is a rich HTML field with a content editor like others used in Sitefinity. It
                                accepts images, video, tables, text, etc. Street art polaroid microdosing la croix
                                taxidermy. Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics. Tilde
                                meggings asymmetrical literally pork belly, heirloom food truck YOLO. Meh echo park lyft
                                typewriter. </p>

                        </div>
                    </div>
                </div>
                <div class="tab-pane  fade" id="tabBody2" role="tabpanel" aria-labelledby="tab2" aria-hidden="true"
                     tabindex="0">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>This is the content of tab three.</h2>
                            <p>This field is a rich HTML field with a content editor like others used in Sitefinity. It
                                accepts images, video, tables, text, etc. Street art polaroid microdosing la croix
                                taxidermy. Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics. Tilde
                                meggings asymmetrical literally pork belly, heirloom food truck YOLO. Meh echo park lyft
                                typewriter. </p>

                        </div>
                    </div>
                </div>
                <div class="tab-pane  fade" id="tabBody3" role="tabpanel" aria-labelledby="tab3" aria-hidden="true"
                     tabindex="0">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>This is the content of tab four.</h2>
                            <p>This field is a rich HTML field with a content editor like others used in Sitefinity. It
                                accepts images, video, tables, text, etc. Street art polaroid microdosing la croix
                                taxidermy. Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics. Tilde
                                meggings asymmetrical literally pork belly, heirloom food truck YOLO. Meh echo park lyft
                                typewriter. </p>

                        </div>
                    </div>
                </div>
                <div class="tab-pane  fade" id="tabBody4" role="tabpanel" aria-labelledby="tab4" aria-hidden="true"
                     tabindex="0">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>This is the content of tab five.</h2>
                            <p>This field is a rich HTML field with a content editor like others used in Sitefinity. It
                                accepts images, video, tables, text, etc. Street art polaroid microdosing la croix
                                taxidermy. Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics. Tilde
                                meggings asymmetrical literally pork belly, heirloom food truck YOLO. Meh echo park lyft
                                typewriter. </p>

                        </div>
                    </div>
                </div>
                <div class="tab-pane  fade" id="tabBody5" role="tabpanel" aria-labelledby="tab5" aria-hidden="true"
                     tabindex="0">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>This is the content of tab six.</h2>
                            <p>This field is a rich HTML field with a content editor like others used in Sitefinity. It
                                accepts images, video, tables, text, etc. Street art polaroid microdosing la croix
                                taxidermy. Jean shorts kinfolk distillery lumbersexual pinterest XOXO semiotics. Tilde
                                meggings asymmetrical literally pork belly, heirloom food truck YOLO. Meh echo park lyft
                                typewriter. </p>

                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>