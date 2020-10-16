<?php

namespace Teli\Dids\Contracts;

interface DidsBuilderInterface{
    /**
     * List all states available for ordering numbers
     * @return mixed
     */
    public function states();

    /**
     * List all states available for ordering numbers
     * @param $state {String} Abbreviated state
     * @return mixed
     */
    public function rateCenters($state);

    /**
     * List all phone numbers in a specific ratecenter and state
     * @param $payload {Object} List local number information
     * @return mixed
     */
    public function localNumbers($payload);

    /**
     * List all available toll free numbers
     * @return mixed
     */
    public function tollFreeNumbers();

    /**
     * Order a specific number
     * @param $payload {Object} Order single number information
     * @return mixed
     */
    public function orderSingleNumber($payload);

    /**
     * Search for vanity toll free numbers
     * @param $search {String} Search keyword
     * @return mixed
     */
    public function searchVanityTollfreeNumbers($search);

    /**
     * Order a vanity toll free number
     * @param $did_number {Number} Number
     * @param null $vanity_tf {String} Vanity toll free
     * @return mixed
     */
    public function orderVanityTollfreeNumber($did_number, $vanity_tf = null);

    /**
     * List NPA
     * @param null $available
     * @param null $type
     * @return mixed
     */
    public function getNPA($available= null, $type= null);

    /**
     * List NXX
     * @param $npa
     * @param null $available
     * @param null $type
     * @return mixed
     */
    public function getNXX($npa, $available= null, $type= null);

    /**
     * List international rates csv
     * @return mixed
     */
    public function getIntlRatesCSV();

    /**
     * List international country list
     * @return mixed
     */
    public function getIntlCountriesList();

    /**
     * List international states list
     * @param $country_id
     * @return mixed
     */
    public function getIntlStatesList($country_id);
}