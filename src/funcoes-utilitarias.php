<?php
/* Função para data de nacimento */
function formatarDataParaBanco (string $data) :string {    
    return date('Y-m-d', strtotime($data));
}
