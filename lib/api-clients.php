<?php

  
class MarketoClient {

  // define('API_URL', 'https://576-GYC-500.mktorest.com/rest');
  // define('API_IDENTITY', 'https://576-GYC-500.mktorest.com/identity');
  
  public function sendNewBeneficiaire($form_data) {
    $token = $this->authenticate();

    $url = self::API_URL . '/beneficiaire';

    $fields = $this->filterFields($form_data['fields']);


    if (empty($fields['session']) ||
      empty($fields['nom'])   ||
      empty($fields['prenom'])  ||
      empty($fields['pays'])    ||
      empty($fields['email'])) {
      echo wp_json_encode('Des informations sont manquantes ou erronnées dans votre préinscription. Merci de réessayer ultérieurement');
    }

    // TODO remove when done testing
    $fields['session'] = '14';

    $data = [
      'groupeid' => $fields['session'],
      'lastname' => $fields['nom'],
      'firstname' => $fields['prenom'],
      'address' => $fields['adresse'],
      'codepostal' => $fields['code-postal'],
      'city' => $fields['ville'],
      'country' => $fields['pays'],
      'numadelie' => $fields['numero-adeli'],
      'siret' => $fields['numero-siret'],
      'phone' => $fields['telephone'],
      'email' => $fields['email'],
      'job' => $fields['job']
    ];

    $args = [
      'method' => 'POST',
      'headers' => [
        'Authorization' => 'Bearer ' . $token,
        'Accept' => '*/*',
        'Cache-Control' => 'no-cache',
        'Content-Type' => 'application/x-www-form-urlencoded'
      ],
      'body' => $data,
    ];

    try {
      $query = wp_remote_post($url, $args);

      if ($query instanceof WP_Error) {
        echo wp_json_encode($query->get_error_message());
      }
      else {
        echo wp_json_encode(wp_remote_retrieve_body($query));
      }
    }
    catch (\Exception $e) {
      //
    }
  }
}

