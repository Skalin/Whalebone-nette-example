# Whalebone Nette Test Application

## Installation
1. ``` git clone https://github.com/Skalin/Whalebone-nette-example ```
2. ``` cd Whalebone-nette-example```
3. ``` docker compose up -d```

The application will install all dependencies, start the server, wait for the database to start up and then launch migrations automatically.


## API Documentation
The API is fully documented in Postman in the repository in ```postman/collection.json```

The application is based on nette standard project, where there is the ```Whalebone``` module in the ```src/app``` folder.
The ```Whalebone``` module is divided between smaller submodules, the only one is ```DeviceModule```.

- ```Whalebone/DeviceModule/Models``` directory - entities,
- ```Whalebone/DeviceModule/Presenters``` folder - API endpoints,
- ```Whalebone/DeviceModule/Request``` directory - schema validators for DTO request objects
- ```Whalebone/DeviceModule/Enums``` directory - enumerations for DeviceType and OsType,
- ```Whalebone/DeviceModule/Services``` directory - services for handling business logic - there are two types of services, Fetch and Manager services,
