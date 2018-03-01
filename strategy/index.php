<?php
//Encapsulate and make them interchangeable

interface Logger {
    public function log($data);
}



//Define a family of algorithms
class LogToFIle implements Logger {
    public function log($data){
        var_dump("Log the data to a file");
    }
}

class LogtoDatabase implements Logger {
    public function log($data){
        var_dump("Log the data to a database");
    }
}

class  LogToXWebServices implements Logger {
    public function log($data){
        var_dump("Log the data to a Sass");
    }
}

class App {
    public function log($data, Logger $logger){
        $logger->log("My data");
    }
}

$app = new App();

$app->log('Some information here',(new LogToXWebServices()));