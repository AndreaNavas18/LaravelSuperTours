<main id="divRoutes" class="hidden sch flex-col mfd:mt-24">
    <div class="w-full">
        <div class="w-full flex bg-white-500" style="justify-content: center">
            <div id="yesterdaySection" class="daySection sectionOff">
                <button class="btnIcontype MbtnIcontype activo" id="btntickets" aria-pressed="false" data-vista="tickets" onclick="">
                    <img src="./images/busticket(1).png" class="iconosType MiconosType">
                    <span class="titleNew MtitleNew" id="yesterday"></span>
                </button>
            </div>
            <div id="todaySection" class="daySection" style="border-right: 2px solid blue;border-left: 2px solid blue;background-color: white">
                <button style="width: 40vw" class="btnIcontype MbtnIcontype activo" id="btnmulti" aria-pressed="true" data-vista="multi" onclick="">
                    <img src="./images/busticket(1).png" class="iconosType MiconosType">
                    <span class="titleNew MtitleNew" id="today"></span>
                </button>
            </div>
            <div id="tomorrowSection" class="daySection sectionOff">
                <button class="btnIcontype MbtnIcontype activo" id="btnone" aria-pressed="false" data-vista="one" onclick="">
                    <img src="./images/busticket(1).png" class="iconosType MiconosType">
                    <span class="titleNew MtitleNew" id="tomorrow"></span>
                </button>
            </div>
        </div>
    </div>
    <table id="routesTable" class="hidden">
        <caption></caption>
        <thead>
            <tr>
                <th>Departure Time</th>
                <th>Travel Time</th>
                <th>Arrival Time</th>
                <th>Services</th>
                <th>Web Fare</th>
            </tr>
        </thead>
    </table>
</main>