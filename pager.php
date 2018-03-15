<?php
interface pager
{
    public function get_total();
    public function get_pnumber();
    public function get_page_link();
    public function get_paremeters();
}