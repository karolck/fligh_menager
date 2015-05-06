<?php

namespace App\Shell;

use Cake\Console\Shell;

class ImportShell extends Shell {

    public function main() {

        $countriesFile = file_get_contents('https://raw.githubusercontent.com/mledoze/countries/master/dist/countries.json');

        $countries = json_decode(utf8_encode($countriesFile));

        foreach ( $countries as $country ) {
            $this->out($country->name->common);
        }

    }

}