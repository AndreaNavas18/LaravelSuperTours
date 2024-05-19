<main id="divRoutes" class="flex sch flex-col hidden mfd:mt-24">
        <div class="flex flex-col bg-white-500 tripSelected" id="divSelecteddeparture">
            <h1 id="titleSelecteddeparture" class="outboundTitle"></h1>
        </div>
        <div class="flex bg-white-500 divCards" id="divCardsdeparture">
            <div id="yesterdaySection" class="daySection sectionOff" onclick="changeYesterday(this)">
                <button class="btnIcontype MbtnIcontype activo" id="btnyesterday" aria-pressed="false" >
                    <img src="./images/busticket(1).png" class="iconosType MiconosType">
                    <span class="titleNew MtitleNew" id="yesterday"></span>
                </button>
                <div id="yesterdayCards" class="daySection"></div>
            </div>
            <div id="todaySection" class="daySection sectionMain">
                <button class="btnIcontype MbtnIcontype activo initialCard" id="btntoday" aria-pressed="true" onclick="">
                    <img src="./images/busticket(1).png" class="iconosType MiconosType">
                    <span class="titleNew MtitleNew" id="today"></span>
                </button>
                <div id="todayCards" class="daySection"></div>
            </div>
            <div id="tomorrowSection" class="daySection sectionOff" onclick="changeTomorrow(this)">
                <button class="btnIcontype MbtnIcontype activo" id="btntomorrow" aria-pressed="false" >
                    <img src="./images/busticket(1).png" class="iconosType MiconosType">
                    <span class="titleNew MtitleNew" id="tomorrow"></span>
                </button>
                <div id="tomorrowCards" class="daySection"></div>
            </div>
        </div>
        <div class="flex flex-col bg-white-500 hidden tripSelected" id="divSelectedreturn">
            <h1 id="titleSelectedreturn" class="returnTitle"></h1>
        </div>
        <div class="flex bg-white-500 divCardsReturn hidden" id="divCardsreturn">
            <div id="yesterdaySectionReturn" class="daySection sectionOff"  onclick="changeYesterdayReturn(this)">
                <button class="btnIcontype MbtnIcontype activo" id="btnyesterdayReturn" aria-pressed="false">
                    <img src="./images/busticket(1).png" class="iconosType MiconosType">
                    <span class="titleNew MtitleNew" id="yesterdayReturn"></span>
                </button>
                <div id="yesterdayCardsReturn" class="daySection"></div>
            </div>
            <div id="todaySectionReturn" class="daySection sectionMainReturn">
                <button class="btnIcontype MbtnIcontype activo initialCard" id="btntodayReturn" aria-pressed="true" onclick="">
                    <img src="./images/busticket(1).png" class="iconosType MiconosType">
                    <span class="titleNew MtitleNew" id="todayReturn"></span>
                </button>
                <div id="todayCardsReturn" class="daySection"></div>
            </div>
            <div id="tomorrowSectionReturn" class="daySection sectionOff" onclick="changeTomorrowReturn(this)">
                <button class="btnIcontype MbtnIcontype activo" id="btntomorrowReturn" aria-pressed="false">
                    <img src="./images/busticket(1).png" class="iconosType MiconosType">
                    <span class="titleNew MtitleNew" id="tomorrowReturn"></span>
                </button>
                <div id="tomorrowCardsReturn" class="daySection"></div>
            </div>
        </div>
        <button id="btnContinue" class="buttonContinue hidden">CONTINUE</button>
</main>