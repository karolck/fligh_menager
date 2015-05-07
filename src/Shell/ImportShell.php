<?php

namespace App\Shell;

use Cake\Console\Shell;
use Cake\ORM\TableRegistry;


class ImportShell extends Shell {

    public function main() {

        $countriesFile = file_get_contents('https://raw.githubusercontent.com/mledoze/countries/master/dist/countries.json');

        $countries = json_decode(utf8_encode($countriesFile));
        
       // print_r($countries);

        
        foreach ($countries as $country) {
            //$this->out($country->name->common);
            
        	$countryTable = TableRegistry::get('Countries');
        	$countryName = $countryTable -> newEntity();
        	$countryOfficial = $countryTable ->newEntity();
        	$countryName -> name = $country -> name -> common;
        	$countryOfficial -> official = $country -> name -> official;
        	//$save = $countryName;
        	//echo $countryName. " " . $countryOfficial;
        	//$countryTable -> save($save);
        	//echo $save;
        	$countryTable -> save($countryName);

        	
        }

    }

}