<?php
include 'ProfileAdapter.php';

class ProfileHandler {
    public function getProfiles() {
        $profiles = [
            ["id" => 1, "fullname" => "John Doe", "emailAddress" => "john@example.com", "yearsOld" => 30],
            ["id" => 2, "fullname" => "Jane Smith", "emailAddress" => "jane@example.com", "yearsOld" => 25],
        ];

        $adapter = new ProfileAdapter($profiles);
        return $adapter->getAdaptedProfiles();
    }
}
