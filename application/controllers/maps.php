<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Maps extends CI_Controller {
function __construct()
{
parent::__construct();
}
function index()
{
//basic default controls/properties    
$this->load->library('GMap');

$this->gmap->GoogleMapAPI();

// valid types are hybrid, satellite, terrain, map
$this->gmap->setMapType('hybrid');

// you can also use addMarkerByCoords($long,$lat)
// both marker methods also support $html, $tooltip, $icon_file and $icon_shadow_filename
$this->gmap->addMarkerByAddress("Some Street, Some Town, Some City, Some Country","Marker Title", "Marker Description");

$data['headerjs'] = $this->gmap->getHeaderJS();
$data['headermap'] = $this->gmap->getMapJS();
$data['onload'] = $this->gmap->printOnLoad();
$data['map'] = $this->gmap->printMap();
$data['sidebar'] = $this->gmap->printSidebar();

$this->load->view('template',$data);
}

}