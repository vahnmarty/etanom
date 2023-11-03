@push('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
crossorigin=""/>
<style>
    #map { height: 100vh; }
</style>
@endpush

@push('js')
 <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
<script src="https://leafletjs.com/examples/choropleth/us-states.js"></script>
     <script type="text/javascript">

        const map = L.map('map', {
            scrollWheelZoom: false
        }).setView([11.5326,122.7457], 6);
    
        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    
        // control that shows state info on hover
        const info = L.control();
    
        info.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info');
            this.update();
            return this._div;
        };
    
        info.update = function (props) {
            const contents = props ? `<b>${props.name}</b><br />${props.density} people / mi<sup>2</sup>` : 'Hover over a state';
            this._div.innerHTML = `<h4>US Population Density</h4>${contents}`;
        };
    
        info.addTo(map);
    
    
        // get color depending on population density value
        function getColor(d) {
            return d > 1000 ? '#800026' :
                d > 500  ? '#BD0026' :
                d > 200  ? '#E31A1C' :
                d > 100  ? '#FC4E2A' :
                d > 50   ? '#FD8D3C' :
                d > 20   ? '#FEB24C' :
                d > 10   ? '#FED976' : '#FFEDA0';
        }
    
        function style(feature) {
            return {
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7,
                fillColor: getColor(feature.properties.density)
            };
        }
    
        function highlightFeature(e) {
            const layer = e.target;
    
            layer.setStyle({
                weight: 5,
                color: '#666',
                dashArray: '',
                fillOpacity: 0.7
            });
    
            layer.bringToFront();
    
            info.update(layer.feature.properties);
        }
    
        /* global statesData */
        const geojson = L.geoJson(statesData, {
            style,
            onEachFeature
        }).addTo(map);
    
        function resetHighlight(e) {
            geojson.resetStyle(e.target);
            info.update();
        }
    
        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }
    
        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
        }
    
        map.attributionControl.addAttribution('Population data &copy; <a href="http://census.gov/">US Census Bureau</a>');
    
    
        const legend = L.control({position: 'bottomright'});
    
        legend.onAdd = function (map) {
    
            const div = L.DomUtil.create('div', 'info legend');
            const grades = [0, 10, 20, 50, 100, 200, 500, 1000];
            const labels = [];
            let from, to;
    
            for (let i = 0; i < grades.length; i++) {
                from = grades[i];
                to = grades[i + 1];
    
                labels.push(`<i style="background:${getColor(from + 1)}"></i> ${from}${to ? `&ndash;${to}` : '+'}`);
            }
    
            div.innerHTML = labels.join('<br>');
            return div;
        };
    
        legend.addTo(map);
    
    </script>
@endpush

<div class="py-12">
    <div class="px-8 mx-auto max-w-7xl">
        <div class="grid grid-cols-5 gap-6">
            <div>
                <div class="flex flex-col space-y-2">
                    <button type="button" class="btn-flat">
                        Philippines
                    </button>
    
                    <button type="button" class="cursor-not-allowed opacity-30 btn-flat" disabled>
                        Korea
                    </button>
    
                    <button type="button" class="cursor-not-allowed opacity-30 btn-flat" disabled>
                        Japan
                    </button>
                </div>
            </div>
            <div class="col-span-4">
                <div class="h-screen bg-gray-300">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
    
</div>