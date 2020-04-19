<?php

require_once  __DIR__.'/../RequestBodyUtils.php';
require_once  __DIR__.'/../ValueFormater.php';

/**
 *
 */
  class ProfileScoring
  {

    public function __construct($parent) {
      $this->client = $parent;
    }


    public function get(array $source_ids, $job_id=null, $stage=null, $use_agent=null, $date_start="1494539999",
                        $date_end=null, $page=1, $limit=30, $sort_by='date_reception', $order_by=null)
    {
      if(!$date_end){
          $date_end = time();
      }
      $query = [] ;
      $query["source_ids"] = json_encode($source_ids);
      $query["job_id"] = $job_id;
      $query["stage"] = $stage;
      $query["use_agent"] = $use_agent;
      $query["date_end"] = $date_end;
      $query["date_start"] = $date_start;
      $query["limit"] = $limit;
      $query["page"] = $page;
      $query["sort_by"] = $sort_by;
      $query["order_by"] = $order_by;

      $resp = $this->client->_rest->get("profiles/scoring", $query);
      return json_decode($resp->getBody(), true);
    }
  }

 ?>
