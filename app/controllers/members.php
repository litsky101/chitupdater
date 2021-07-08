<?php
    class Members extends Controller{

        public function __construct(){
            $this->userModel = $this->model('Employee');
        }

        public function getBranches(){
            if(!isLoggedIn()){
                $this->view('users/login', []);
            }else{
                $this->userModel->loadBranches();
            }
        }

        public function GetList() {
            $forDT = (isset($_GET["for_dt"]) ? intval($_GET["for_dt"]) == 1 : false);
            $queries = array();
            $args = array();

            if ($forDT) {
                $dtQueries = (isset($_GET["query"]) && $_GET["query"] != "" ? $_GET["query"] : array());
                if (count($dtQueries) > 0) {
                    foreach ($dtQueries as $field => $nArgs) {
                        if ($field == "search_keyword") {
                            $queries[] = "(
                                LOWER(idFile) LIKE ? OR
                                LOWER(lastname) LIKE ? OR
                                LOWER(firstname) LIKE ? OR
                            )";
                            $args[] = "%" . strtolower(str_replace(" ", "%", $nArgs)) . "%";
                            $args[] = "%" . strtolower(str_replace(" ", "%", $nArgs)) . "%";
                            $args[] = "%" . strtolower(str_replace(" ", "%", $nArgs)) . "%";
                            continue;
                        }
                        $queries[] = "LOWER(" . $field . ") = ?";
                        $args[] = strtolower($nArgs);
                    }
                }
                $dtPagination = (isset($_GET["pagination"]) ? $_GET["pagination"] : array());
                $dtSort = (isset($_GET["sort"]) ? $_GET["sort"] : array("sort"=>"asc",  "field"=>"idKey"));

                $page = 1;
                $limit = 10;
                $offset = ($page - 1) * $limit;

                if (!empty($dtPagination["perpage"]) && intval($dtPagination["perpage"]) > 0) {
                    $limit = intval($dtPagination["perpage"]);
                }

                if (!empty($dtPagination["page"]) && intval($dtPagination["page"]) > 0) {
                    $page = intval($dtPagination["page"]);
                    $offset = ($page - 1) * $limit;
                }

                $data = $this->M->Table(implode(" AND ",$queries), $args, array(
                    "columns" => array("idKey","idEmployee", "idFile", "lastname", "firstname", "address", "basic"),
                    "sort" => $dtSort["sort"],
                    "sort_field" => $this->M->ToSnakeCase($dtSort["field"]),
                    "limit" => $limit,
                    "offset" => $offset
                ));
                $count = $this->M->Count(implode(" AND ",$queries), $args);

                $dataArray = array();
                if ($count > 0) {
                    foreach ($data as $member) {
                        $dataArray[] = $member->ToArray(true);
                    }
                }

                $res = array(
                    "for_dt" => true,
                    "data" => $dataArray,
                    "meta" => array(
                        "field" => $dtSort["field"],
                        "sort" => $dtSort["sort"],
                        "page" => $page,
                        "pages" => ceil($count/$limit),
                        "perpage" => $limit,
                        "total" => $count
                    )
                );
                return $res;
            }
    }
?>
