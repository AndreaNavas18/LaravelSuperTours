<main id="divTable" class="hidden mt-24 flex-col">
    <div class="buttonround1 bg-white ml-auto flex-col md:flex md:ml-40 buttonroundPc1">
        <button class="btnIcontype MbtnIcontype" id="btntickets" aria-pressed="false" data-vista="tickets" onclick="">
            <img src="./images/busticket(1).png" class="iconosType MiconosType">
            <span class="titleNew MtitleNew" id="yesterday"></span>
        </button>
        <button class="btnIcontype MbtnIcontype activo" id="btnmulti" aria-pressed="true" data-vista="multi" onclick="">
            <img src="./images/busticket(1).png" class="iconosType MiconosType">
            <span class="titleNew MtitleNew" id="today"></span>
        </button>
        <button class="btnIcontype MbtnIcontype" id="btnone" aria-pressed="false" data-vista="one" onclick="">
            <img src="./images/busticket(1).png" class="iconosType MiconosType">
            <span class="titleNew MtitleNew" id="tomorrow"></span>
        </button>
    </div>

    <table id="routesTable" class="">
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