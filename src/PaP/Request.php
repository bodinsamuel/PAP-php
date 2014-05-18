<?php
namespace PAP;

class Request
{
    private $params = [];

    const URL_API = 'http://www.pap.fr/iphone/v1';
    const USERAGENT = 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36';

    /**
     * Make request to pap.fr api
     * @return stdClass
     */
    public function run()
    {
        // Prepare Url
        $query = http_build_query($this->params);
        $url = self::URL_API . '/' . $this->type . '.php?';

        $curl = curl_init();

        // Prepare options
        $options = [
            CURLOPT_URL            => $url,
            CURLOPT_USERAGENT      => self::USERAGENT,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_TIMEOUT        => 5,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => count($this->params),
            CURLOPT_POSTFIELDS     => http_build_query($this->params)
        ];
        curl_setopt_array($curl, $options);

        // exec
        $response = curl_exec($curl);
        $headers = curl_getinfo($curl);

        if(curl_errno($curl))
            throw new \Exception('[PAP] ' . curl_error($curl));

        // Throw when not OK
        if ($headers['http_code'] !== 200)
            throw new \Exception("[PAP] failed to request " . $url . ". returning " . $headers['http_code']);

        curl_close($curl);

        // Get json return stdClass
        return json_decode($response);
    }

    /**
     * Set ulr params
     * @param string $name
     * @param string $value
     */
    public function setParams($name, $value, $append = false)
    {
        $this->params[$name] = $value;
    }

    /**
     * Reset url params
     */
    public function resetParams()
    {
        $this->params = [];
    }
}
