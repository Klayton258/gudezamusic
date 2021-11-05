<?php

namespace core\models;

use Paymentsds\MPesa\Client;



class pagamentos
{

    public  function comprar($amount, $from)
    {
        $client = new Client([
            'apiKey' => API_KEY, // API Key
            'publicKey' => PUBLIC_API, // Public Key
            'serviceProviderCode' => SERVICE_PROVIDER // input_ServiceProviderCode
        ]);

        $paymentData = [
            'from' => '258' . $from, // input_CustomerMSISDN
            'reference' => '01F189upOY7K', // input_ThirdPartyReference
            'transaction' => 'T12344C', // input_TransactionReference
            'amount' => $amount // input_Amount
        ];

        $result = $client->receive($paymentData);

        if ($result->success) {
            echo 'SUCESSOOOOOOOOOO';
        } else {
            // Handle failure
            echo 'ERROOOOOOOOOO';
        }
        header('Location', 'descricao');
    }
}