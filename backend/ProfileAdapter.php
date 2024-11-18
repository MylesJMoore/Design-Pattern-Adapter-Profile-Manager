<?php

class ProfileAdapter {
    private $profiles;

    public function __construct($profiles) {
        $this->profiles = $profiles;
    }

    public function getAdaptedProfiles() {
        $adaptedProfiles = [];
        foreach ($this->profiles as $profile) {
            $adaptedProfiles[] = [
                "id" => $profile['id'],
                "name" => $profile['fullname'],
                "email" => $profile['emailAddress'],
                "age" => $profile['yearsOld']
            ];
        }
        return $adaptedProfiles;
    }
}
