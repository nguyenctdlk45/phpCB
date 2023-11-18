<?php
function get_paging($num_page, $page,$base=""){
    $str_paging="<ul class='paging_num'>";
    if($page>1){
        $page_prev= $page-1;
        $str_paging.="<li ><a href=\"{$base}&page={$page_prev}\">Trước</a></li>";
    }
    for($i=1;$i<=$num_page;$i++){
        $active = "";
        if($i==$page){
            $active="class='active'";}
            $str_paging.="<li {$active}><a  href=\"{$base}&page={$i}\">{$i}</a></li>";
        
        
    }
    if($page<$num_page){
        $page_after= $page+1;
        $str_paging.="<li ><a href=\"{$base}&page={$page_after}\">Sau</a></li>";
    }
    $str_paging.="</ul>";
    echo $str_paging;
}
// <ul class='paging_num'>
// <li>Trước</li>
// <li ><a href="?mod=users&act=main&page=1">1</a></li>
// <li ><a href="?mod=users&act=main&page=2">2</a></li>
// <li ><a href="?mod=users&act=main&page=3">3</a></li>
// <li ><a href="?mod=users&act=main&page=4">4</a></li>
// <li>Sau</li>
// </ul>