<?php

namespace App\Shell;

use Cake\Console\Shell;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

use App\Library\Api;

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

    /**
     * getAirportTypes
     * @return array
     */
    private function getAirportTypes() {

        $airportTypesTable = TableRegistry::get('AirportTypes');

        $airportTypes = $airportTypesTable->find('all')->toArray();
        $airportTypesData = array_column(
            array_map(
                function($airport) {
                    return [
                        'id' => $airport->id,
                        'name' =>  $airport->name
                    ];
                },
                $airportTypes
            ),
            'id',
            'name'
        );

        return $airportTypesData;
    }

    /**
     * getAirportSizes
     * @return array
     */
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
            'id',
            'name'
        );

        return $airportSizesData;

    }

    public function airports() {

        $this->truncateTable('airports');

        $airportTypes = $this->getAirportTypes();
        $airportSizes = $this->getAirportSizes();

        $airportsFilePath = "https://raw.githubusercontent.com/jbrooksuk/JSON-Airports/master/airports.json";
        $airportsFileContent = file_get_contents($airportsFilePath);
        $airports = json_decode($airportsFileContent);

        foreach($airports as $airportData) {

            $airportTable = TableRegistry::get('Airports');

            $airport = $airportTable->newEntity();
            $airport->iata      = $airportData->iata;
            $airport->iso       = $airportData->iso;
            $airport->status    = $airportData->status;
            $airport->name      = $airportData->name;
            $airport->continent = $airportData->continent;
            if ( isset( $airportTypes[$airportData->type] ) )
            $airport->type      = $airportTypes[$airportData->type];
            if ( isset( $airportSizes[$airportData->size] ) )
            $airport->size      = $airportSizes[$airportData->size];
            if ( isset( $airportData->lon ) )
                $airport->lon       = $airportData->lon;
            if ( isset( $airportData->lat ) )
                $airport->lat       = $airportData->lat;

            $airportTable->save($airport);
        }

    }


}