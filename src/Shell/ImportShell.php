<?php

namespace App\Shell;

use Cake\Console\Shell;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class ImportShell extends Shell {

    private function truncateTable($table = 'countries'){

        ConnectionManager::get('default')->execute("TRUNCATE ".$table);

    }

    public function countries() {

        $this->truncateTable('countries');

        $countriesFilePath = 'https://raw.githubusercontent.com/lukes/ISO-3166-Countries-with-Regional-Codes/master/all/all.json';
        $countriesFileContent = file_get_contents($countriesFilePath);
        $countries = json_decode($countriesFileContent);

        foreach ($countries as $countryData) {

            $countryTable = TableRegistry::get('Countries');

            list(,$iso) = explode(':',$countryData->{'iso_3166-2'});

            $country                = $countryTable->newEntity();
            $country->name          = $countryData->name;
            $country->iso           = $iso;
            $country->country_code  = (int)$countryData->{'country-code'};

            $countryTable->save($country);

        }

    }

    private function getAirportTypes() {

    }

    private function getAirportSizes() {

        $airportSizesTable = TableRegistry::get('AirportSizes');

        $airportSizes = $airportSizesTable->find('all')->toArray();
        $airportSizesData = array_column(
            array_map(
                function($airport) {
                    return [
                        'id' => $airport->id,
                        'name' =>  $airport->name
                    ];
                },
                $airportSizes
            ),
            'name',
            'id'
        );

        return $airportSizesData;


    }

    public function airports() {

        $this->getAirportSizes();

        die;

        $this->truncateTable('airports');

        $airportsFilePath = "https://raw.githubusercontent.com/jbrooksuk/JSON-Airports/master/airports.json";
        $airportsFileContent = file_get_contents($airportsFilePath);
        $airports = json_decode($airportsFileContent);


        foreach($airports as $airportData) {

            $airportTable = TableRegistry::get('Airports');

            $airport = $airportTable->newEntity();
            $airport->iata      = $airportData->iata;
            if ( isset( $airportData->lon ) )
            $airport->lon       = $airportData->lon;
            $airport->iso       = $airportData->iso;
            $airport->status    = $airportData->status;
            $airport->name      = $airportData->name;
            $airport->continent = $airportData->continent;
            $airport->type      = $airportData->type;
            if ( isset( $airportData->lat ) )
            $airport->lat       = $airportData->lat;
            $airport->size      = $airportData->size;

            $airportTable->save($airport);
        }

    }


}