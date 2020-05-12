<?php

namespace I9W3b\ThemeInstall\Console;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class ThemeInstallCommand extends Command
{
    protected $name = 'theme:install';
    protected $description = 'Instala temas de repositórios GitHub';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {

        // url do repositório do dos arquivos a serem instalados
        $urlGitHub = $this->argument('$urlGitHub');
        $pathInstallTmp=config('themeinstall.tmp_storage_clone');

        // confirmar a instalação
        if ($this->confirm(config('themeinstall.msg_confirm'))) {

            $commandLine='git clone '. $urlGitHub . ' ' . $pathInstallTmp . $this->listDel() . ' && cp -rf ' . $pathInstallTmp . '/* resources/views/ && rm -rf ' . $pathInstallTmp;

            // confirmar a instalação de autenticação
            if ($this->confirm(config('themeinstall.msg_confirm_auth_i'))) {
                $commandLine='composer require laravel/ui && php artisan ui:controllers && php artisan ui:auth --force && '.$commandLine;
            }

            $this->info(config('themeinstall.msg_info_download'));
            $this->info('');
            $this->info(config('themeinstall.msg_info_install'));
            $this->info('');

            // $process = Process::fromShellCommandline("$commandLine");
            // $process->run();

            dd($commandLine);
            if (!$process->isSuccessful()) {
                throw new ProcessFailedException($process);
            }

            $process->getOutput();

            $this->info(config('themeinstall.msg_info_success'));

        } else {
            $this->info(config('themeinstall.msg_info_error'));
        }
    }

    /**
     * Listar arquivos e diretórios para excluir.
     *
     * @return string
     */
    protected function listDel()
    {
        $returnCommand='';

        if (count(config('themeinstall.del_file')) >= 1) {
            foreach (config('themeinstall.del_file') as $vfile) {
                $returnCommand.=" && rm -f " . config('themeinstall.tmp_storage_clone') . $vfile;
            }
        }

        if (count(config('themeinstall.del_dir')) >= 1) {
            foreach (config('themeinstall.del_dir') as $dfile) {
                $returnCommand.=" && rm -rf " . config('themeinstall.tmp_storage_clone') . $dfile;
            }
        }

        return $returnCommand;
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['$urlGitHub', InputArgument::REQUIRED, 'Argumento Url GitHub.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['options', null, InputOption::VALUE_OPTIONAL, 'Opção de donwload.', null],
        ];
    }
}
