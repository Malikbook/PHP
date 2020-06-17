<?php

class File_rider implements File_check{

    protected $data_txt;
    protected $data_csv;

    use Check;

    public function __construct($data_txt, $data_csv){
        $this->data1 = $data_txt;
        $this->data2 = $data_csv;
        $this->top_list();
    }
    
    public function top_list(){

        $lines_txt = [];
        $lines_csv = [];

        foreach($this->data1 as $row){
            list($domain, $rank) = explode(";", $row);

            $lines_txt[] = [
                "domain" => $domain,
                "rank" => $rank
            ];
        }

        foreach($this->data2 as $row){
            list($domain, $rank) = explode(",", $row);

            $lines_csv[] = [
                "domain" => $domain,
                "rank" => $rank
            ];
        }

        $data_top = array ();

        $data_top = array_merge($lines_txt, $lines_csv);

        $data_list = [];

        $data_list = array_merge($data_list, array_combine(
            array_column($data_top, 'domain'),
            array_column($data_top, 'rank')
        ));
    
        $as = arsort($data_list);
       
        return $data_list;
    }
}