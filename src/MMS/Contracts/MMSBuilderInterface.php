<?php

namespace Teli\MMS\Contracts;

interface MMSBuilderInterface {
    /**
     * Sending an MMS while embedding the file directly in the POST message
     * @param $payload {Object} MMS detail
     * @return mixed
     */
    public function sendUrl($payload);

    /**
     * Send an MMS message if the media you want to send located at a URL
     * @param $payload {Object} MMS detail
     * @return mixed
     */
    public function sendEmbedded($payload);
}