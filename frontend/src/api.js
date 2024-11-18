import axios from 'axios';

export const fetchProfiles = async () => {
    const response = await axios.get('http://localhost/adapter-pattern/backend/index.php?action=getProfiles');
    return response.data;
};