<?php

    class apiInfermedica{

        
        private $apiId;
        private $apiKey;

        public function __construct(string $apiId,string $apiKey)
        {   
            $this->apiId = $apiId;
            $this->apiKey = $apiKey;
        }

        public function info(){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.infermedica.com/v3/info',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
            'App-Id: '.$this->apiId,
            'App-Key: '.$this->apiKey),));
            $response = curl_exec($curl);

            curl_close($curl);
            return $response;

        }

        public function parse(){
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://api.infermedica.com/v3/parse',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS =>'{
              "age": {
                "value": 30,
                "unit": "year"
              },
              "sex": "male",
              "text": "I feel smoach pain but no couoghing today",
              "context": [
                "string"
              ],
              "include_tokens": true,
              "correct_spelling": true,
              "concept_types": [
                "symptom"
              ]
            }',
              CURLOPT_HTTPHEADER => array(
                'App-Id: d423892e',
                'App-Key: 10676238d756762e2e7ce7bd3bd5f302',
                'Content-Type: application/json'
              ),
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            echo $response;
        }

        public function symptome($age){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.infermedica.com/v3/symptoms?age.value='.$age,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'App-Id: d423892e',
                'App-Key: 10676238d756762e2e7ce7bd3bd5f302'
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            
            return $response;
        }

        public function diagnostic($age){
            $curl = curl_init('https://api.infermedica.com/v3/diagnosis');

curl_setopt_array($curl, array(
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>"{
  'sex': 'male',
  'age': {
      'value': $age
  },
  'evidence': [
    {
      'id': 's_1193',
      'choice_id': 'unknown'
    },
    {
      'id': 's_488',
      'choice_id': 'present'
    },
    {
      'id': 's_418',
      'choice_id': 'present'
    }
  ]
}",
  CURLOPT_HTTPHEADER => array(
    'App-Id: '.$this->apiId,
    'App-Key: '.$this->apiKey,
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
return $response;
        }

        
    }