<?php
class ApartmentFinder
{
	public function locateApartments($place)
	{
		//use the web service and locate all apartments suitable
		//search name
		//now return them all in an array
		return $apartmentsArray();
	}
}

class GeoLocator
{
	public function getLocations($place)
	{
		//use public geo coding service like yahoo and get the
		//lattitude and
		//longitude of that place
		return array("lat"=>$lattitude, "lng"=>$longitude);
	}
}

class GoogleMap
{
	public function initialize()
	{
		//do initialize
	}
	
	public function drawLocations($locations /* array */)
	{
		//locate all the points using Google Map Locator
	}
	
	public function dispatch($divid)
	{
		//draw the map with in a div with the div id
	}
}

class Facade
{
	public function findApartments($place, $divid)
	{
		$AF = new ApartmentFinder();
		$GL =new GeoLocator();
		$GM = new GoogleMap();
		$apartments = $AF->locateApartments($place);
		
		foreach ($apartments as $apartment)
		{
			$locations[] = $GL->getLocations($apartment);
		}
		
		$GM->initialize();
		$GM->drawLocations($locations);
		$GM->dispatch($divid);
	}
}

$F = new Facade();
$F->findApartments("London, Greater London", "mapdiv");
?>