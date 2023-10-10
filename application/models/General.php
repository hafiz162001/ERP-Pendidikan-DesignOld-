<?php
class General extends CI_Model
{

	protected $baseUrl;

	function __construct()
	{
		$this->baseUrl = 'https://gate.bisaai.id/bisa_ai_vcon_v2/';
	}

	function get($service, $param = '')
	{

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->baseUrl . "/" . $service . "?" . $param,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
		));

		$response = curl_exec($curl);
		curl_close($curl);

		$data = json_decode($response, true);
		return $data;
	}
	function getcred($service, $param, $token)
	{

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->baseUrl . "/" . $service . "?" . $param,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"Content-Type: application/json",
				"Authorization: JWT {$token}"
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);

		$data = json_decode($response, true);
		return $data;
	}


	function insert($service, $init, $token)
	{

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->baseUrl . "/" . $service,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $init,
			CURLOPT_HTTPHEADER => array(
				"Accept: application/json",
				"Content-Type: application/json",
				"Authorization: JWT {$token}"
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);

		$data = json_decode($response);

		return $data;
	}

	function InsertRoom($service, $init, $token)
	{

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->baseUrl . "/" . $service,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $init,
			CURLOPT_HTTPHEADER => array(
				"Accept: application/json",
				"Content-Type: application/json",
				"Authorization: JWT {$token}"
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		return $response;
		// $data = json_decode($response,true);
		// if($data[''])
	}

	function CommonInsert($service, $init)
	{


		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->baseUrl . "/" . $service,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $init,
			CURLOPT_HTTPHEADER => array(
				"Accept: application/json",
				"Content-Type: application/json",
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);

		$data = json_decode($response);

		return $data;
	}

	public function Auth($service, $values)
	{

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->baseUrl . "/" . $service,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $values,
			CURLOPT_HTTPHEADER => array(
				"Content-Type: application/json"
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);

		$data = json_decode($response, true);

		return $data;
	}

	public function JWT($service, $token)
	{

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->baseUrl . '/' . $service,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"Content-Type: application/json",
				"Authorization: JWT {$token}"
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$data = json_decode($response, true);
		return $data;
	}


	function update($service, $values, $token)
	{
		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => $this->baseUrl . '/' . $service,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $values,
			CURLOPT_HTTPHEADER => array(
				"Accept: application/json",
				"Content-Type: application/json",
				"Authorization: JWT $token"
			)
		));

		$response = curl_exec($curl);
		curl_close($curl);
		$data = json_decode($response);
		return $data;
	}
}
