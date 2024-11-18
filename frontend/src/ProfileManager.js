import React, { useState, useEffect } from 'react';
import { fetchProfiles } from './api';

function ProfileManager() {
    const [profiles, setProfiles] = useState([]);

    useEffect(() => {
        fetchProfiles()
            .then(data => setProfiles(data))
            .catch(err => console.error(err));
    }, []);

    return (
        <div>
            <h2>Profiles</h2>
            <ul>
                {profiles.map(profile => (
                    <li key={profile.id}>
                        <p>Name: {profile.name}</p>
                        <p>Email: {profile.email}</p>
                        <p>Age: {profile.age}</p>
                    </li>
                ))}
            </ul>
        </div>
    );
}

export default ProfileManager;