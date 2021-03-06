<?php

namespace App\Components\RssReaderService;

use Exception;
use SimpleXMLElement;

/**
 * RssReaderService class
 */
class RssReaderService implements RssReaderServiceInterface
{
    /** @inheritDoc */
    public function read(string $rssURI)
    {
        try
        {
            $rssData = simplexml_load_file($rssURI);
            
            if (!$rssData) {
                throw new Exception('The rss data not found');
            }

            return $rssData;
        } catch (Exception $exception) {
            echo $exception->getMessage();
            throw $exception;
        }
    }
}