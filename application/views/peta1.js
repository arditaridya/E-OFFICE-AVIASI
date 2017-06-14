var map, markers, selectControl;
var vectorArr = [];
var vectorNarr = [];
var size = new OpenLayers.Size(50,50);
var offset = new OpenLayers.Pixel(-(size.w/2), -size.h);
//var icon = new OpenLayers.Icon(layerConfig.baseUrl + 'assets/img/images/i_pin2.png', size, offset);
var vectors = [];
var tempPopup;
var popUpSearch;
var exportMapControl;
var urlMapExport;
var PRINTER;

var layer_style, style_blue;
var vectorPolygon,vectorPoint,vectorLine;
var vectorIdentify;
var isSelectedVector = false;

var themLaayer;
var tableThem,keyThem,valuess,resultThem;
var styles = new OpenLayers.Style();

//markers
var size = new OpenLayers.Size(30, 30);
var offset = new OpenLayers.Pixel(-(size.w / 2), -size.h);
var icon = new OpenLayers.Icon(layerConfig.baseUrl + 'assets/gis/img/marker.png', size, offset);

var tbl_seb_ops_mas = "tbl_gelar_operasi_master";
var fld_seb_ops_mas = "nama_operasi";

var tbl_seb_ops = "tbl_gelar_operasi";

var vectorPointSebaran;

var vectorBiru, vectorKuning, vectorHijau;

function initMap(){
	var bounds = new OpenLayers.Bounds(
		92.18249299899998, -15.285144000000003, 142.017200001, 10.012744999999995
	);

	var options = {
		controls: [],
		maxExtent: bounds,
		projection: "EPSG:4326",
		units: 'degrees'
	}; 
	map = new OpenLayers.Map(layerConfig.mapId, options);
	
	// looping layers data from json
	for(var i = 0;i<spatial_tables.length;i++){
		// console.log(spatial_tables[i].visibility);
		var layerMap = new OpenLayers.Layer.WMS(
			spatial_tables[i].title, layerConfig.serverWMS,
			{
				request: 'GetMap',
				service: 'WMS',
				version: '1.3.0',
				crs: 'EPSG4326',
				layers: spatial_tables[i].source,
				transparent: true,
			},
			{
				singleTile: true,
				isBaseLayer: spatial_tables[i].baselayer,
				visibility: spatial_tables[i].visibility,
				opacity: 1
			}
		); 
		map.addLayer(layerMap);
	}
	
	// console.log(map);
	
	// searching -----------------
	layer_style = OpenLayers.Util.extend({}, OpenLayers.Feature.Vector.style['default']);
	layer_style.fillOpacity = 0.2;
	layer_style.graphicOpacity = 1;
	
	style_blue = OpenLayers.Util.extend({}, layer_style);
	style_blue.strokeColor = "blue";
	style_blue.fillColor = "";
	style_blue.fillOpacity = 0;
	style_blue.graphicName = "star";
	style_blue.pointRadius = 10;
	style_blue.strokeWidth = 3;
	style_blue.rotation = 45;
	style_blue.strokeLinecap = "butt";
	
	vectorPolygon = new OpenLayers.Layer.Vector("Temporary Layer", {
		style: style_blue,
		renderers: ['Canvas', 'SVG', 'VML']
	});
	
	vectorPoint = new OpenLayers.Layer.Vector("Point Layer", {
		renderers: ['Canvas', 'SVG', 'VML'],
		styleMap: new OpenLayers.StyleMap({
		  externalGraphic: base_url + 'assets/img/images/i_pin2.png',
				  graphicWidth: 40,
				  graphicHeight: 40,
				  graphicYOffset: -24,
			title: "Point"
		})
	});
	
	vectorLine = new OpenLayers.Layer.Vector("Polyline Layer",{
		renderers: ['Canvas','SVG','VML'],
		styleMap: new OpenLayers.StyleMap({
			strokeColor: "blue",
			strokeWidth: 3,
			strokeDashstyle: "solid",
			pointRadius: 6,
			pointerEvents: "visiblePainted",
			title: "Line"
		})
	});
	
	vectorPointSebaran = new OpenLayers.Layer.Vector("Point Sebaran Layer", {
		renderers: ['Canvas', 'SVG', 'VML'],
		styleMap: new OpenLayers.StyleMap({
			externalGraphic: base_url + 'assets/gis/img/biru.png',
			graphicWidth: 40,
			graphicHeight: 40,
			graphicXOffset: -19,
			graphicYOffset: -15,
			title: "Point Sebaran"
		})
	});

	vectorBiru = new OpenLayers.Layer.Vector("Bandara Umum", {
		renderers: ['Canvas', 'SVG', 'VML'],
		styleMap: new OpenLayers.StyleMap({
			externalGraphic: base_url + 'assets/gis/img/biru.png',
			graphicWidth: 40,
			graphicHeight: 40,
			graphicXOffset: -19,
			graphicYOffset: -15,
			title: "Bandara Umum"
		})
	});

	vectorKuning = new OpenLayers.Layer.Vector("Bandara Khusus", {
		renderers: ['Canvas', 'SVG', 'VML'],
		styleMap: new OpenLayers.StyleMap({
			externalGraphic: base_url + 'assets/gis/img/kuning.png',
			graphicWidth: 40,
			graphicHeight: 40,
			graphicXOffset: -19,
			graphicYOffset: -15,
			title: "Bandara Khusus"
		})
	});
	
	vectorHijau = new OpenLayers.Layer.Vector("Pangkalan Udara", {
		renderers: ['Canvas', 'SVG', 'VML'],
		styleMap: new OpenLayers.StyleMap({
			externalGraphic: base_url + 'assets/gis/img/hijau.png',
			graphicWidth: 40,
			graphicHeight: 40,
			graphicXOffset: -19,
			graphicYOffset: -15,
			title: "Pangkalan Udara"
		})
	});
	
	map.addLayers([vectorBiru,vectorKuning,vectorHijau]);
	map.addLayers(vectorPolygon);
	vectors.push(vectorPolygon);
	vectors.push(vectorBiru);
	vectors.push(vectorKuning);
	vectors.push(vectorHijau);

	map.events.register('click', map, handleMapClick);
	
	
// 	
	var radioHtml = '<ul style="list-style-type:none;">';
	for(var i = 0; i < map.layers.length; i++)
	{
		if(map.layers[i].isBaseLayer == true)
		{			
			radioHtml += '<li style="margin-bottom:10px;margin-left:-25px;">';
			radioHtml += '<input type="radio" name="mapRadioButton" onclick="changeBaseMap(this.value)" value="'+ map.layers[i].name +'"';
			
			if (map.layers[i].visibility == true) {
				// console.log('isVisible : '+map.layers[i].name+','+map.layers[i].visibility);
				radioHtml += ' checked="checked"';
			}
			radioHtml += '>'+ map.layers[i].name + '</input>';	
			radioHtml += '</li>';	
		}
	}
	radioHtml += '</ul>';
	$('#content-basemap').append(radioHtml);
	
	// map.setCenter(new OpenLayers.LonLat(0,0),2);
	map.zoomToMaxExtent();	

	map.addControl(new OpenLayers.Control.MousePosition({
		prefix: 'Coordinates: '
	}));
	map.addControl(new OpenLayers.Control.PanZoomBar());
	map.addControl(new OpenLayers.Control.LayerSwitcher({'ascending':false,'useLegendGraphics':true}));
	map.addControl(new OpenLayers.Control.Permalink());
	map.addControl(new OpenLayers.Control.Navigation());
	map.addControl(new OpenLayers.Control.Scale());
	map.addControl(new OpenLayers.Control.ScaleLine());
	
	var sketchSymbolizers = {
		"Point": {
			pointRadius: 4,
			graphicName: "square",
			fillColor: "white",
			fillOpacity: 1,
			strokeWidth: 1,
			strokeOpacity: 1,
			strokeColor: "#333333"
		},
		"Line": {
			strokeWidth: 3,
			strokeOpacity: 1,
			strokeColor: "#666666",
			strokeDashstyle: "dash"
		},
		"Polygon": {
			strokeWidth: 2,
			strokeOpacity: 1,
			strokeColor: "#666666",
			fillColor: "white",
			fillOpacity: 0.3
		}
	};
	var style = new OpenLayers.Style();
	style.addRules([
		new OpenLayers.Rule({symbolizer: sketchSymbolizers})
	]);
	var styleMap = new OpenLayers.StyleMap({"default": style});
	
	// allow testing of specific renderers via "?renderer=Canvas", etc
	var renderer = OpenLayers.Util.getParameters(window.location.href).renderer;
	renderer = (renderer) ? [renderer] : OpenLayers.Layer.Vector.prototype.renderers;

	selectControl = new OpenLayers.Control.SelectFeature(
		[vectorBiru,vectorKuning,vectorHijau],
		{
			clickout: true, toggle: false,
			multiple: false, hover: false,
			toggleKey: "ctrlKey", // ctrl key removes from selection
			multipleKey: "shiftKey" // shift key adds to selection
		}
	);
	map.addControl(selectControl);
	selectControl.activate();

	var zoomToContextExtent = new OpenLayers.Control.Button({
			title: "zoom to map extent", displayClass: "olControlZoomToMaxExtent",
                trigger: function(){
                    map.zoomToExtent(mapZoomExtent);
                    //set menu back to origin view, code is here...
                    //$("#accordion").accordion("activate", 0 );
                }
		});

	var zoomBox = new OpenLayers.Control.ZoomBox({ title: "Zoom in box" });

	var navHistory = new OpenLayers.Control.NavigationHistory();
	navHistory.previous.title = "View history backward";
	navHistory.next.title = "View history forward";
	map.addControl(navHistory);

	var optionsLine = {
			handlerOptions: {
				persist: true
			},
			displayClass: "olControlMeasureDistance",
			title: "Line"
		};

		var optionsPolygon = {
			handlerOptions: {
				persist: true
			},
			displayClass: "olControlMeasureArea",
			title: "Polygon"
		};

	measureControls = {
				line: new OpenLayers.Control.Measure(
			 		OpenLayers.Handler.Path,
			 		optionsLine
				),
				polygon: new OpenLayers.Control.Measure(
					OpenLayers.Handler.Polygon,
					optionsPolygon
				)
			};

	for(var key in measureControls) {
			control = measureControls[key];
			control.events.on({
				"measure": handleMeasurements,
				"measurepartial": handleMeasurements
			});
		}

	//panel = new OpenLayers.Control.Panel({ defaultControl: zoomBox, div: document.getElementById('panelPart_02')});

	/*panel.addControls([
			new OpenLayers.Control.DragPan({title:'Drag map', displayClass: 'olControlPanMap'}),
			zoomBox,
			new OpenLayers.Control.ZoomBox({title:"Zoom out box", displayClass: 'olControlZoomOutBox', out: true}),			
			navHistory.previous,
			navHistory.next,
			measureControls.line,
			measureControls.polygon
			]);
	// add the panel to the map
	map.addControl(panel);*/

	markers = new OpenLayers.Layer.Markers("Markers");
	map.addLayer(markers);

}


function createPopup(oFea) {
  oFea.popup = new OpenLayers.Popup.FramedCloud("pop",
	  oFea.feature.geometry.getBounds().getCenterLonLat(),
	  null,
	  '<div class="popupContent">'+oFea.feature.attributes.description+'</div>',
	  null,
	  true,
	  function() {
		  // if (selectControl.selector) {
			  // selectControl.selector.unselectAll();
			  this.destroy();
		  //}
	  }
  );
  oFea.popup.closeOnMove = false;
  tempPopup = oFea.popup;
  map.addPopup(tempPopup);
}

function destroyPopup(feature) {
	map.removePopup(tempPopup);
}

function changeBaseMap(value)
{
	for(var i = 0; i < map.layers.length; i++)
	{
		if(map.layers[i].isBaseLayer == true)
		{
			if(map.layers[i].name == value)
			{
				map.setBaseLayer(map.layers[i]);
			}
		}
	}
}


function toggleControl(element) {
	for(key in measureControls) {
		var control = measureControls[key];
		if(element.value == key && element.checked) {
			control.activate();
		} else {
			control.deactivate();
		}
	}
}



function handleMapClick(evt)
{
    markers.clearMarkers();
	var lonlat = map.getLonLatFromViewPortPx(evt.xy);
	console.log(lonlat);
	document.getElementById('LAT').value = ""+lonlat.lat+"";
	document.getElementById('LON').value = ""+lonlat.lon+"";
	var marker = new OpenLayers.Marker(lonlat,icon);
	markers.addMarker(marker);
   // console.log(lonlat);
} 

$("#btnFilter").on("click",function(e){

	if($("#txtProvinsi").val() != "")
	{
		var params = {
		url:layerConfig.serverWFS,
			param:{
				service:"WFS",
				version:"2.0.0",
				request:"GetFeature",
				layers:"Mabes_AU:Province_region",
				typeName:"Mabes_AU:Province_region",
				crs:"EPSG:4326",
				outputformat:"json",
				cql_filter:'strToLowerCase(NAMA_PROP)' + " like '%"+$("#txtProvinsi").val()+"%'"
			},
			type:'json'
		};

		loadURL(params, {success:getDataProvinsiSuccess, progress:function(){}},false);
	}
	else if($("#txtProvinsi").val() == "")
	{
		$.ajax({
			url:base_url + 'home/getFasilitas',
			type:'post',
			data:{val:$('#txtProvinsi').val(),value:$('#cbJenisFasilitas').val()}
		}).done(function(e){

			e = JSON.parse(e);

			drawPointSebaran(e);
		});
	}	

	return false;
	
});

$("#btnClear").on("click",function(e){
	vectorBiru.removeAllFeatures();
	vectorKuning.removeAllFeatures();
	vectorHijau.removeAllFeatures();

	while( map.popups.length ) {
        	map.removePopup(map.popups[0]);
   	}
});

function getDataProvinsiSuccess(e){
	e = JSON.parse(e);

	var geo;
	var obj;

	$.each(e.features, function(k,v){
		obj = v.propeties;
		geo = JSON.stringify(v.geometry.coordinates);
		
	});
	
	searchFacility();
	zoomToPosition(geo);
}

function zoomToPosition(oGeo)
{
	console.log('I am here');

	var coordinates = JSON.parse(oGeo);
	coordinates = coordinates[0][0];

	//console.log(coordinates);
	
	var points = [];
	for(i=0;i<coordinates.length;i++){
		var point = new OpenLayers.Geometry.Point(coordinates[i][1],coordinates[i][0]);
		points.push(point);
	}
	var linearring = new OpenLayers.Geometry.LinearRing(points);
	var polygon = new OpenLayers.Geometry.Polygon([linearring]);
	//addFeature
		
	vectorPolygon.removeAllFeatures();
	var polygonFeature = new OpenLayers.Feature.Vector(polygon);
	vectorPolygon.addFeatures([polygonFeature]);
	lonLat = polygon.getBounds().getCenterLonLat();

	map.setCenter(lonLat,5);

}

function searchFacility()
{
	//console.log($('#cbJenisFasilitas').val());
	$.ajax({
		url:base_url + 'home/getFasilitas',
		type:'post',
		data:{val:$('#txtProvinsi').val(),value:$('#cbJenisFasilitas').val()}
	}).done(function(e){
		console.log(e);
		e = JSON.parse(e);
		

		drawPointSebaran(e);
	});
}

function drawPointSebaran(oFea)
{

	var str = "";
	features = [];
	vectorBiru.removeAllFeatures();
	vectorKuning.removeAllFeatures();
	vectorHijau.removeAllFeatures();
	for(var i = 0; i < oFea.length; i++)
	{
		str = "";

		str += '<div id="tabs" class="tabs" height="300">';
		str += '<h3>Identifikasi Lapangan Terbang<h3>';
		str += '<div id="satu" height="200"><p>';
		if(oFea[i].hasOwnProperty('id_lap_terbang'))
		{
			str += 'ID : '+oFea[i]['id_lap_terbang']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('nama'))
		{
			str += 'Nama : '+oFea[i]['nama']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('jenis_fasilitas'))
		{
			str += 'Jenis Fasilitas : '+oFea[i]['jenis_fasilitas']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('jenis_permukaan'))
		{
			str += 'Jenis Permukaan : '+oFea[i]['jenis_permukaan']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('kekuatan'))
		{
			str += 'Kekuatan : '+oFea[i]['kekuatan']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('koord_x'))
		{
			str += 'Longitude : '+oFea[i]['koord_x']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('koord_y'))
		{
			str += 'Latitude : '+oFea[i]['koord_y']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('lokasi'))
		{
			str += 'Lokasi : '+oFea[i]['lokasi']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('nama_provinsi'))
		{
			str += 'Nama Provinsi : '+oFea[i]['nama_provinsi']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('operating_hours'))
		{
			str += 'Operating Hours : '+oFea[i]['operating_hours']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('status'))
		{
			str += 'Status : '+oFea[i]['status']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('ukuran_landasan'))
		{
			str += 'Ukuran Landasan : '+oFea[i]['ukuran_landasan']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('azimut_r_w'))
		{
			str += 'Azimut R/W : '+oFea[i]['azimut_r_w']+ '<br>';
		}		
		str += '</p></div>';
		str += '<h3>Fasilitas Lapangan Terbang<h3>';
		str += '<div id="dua">';
		if(oFea[i].hasOwnProperty('tempat_parkir'))
		{
			str += 'Tempat Parkir (Luas/Daya Tampung) : '+oFea[i]['tempat_parkir']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('taxi_way'))
		{
			str += 'Taxi Way : '+oFea[i]['taxi_way']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('alat_navigasi'))
		{
			str += 'Alat Navigasi : '+oFea[i]['alat_navigasi']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('hangar'))
		{
			str += 'Hanggar : '+oFea[i]['hangar']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('helly_pad'))
		{
			str += 'Helly Pad : '+oFea[i]['helly_pad']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('arming'))
		{
			str += 'Arming/DE Arming : '+oFea[i]['arming']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('marshailing_area'))
		{
			str += 'Marshailing Area : '+oFea[i]['marshailing_area']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('engine_test_shell'))
		{
			str += 'Engine Test Shell : '+oFea[i]['engine_test_shell']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('shelter'))
		{
			str += 'Shelter : '+oFea[i]['shelter']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('scramble_area'))
		{
			str += 'Scramble Area : '+oFea[i]['scramble_area']+ '<br>';
		}
		str += '</div>';
		str += '<h3>Fasilitas Terminal<h3>';
		str += '<div id="tiga">';
		if(oFea[i].hasOwnProperty('ruang_vip_vvip'))
		{
			str += 'Ruang VIP/VVIP : '+oFea[i]['ruang_vip_vvip']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('daya_tampung_internasional'))
		{
			str += 'Daya Tampung Internasional : '+oFea[i]['daya_tampung_internasional']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('daya_tampung_domestic'))
		{
			str += 'Daya Tampung Domestik : '+oFea[i]['daya_tampung_domestic']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('gudang_cargo'))
		{
			str += 'Gudang Cargo : '+oFea[i]['gudang_cargo']+ '<br>';
		}
		str += '</div>';
		str += '<h3>Fasilitas Dukungan Penerbangan<h3>';
		str += '<div id="empat">';
		if(oFea[i].hasOwnProperty('pelayanan_BBM'))
		{
			str += 'Pelayanan BBM : '+oFea[i]['pelayanan_BBM']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('jenis_BBM'))
		{
			str += 'Jenis BBM : '+oFea[i]['jenis_BBM']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('daya_tampung'))
		{
			str += 'Daya Tampung : '+oFea[i]['daya_tampung']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('meteo_kelas'))
		{
			str += 'Meteo (Kelas) : '+oFea[i]['meteo_kelas']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('pk_ppk_kelas'))
		{
			str += 'PK PPK (Kelas) : '+oFea[i]['pk_ppk_kelas']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('pemeliharaan'))
		{
			str += 'Pemeliharaan : '+oFea[i]['pemeliharaan']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('jasa_angkutan_udara'))
		{
			str += 'Jasa Angkutan Udara : '+oFea[i]['jasa_angkutan_udara']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('frekuensi_penerbangan_internasional'))
		{
			str += 'Frekuensi Penerbangan (Internasional) : '+oFea[i]['frekuensi_penerbangan_internasional']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('frekuensi_penerbangan_domestik'))
		{
			str += 'Frekuensi Penerbangan (Domestik) : '+oFea[i]['frekuensi_penerbangan_domestik']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('jenis_pesawat_militer'))
		{
			str += 'Jenis Pesawat (Militer) : '+oFea[i]['jenis_pesawat_militer']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('jenis_pesawat_sipil'))
		{
			str += 'Jenis Pesawat (Sipil) : '+oFea[i]['jenis_pesawat_sipil']+ '<br>';
		}
		str += '</div>';
		str += '<h3>Fasilitas Kesehatan<h3>';
		str += '<div id="lima">';
		str += 'Fasilitas TNI : <br>'
		if(oFea[i].hasOwnProperty('tni_rumah_sakit'))
		{
			str += '   Rumah Sakit : '+oFea[i]['tni_rumah_sakit']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('tni_daya_tampung'))
		{
			str += '   Daya Tampung : '+oFea[i]['tni_daya_tampung']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('tni_klasifikasi'))
		{
			str += '   Klasifikasi : '+oFea[i]['tni_klasifikasi']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('tni_jarak'))
		{
			str += '   Jarak : '+oFea[i]['tni_jarak']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('tni_ambulance'))
		{
			str += '   Ambulance : '+oFea[i]['tni_ambulance']+ '<br>';
		}
		str +=  '<br> Fasilitas Sipil : <br>';
		if(oFea[i].hasOwnProperty('sipil_rumah_sakit'))
		{
			str += '   Rumah Sakit : '+oFea[i]['sipil_rumah_sakit']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('sipil_daya_tampung'))
		{
			str += '   Daya Tampung : '+oFea[i]['sipil_daya_tampung']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('sipil_klasifikasi'))
		{
			str += '   Klasifikasi : '+oFea[i]['sipil_klasifikasi']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('sipil_jarak'))
		{
			str += '   Jarak : '+oFea[i]['sipil_jarak']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('sipil_ambulance'))
		{
			str += '   Ambulance : '+oFea[i]['sipil_ambulance']+ '<br>';
		}
		str += '</div>';
		str += '<h3>Fasilitas Komunikasi<h3>';
		str += '<div id="enam">';
		str += 'Jaringan ATC : <br>'
		if(oFea[i].hasOwnProperty('atc_ground'))
		{
			str += '   Ground : '+oFea[i]['atc_ground']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('atc_tower'))
		{
			str += '   Tower : '+oFea[i]['atc_tower']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('atc_approach'))
		{
			str += '   Approach : '+oFea[i]['atc_approach']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('atc_radio'))
		{
			str += '   Radio : '+oFea[i]['atc_radio']+ '<br>';
		}
		str +=  '<br>Jaringan KODAL : <br>';
		if(oFea[i].hasOwnProperty('kodal_jenis_rdo'))
		{
			str += '   Jenis RDO : '+oFea[i]['kodal_jenis_rdo']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('kodal_nama_panggilan_frekuensi'))
		{
			str += '   Nama Panggilan Frekuensi : '+oFea[i]['kodal_nama_panggilan_frekuensi']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('kodal_frekuensi'))
		{
			str += '   Frekuensi : '+oFea[i]['kodal_frekuensi']+ '<br>';
		}
		str +=  '<br>Jaringan Interbase : <br>';
		if(oFea[i].hasOwnProperty('interbase_jenis_rdo'))
		{
			str += '   Jenis RDO : '+oFea[i]['interbase_jenis_rdo']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('interbase_nama_panggilan_frekuensi'))
		{
			str += '   Nama Panggilan Frekuensi : '+oFea[i]['interbase_nama_panggilan_frekuensi']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('interbase_frekuensi'))
		{
			str += '   Frekuensi : '+oFea[i]['interbase_frekuensi']+ '<br>';
		}
		str +=  '<br>Jaringan Intertower : <br>';
		if(oFea[i].hasOwnProperty('intertower_jenis_rdo'))
		{
			str += '   Jenis RDO : '+oFea[i]['intertower_jenis_rdo']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('intertower_nama_panggilan_frekuensi'))
		{
			str += '   Nama Panggilan Frekuensi : '+oFea[i]['intertower_nama_panggilan_frekuensi']+ '<br>';
		}
		if(oFea[i].hasOwnProperty('intertower_frekuensi'))
		{
			str += '   Frekuensi : '+oFea[i]['intertower_frekuensi']+ '<br>';
		}
		str += '</div></div>';
		
		
		lonLat = new OpenLayers.LonLat(oFea[i].koord_x,oFea[i].koord_y);

		var pointResult = new OpenLayers.Geometry.Point(lonLat.lon, lonLat.lat);
		features.push(new OpenLayers.Feature.Vector(
			new OpenLayers.Geometry.Point(lonLat.lon,lonLat.lat),
				{
					data: str
				}
			)
		);


		/*if(oFea[i]['jenis_fasilitas'] === "Bandara Umum")
		{
			console.log(oFea[i]['jenis_fasilitas'] + " Ini Bandara Umum");
			vectorBiru.addFeatures(features);
		}
		else if(oFea[i]['jenis_fasilitas'] === "Bandara Khusus")
		{
			console.log(oFea[i]['jenis_fasilitas'] + " Ini Bandara Khusus");
			vectorKuning.addFeatures(features);
		}
		else if(oFea[i]['jenis_fasilitas'] === "Pangkalan Udara")
		{
			console.log(oFea[i]['jenis_fasilitas'] + " Ini Pangkalan Udara");
			vectorHijau.addFeatures(features);
		}*/

		switch (oFea[i]['jenis_fasilitas']) {
 		   	case "Bandara Umum":
   		     		vectorBiru.addFeatures(features);
    		     		break;
    			case "Bandara Khusus":
        			vectorKuning.addFeatures(features);
        			break;
    			case "Pangkalan Udara":
        			vectorHijau.addFeatures(features);
        			break;
		}

	}


		vectorBiru.events.on({
			"featureselected": function(e) {
				createPopup(e);
			},
			"featureunselected": function(e) {
				destroyPopup(e);
			}
		});

		vectorKuning.events.on({
			"featureselected": function(e) {
				createPopup(e);
			},
			"featureunselected": function(e) {
				destroyPopup(e);
			}
		});

		vectorHijau.events.on({
			"featureselected": function(e) {
				createPopup(e);
			},
			"featureunselected": function(e) {
				destroyPopup(e);
			}
		});
		
}

function createPopup(oFea) {
	oFea.popup = new OpenLayers.Popup.FramedCloud("pop",
	oFea.feature.geometry.getBounds().getCenterLonLat(),
	null,
	'<div class="popupContent">'+oFea.feature.attributes.data+'</div>',
	null,
	false,
	onFeatureUnselect);
	oFea.popup.closeOnMove = false;
	// oFea.type = "featureunselected";
	popUpSearch = oFea;
	map.addPopup(oFea.popup);
	 $(".tabs").accordion({heightStyle: "fill"});
}	

function onFeatureUnselect(event) {
    var feature = popUpSearch; 
   
    if(feature.popup) {
        map.removePopup(feature.popup);	
        feature.popup.destroy();
        delete feature.popup;
	isSelectedVector = false;
    }
}

function destroyPopup(feature) {
	while( map.popups.length ) {
         map.removePopup(map.popups[0]);
    }
}

function handleMeasurements(event) {
	var geometry = event.geometry;
	var units = event.units;
	var order = event.order;
	var measure = event.measure;
	var element = document.getElementById('mapOutput');
	var out = "";
	if(order == 1) {
		out += "Distance: " + measure.toFixed(3) + " " + units;
		if (map.getProjection() == "EPSG:4326") {
			out += ", Great Circle Distance: " +
				calcVincenty(geometry).toFixed(3) + " km";
		}
	} else {
		out += "<span class='mapAreaOutput'>Area: " + measure.toFixed(3) + " " + units + "<sup style='font-size:6px'>2</" + "sup></span>";
	}
	element.innerHTML = out;

}

$(window).on("load", initMap);