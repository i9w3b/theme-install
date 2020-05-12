<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    */
    'name' => 'ThemeInstall',

    /*
    |--------------------------------------------------------------------------
    | Messages
    |--------------------------------------------------------------------------
    */
    'msg_confirm' => 'Isso substituirá as views padrão. Deseja continuar?',
    'msg_confirm_auth_v' => 'Incluir as views de autenticação?',
    'msg_confirm_auth_i' => 'Instalar autenticação padrão?',
    'msg_info_download' => 'Baixando tema do repositório GitHub Instalando tema ...',
    'msg_info_install' => 'Instalando tema ...',
    'msg_info_success' => 'Tema adicionado com sucesso!',
    'msg_info_error' => 'Erro!, nada foi alterado!',
    'msg_info_off' => 'Nada foi alterado!',

    /*
    |--------------------------------------------------------------------------
    | Temporary storage clone
    |--------------------------------------------------------------------------
    */
    'tmp_storage_clone' => 'storage/app/tmp_i9theme',

    /*
    |--------------------------------------------------------------------------
    | Del files
    |--------------------------------------------------------------------------
    */
    'del_file' => [
        '/README.md','/LICENSE.md'
    ],

    /*
    |--------------------------------------------------------------------------
    | Del dir
    |--------------------------------------------------------------------------
    */
    'del_dir' => [
        '/pasta_teste'
    ],

];
