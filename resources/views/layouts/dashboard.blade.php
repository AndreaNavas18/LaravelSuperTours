<main id="divRoutes" class="hidden sch flex-col mfd:mt-24">
        <div class="flex bg-white-500 divCards">
            <div id="yesterdaySection" class="daySection sectionOff">
                <button class="btnIcontype MbtnIcontype activo" id="btnyesterday" aria-pressed="false" onclick="changeYesterday(this)">
                    <img src="./images/busticket(1).png" class="iconosType MiconosType">
                    <span class="titleNew MtitleNew" id="yesterday"></span>
                </button>
                <div id="yesterdayCards" class="daySection"></div>
            </div>
            <div id="todaySection" class="daySection sectionMain">
                <button class="btnIcontype MbtnIcontype activo" id="btntoday" aria-pressed="true" onclick="">
                    <img src="./images/busticket(1).png" class="iconosType MiconosType">
                    <span class="titleNew MtitleNew" id="today"></span>
                </button>
                <div id="todayCards" class="daySection"></div>
            </div>
            <div id="tomorrowSection" class="daySection sectionOff">
                <button class="btnIcontype MbtnIcontype activo" id="btntomorrow" aria-pressed="false" onclick="changeTomorrow(this)">
                    <img src="./images/busticket(1).png" class="iconosType MiconosType">
                    <span class="titleNew MtitleNew" id="tomorrow"></span>
                </button>
                <div id="tomorrowCards" class="daySection"></div>
            </div>
        </div>
</main>