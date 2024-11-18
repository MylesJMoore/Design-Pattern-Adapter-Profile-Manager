# Adapter Pattern - Profile Manager

## Project Overview
This project demonstrates the **Adapter Pattern** in a web application built with React (frontend) and PHP (backend). The adapter pattern is used to adapt profile data into a format expected by the frontend.

## Stack
- **Frontend**: React
- **Backend**: PHP (using XAMPP)
- **Database**: Optional (hardcoded data in PHP for simplicity)

## Project Structure
adapter-pattern/ 
├── frontend/ # React application 
│ └── src/ 
│ └── App.js 
│ └── ProfileManager.js 
│ └── api.js 
│ └── App.css 
├── backend/ 
│ └── index.php 
│ └── ProfileAdapter.php 
│ └── ProfileHandler.php 
│ └── config.php 
├── README.md

## Setup and Installation
1. **Clone the repository**:
- bash
- git clone <repository-url>

2. **Frontend Setup**:
- Navigate to the frontend folder.
- Install dependencies: npm install
- Start the React development server: npm start

3. **Backend Setup**:
- Place the backend folder inside XAMPP's htdocs directory (e.g., xampp/htdocs/adapter-pattern/backend).
- Start the XAMPP control panel and ensure Apache is running.
- Access the backend via http://localhost/adapter-pattern/backend/index.php.

4. **Run the Application**:
- The frontend will be available at http://localhost:3000.
- Ensure the backend endpoint is accessible at http://localhost/adapter-pattern/backend/index.php.

## Usage
- The frontend allows you to view profiles.
- The backend provides the profile data, and the ProfileAdapter class adapts it to the structure expected by the frontend.

## Tests
1. **Frontend Testing**:
- Use React's testing library or any preferred testing tool to test frontend components.

2. **Backend Testing**:
- Manually validate API responses to ensure they match the expected format.
- Optionally, add PHPUnit tests for PHP files to test the adapter’s functionality.

## Project files
1. **Frontend**:
- App.js: The main React component that loads the Profile Manager.
- ProfileManager.js: Displays profiles retrieved from the backend.
- api.js: Handles API calls to the backend.
- App.css: Basic styling for the app.

2. **Backend**:
- index.php: Main entry point for API requests.
- ProfileAdapter.php: Adapter class to transform profile data into the structure expected by the frontend.
- ProfileHandler.php: Handles data retrieval and transformation using the adapter.
- config.php: Placeholder for configuration settings.

## Sample Data Flow
- The React frontend calls the getProfiles endpoint.
- index.php in the backend receives the request.
- ProfileHandler fetches profile data in a raw format.
- ProfileAdapter transforms the raw data to a consistent structure.
- The transformed data is sent back to the frontend and displayed.

## License
This project is licensed under the MIT License.